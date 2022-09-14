<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Madrasha;

use App\Teacher;

use App\Information;

use View;

use Storage;

use DB;

Use PDF;

use App\Helpers;

class MadrashaController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Welcomepage()
    {

        return view('welcome');

    }

    public function Uploadmadrashaprofile(Request $request)
    {

        $address = urlencode($request->input('subdistrict'));
        $key = env('GOOGLE_MAPS_API_KEY');
        $json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&key=$key");
        $json = json_decode($json);
        $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
        $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

        $Madrasha = new Madrasha;

        $Madrasha->latitude = $lat;
        $Madrasha->longitude = $long;


        if ($request->hasFile('madrasha_image'))
        {
            $imagefile = $request->file('madrasha_image');
            $imagefile->move(public_path('images/madrasha') , $imagefile->getClientOriginalName());
            $Madrasha->madrashaimage = $imagefile->getClientOriginalName();
        }
        else
        {
            $Madrasha->madrashaimage = 'mosque.jpg';
        }
       
        $madrasha_columns = ['madrasha','type', 'subtype','founder','foundationyear','division','district','subdistrict','address','muhtamim','muhtamimideology','muhtamimaddress','muhtamimnid','muhtamimphone','highestclass','','teachernumber','studentnumber','category'];

        foreach($madrasha_columns as $c){

            if($request->input($c) != null){

                $Madrasha->$c = $request->input($c);

            }
           

        }

        $Madrasha->save();

        $Information = new Information();
        
        $info_columns = ['accidentinfo','madrashaideology','externalinfluence','caseinfo','bankinfo','donnerinfo','remarks'];

        foreach($info_columns as $c){

            if($request->input($c) != null){

                $Information->$c = $request->input($c);

            }  

        }

        $Madrasha->information()
            ->save($Information);


        $teacher_count = $request->input('t-count');
        for ($count = 1;$count <= $teacher_count;$count++)
        {
            $Teacher = new Teacher();
            $Teacher->teacher = $request->input('t_name_' . $count);
            $Teacher->role = $request->input('t_role_' . $count);
            $Teacher->teacherideology = $request->input('t_ideology_' . $count);
            $Teacher->teacheraddress = $request->input('t_address_' . $count);
            $Madrasha->teachers()
                ->save($Teacher);
        }

        return redirect('/addprofile')->with('success', 'মাদ্রাসার প্রোফাইলটি তৈরি হয়েছে !');

    }


    public function Editprofileview($id)
    {

        $madrasha = Madrasha::where('id', $id)->first();

        return view('editform')
            ->with('madrasha', $madrasha)->with('info', 'ছবি সহ যে সব ফিল্ড পরিবর্তনের প্রয়োজন নেই, তা অপরিবর্তিত রাখুন');

    }

     public function Downloadmadrashaprofile($id)
    {

     $madrasha = Madrasha::find($id);

     $pdf = PDF::loadView('pdf.detailpdf',compact('madrasha'));

     return $pdf->stream($madrasha->madrasha.'.pdf');



    }

  
    public function Editmadrashaprofile(Request $request, $id)
    {

        $madrasha = Madrasha::find($id);

        if ($madrasha->subdistrict != $request->input('subdistrict'))
        {

            $address = urlencode($request->input('subdistrict'));
            $key = env('GOOGLE_MAPS_API_KEY');
            $json = file_get_contents("https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&key=$key");
            $json = json_decode($json);
            $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
            $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

            $madrasha->latitude = $lat;
            $madrasha->longitude = $long;

        };

        if ($request->hasFile('madrasha_image'))
        {
            $imagefile = $request->file('madrasha_image');
            $imagefile->move(public_path('images/madrasha') , $imagefile->getClientOriginalName());
            $madrasha->madrashaimage = $imagefile->getClientOriginalName();
        };

        $madrasha_columns = ['madrasha','type','subtype','founder','foundationyear','division','district','subdistrict','address','muhtamim','muhtamimideology','muhtamimaddress','muhtamimnid','muhtamimphone','highestclass','','teachernumber','studentnumber','category'];

        foreach($madrasha_columns as $c){

            if($request->has($c)){

                $madrasha->$c = $request->input($c);

            }

        }

        $madrasha->update();

        
        $information = Information::where('madrasha_id', $id)->first();

        $info_columns = ['accidentinfo','madrashaideology','externalinfluence','caseinfo','bankinfo','donnerinfo','remarks'];

        foreach($info_columns as $c){

            if($request->input($c) != null){

                $information->$c = $request->input($c);
                
            }


        }

        $information->update();
  
    if($request->has('teacher_name') && $request->has('teacher_role') && $request->has('teacher_ideology') && $request->has('teacher_address')) {

        $madrasha->teachers()->delete();
        
        $roles = $request->input('teacher_role');
        $teacherideologys = $request->input('teacher_ideology');
        $teacheraddresses = $request->input('teacher_address');
        
        foreach ($request->get('teacher_name') as $key => $teacher_value)
        {
            $teachers[] = Teacher::create(['teacher' => $teacher_value, 'role' => $roles[$key], 'teacherideology' => $teacherideologys[$key], 'teacheraddress' => $teacheraddresses[$key], 'madrasha_id' => $madrasha->id, ]);
        }
    }
        return redirect('/madrashaprofile/' . $id);

    }

    public function Deleteteacherprofile($teacher, $madrasha)
    {

        $madrasha = Madrasha::where('id', $madrasha)->first();

        $teacher = Teacher::where('id', $teacher)->delete();

        return view('editform')
            ->with('madrasha', $madrasha)->with('info', 'শিক্ষকের তথ্য মুছে ফেলা হয়েছে !');

    }

    public function Deletemadrashaprofile($id)
    {

        $madrasha = Madrasha::where('id', $id)->first();

        $madrasha->information()->delete();

        $madrasha->teachers()->delete();

        $madrasha->delete();

        return redirect('/')->with('info', 'মাদ্রাসাটির প্রোফাইলটি ডিলেট করা হয়েছে!');

    }

    public function Addteacherview($madrasha)
    {

        return view('addnewteacher', compact('madrasha'));

    }

    public function Addmadrashaview()
    {

        return view('addform');

    }

    public function Addteacherprofile(Request $request, $id)
    {

        $madrasha = Madrasha::where('id', $id)->first();

        $teacher_count = $request->input('t-count');
        for ($count = 1;$count <= $teacher_count;$count++)
        {
            $teacher = new Teacher();
            $teacher->teacher = $request->input('t_name_' . $count);
            $teacher->role = $request->input('t_role_' . $count);
            $teacher->teacherideology = $request->input('t_ideology_' . $count);
            $teacher->teacheraddress = $request->input('t_address_' . $count);
            $madrasha->teachers()
                ->save($teacher);
        }

        return redirect('/madrashaprofile/' . $id);

    }

    public function Viewmadrashaprofile(Request $request)
    {

        $name = explode(', ', $request->input('search')) [0];

        $madrasha = Madrasha::where('madrasha', $name)->first();

        if (is_null($madrasha) == false)
        {

            return view('madrasha', compact("madrasha"));

        }

        else
        {

            return redirect('/')->with('error', 'মাদ্রাসাটির প্রোফাইল খুঁজে পাওয়া যায়নি!');

        }

    }

    public function Showmadrashaprofile($id)
    {

        $madrasha = Madrasha::where('id', $id)->first();

        return view('madrasha', compact("madrasha"));

    }

    public function Showmadrashaonmap($madrasha, $latitude, $longitude)
    {

        return view('map', compact("madrasha", "latitude", "longitude"));

    }

    public function autocompleteSearch(Request $request)
    {
        $q = $request->get('q');
        $m = Madrasha::select('madrasha')->where('madrasha', 'like', "%{$request->q}%")
            ->pluck('madrasha')
            ->toArray();

        $d = Madrasha::select('district')->where('madrasha', 'like', "%{$request->q}%")
            ->pluck('district')
            ->toArray();

        $result = array_map(null, $m, $d);
        $match = [];
        foreach ($result as $r)
        {
            array_push($match, implode(', ', $r));
        };

        return response()->json($match);
    }

    public function getdistrict($division)
    {

        $districts = DB::table('madrashas')->where('division', $division)->distinct()
            ->get(['district'])
            ->pluck('district');

        return json_encode($districts);
    }

    public function getsubdistrict($district)
    {

        $subdistricts = DB::table('madrashas')->where('district', $district)->distinct()
            ->get(['subdistrict'])
            ->pluck('subdistrict');

        return json_encode($subdistricts);
    }

    public function getsubtype($type)
    {

        $subtypes = DB::table('madrashas')->where('type', $type)->distinct()
            ->get(['subtype'])
            ->pluck('subtype');

        return json_encode($subtypes);
    }

    public function Sortmadrashaprofile(Request $request)
    {

    $inputs = ['division','district','subdistrict','type','category','subtype'];

    $query = [];

    $title = '';

        foreach($inputs as $data){

            if($request->input($data) != null){

             $title = $title.' '.Helpers::convertstring($data).': '."<span style='color:red;'>".$request->input($data).'</span>'.'&nbsp&nbsp';

            array_push($query,[$data,$request->input($data)]);

            }

        }

        $madrashas = Madrasha::where($query)->paginate(20);

        $count =  Helpers::convertnumber($madrashas->total());


        if(!$madrashas->isEmpty()){

        return view('sortview', compact('madrashas', 'title','count'));

    }

    elseif($madrashas->isEmpty()){

        return redirect('/')->with('error', 'উল্লেখিত বৈশিষ্ট্যর কোন মাদ্রাসা পাওয়া যায়নি!');
    }

 
    }

    public function Regionalmadrashaprofile($title,$region, $name, $type)
    {
        ##for all types of madrashas in a region

        if($type == 'all'){

        $madrashas =  Madrasha::where($region, '=', $name)->paginate(20);

        $count =  Helpers::convertnumber($madrashas->total());

        $title = $name .' '.$title .' এর মাদ্রাসা সমূহ ('.$count.'টি মাদ্রাসা) ';

        }

        ##for specific type of madrashas in a region

        else{


        $madrashas = $madrashas = Madrasha::where([[$region, '=', $name], ['type', '=', $type], ])->paginate(20);

        $count =  Helpers::convertnumber($madrashas->total());

            $title = $name .' '. $title .' এর '. $type . ' মাদ্রাসা সমূহ ('.$count.'টি মাদ্রাসা) ';

        }

    if(!$madrashas->isEmpty()){

        return view('regionalview', compact('madrashas', 'title'));

    }

    elseif($madrashas->isEmpty()){

        return redirect('/')->with('error', 'উল্লেখিত বৈশিষ্ট্যর কোন মাদ্রাসা পাওয়া যায়নি!');
    }

    }

}

