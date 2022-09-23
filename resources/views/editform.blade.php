<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>মাদ্রাসার প্রোফাইল ইডিট</title>
      <link rel="shortcut icon" href="/favicon.ico">
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="/css/responsive.css">
   </head>
   <style type="text/css">
      body{ font-size:25px;
        background-image: url('/images/mosque1.png');background-repeat: repeat;}
        .input-group-text{color: #ecf0f1; background-color:#2980b9; border: 2px solid black;  font-size: 16px;}
   </style>
   <body>
@include('layouts.navbar')
<div class="d-flex justify-content-center">
   <div class='col-md-6 alert'>
      <div class='col-md-12 alert alert-info text-center'>
         <button type="button" class="close" data-dismiss="alert">×</button> 
         {{$info}}
      </div>
   </div>
</div>
      <div class="d-flex justify-content-center profile-container">
         <div class='col-md-10 text-center edit-form'>
            <div class='row'>
               <div class='col-md-12 text-center primary-info'>
                  <label for="basic-url"> <i class="fa-solid fa-mosque form-mosque"></i>&nbsp&nbsp<b>মাদ্রাসার প্রোফাইল ইডিট</b></label>
                  <hr/>
                  {{Form::open(['url' => ['edit_madrasha_profile', $madrasha->id],'files'=>'true'])}}
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসার নাম</span>
                     <input type="text" required class="form-control edit-input" id="basic-url" aria-describedby="basic-addon3" name='madrasha' value="{{$madrasha->madrasha}}"/ >
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ধরণ</span>
                     <select class="form-control edit-input" name='type'>
                        <option selected>{{$madrasha->type}}</option>
                        <option>কওমী</option>
                        <option>আলিয়া</option>
                        <option>আহলে সুন্নাত</option>
                        <option>জামায়েতে ইসলামী</option>
                     </select>
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">উপধরণ</span>
                     <select class="form-control edit-input" name='subtype'>
                         <option selected>{{$madrasha->subtype}}</option>
                        <option>তাবলীগ</option>
                        <option>চরমোনাই</option>
                        <option>শিয়া</option>
                        <option>হানাফী</option>
                     </select>
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসার ছবি</span>
                     <input type="file" name='madrasha_image' class="form-control edit-input" value='Change We Need' >
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">প্রতিষ্ঠাতা</span>
                     <input type="text" name='founder' required class="form-control edit-input" value="{{$madrasha->founder}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">প্রতিষ্ঠা সাল</span>
                     <input type="text" name='foundationyear' required class="form-control edit-input" value="{{$madrasha->foundationyear}}"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">বিভাগ</span>
                     <input type="text" name='division' required class="form-control edit-input" value="{{$madrasha->division}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">জেলা</span>
                     <input type="text" name='district' required class="form-control edit-input" value="{{$madrasha->district}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">উপজেলা</span>
                     <input type="text" name='subdistrict' required class="form-control edit-input" value="{{$madrasha->subdistrict}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ঠিকানা</span>
                     <input type="text" name='address' required class="form-control edit-input" value="{{$madrasha->address}}"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">মুহতামিম</span>
                     <input type="text" name='muhtamim' required class="form-control edit-input" value="{{$madrasha->muhtamim}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">আদর্শ</span>
                     <input type="text" name='muhtamimideology' required class="form-control edit-input" value="{{$madrasha->muhtamimideology}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ঠিকানা</span>
                     <input type="text" name='muhtamimaddress' required class="form-control edit-input" value="{{$madrasha->muhtamimaddress}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">জাতীয় পরিচয়পত্র</span>
                     <input type="text" name='muhtamimnid' required class="form-control edit-input" value="{{$madrasha->muhtamimnid}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ফোন</span>
                     <input type="text" name='muhtamimphone' required class="form-control edit-input"  value="{{$madrasha->muhtamimphone}}"/>
                  </div>
                  <hr/>
                  @foreach($madrasha->teachers as $teacher)
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">শিক্ষক</span>
                     <input type="text" name='teacher_name[]' required class="form-control edit-input" value="{{$teacher->teacher}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">পদবী</span>
                     <input type="text" name='teacher_role[]' required class="form-control edit-input" value="{{$teacher->role}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">মতাদর্শ</span>
                     <input type="text" name='teacher_ideology[]' required class="form-control edit-input" value=" {{$teacher->teacherideology}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ঠিকানা</span>
                     <input type="text" name='teacher_address[]' required class="form-control edit-input" value=" {{$teacher->teacheraddress}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <button class="btn btn-danger" style="border:2px solid white;"><a href='/delete_teacher_profile/{{$teacher->id}}/{{$madrasha->id}}' class='delete-a'>ডিলেট করুন</a></button> 
                  </div>
                  @endforeach
                  <button class="col-md-8 btn btn-info" style="border:2px solid black;"><a href='/add_teacher_profile_form/{{$madrasha->id}}' target="_blank" class='add-a'>নতুন শিক্ষক যোগ করুন</a></button> 
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">সর্বোচ্চ ক্লাস</span>
                     <input type="text" name='highestclass' required class="form-control edit-input" value="{{$madrasha->highestclass}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">শিক্ষক সংখ্যা</span>
                     <input type="text" name='teachernumber' required class="form-control edit-input" value="{{$madrasha->teachernumber}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ছাত্র/ছাত্রী সংখ্যা</span>
                     <input type="text" name='studentnumber' required class="form-control edit-input" value=" {{$madrasha->studentnumber}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসা ক্যাটাগরি</span>
                        <select class="form-control edit-input" name='category'>
                         <option value='৫,০০০ জনের অধিক ছাত্র'>৫,০০০ জনের অধিক ছাত্র</option>
                        <option value='২,৫০০-৫,০০০ জন ছাত্র'>২,৫০০-৫,০০০ জন ছাত্র</option>
                        <option value='১,০০০-২,৫০০ জন ছাত্র'>১,০০০-২,৫০০ জন ছাত্র</option>
                        <option value='অনধিক ১,০০০ জন ছাত্র'>অনধিক ১,০০০ জন ছাত্র</option>
                     </select>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">রাজনৈতিক মতাদর্শ</span>
                     <input type="text"name='madrashaideology' required class="form-control edit-input" value="{{$madrasha->information->madrashaideology}}"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">বহিরাগত প্রভাব</span>
                     <input type="text" name='externalinfluence' class="form-control edit-input" value="{{$madrasha->information->externalinfluence}}"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbspগুরুত্বপূর্ণ ঘটনা/দুর্ঘটনা/বিরোধ&nbsp&nbsp</span>
                     <textarea class="ckeditor6 form-control" name='accidentinfo'  aria-label="With textarea" placeholder="বিগত সময়ে মাদ্রাসায় সংঘটিত গুরুত্বপূর্ণ ঘটনা/দুর্ঘটনা/বিরোধের বিবরণ"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspমামলা সম্পর্কিত তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor7 form-control" name='caseinfo' aria-label="With textarea" placeholder="মাদ্রাসার মামলা সম্পর্কিত তথ্যাদি (মামলা নাম্বার, এজাহার, চার্জশীট, আসামী, ইত্যাদি)"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbspব্যাংক একাউন্টের তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor8 form-control" name='bankinfo' aria-label="With textarea" placeholder="মাদ্রাসার আর্থিক তথ্যাদি (ব্যাংক একাউন্ট নাম্বার, জমাকৃত অর্থের পরিমাণ, মাসিক/বাৎসরিক লেনদেনের পরিমাণ, ইত্যাদি)"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspদাতার তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor9 form-control" name='donnerinfo' aria-label="With textarea" placeholder="মাদ্রাসার প্রধান দাতা/দাতা গোষ্ঠীর তথ্যাদি"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspমন্তব্য&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor10 form-control" name='remarks' aria-label="With textarea" placeholder="মাদ্রাসা সম্পর্কে সার্বিক মন্তব্য"></textarea>
                  </div>
                  <hr/>
                  <br/>
                  <div class="container">
                     <div class="col-md-12 text-center">
                        <button type="submit" class="form-control btn btn-info" style='font-size:20px; border:2px solid black'>ইডিট সম্পন্ন করুন</button>    
                     </div>
                  </div>
                  {{ Form::close() }}
                    <button type="button" style='font-size:23px;border:2px solid white; margin-top:50px;' class="btn btn-danger col-md-4"><a href="/delete_madrasha_profile/{{$madrasha->id}}" style="color:white;" class="confirmation">প্রোফাইল ডিলেট করুন</a></button>
               </div>
            </div>
         </div>
      </div>
   </body>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script src="/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('আপনি কি মাদ্রাসার প্রোফাইলটি ডিলেট করতে চান?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
   <script type="text/javascript" src="/ckeditor/adapters/jquery.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $('.ckeditor6').ckeditor();
         $('.ckeditor7').ckeditor();
         $('.ckeditor8').ckeditor();
         $('.ckeditor9').ckeditor();
         $('.ckeditor10').ckeditor();
      });
      CKEDITOR.config.height='350px';
      CKEDITOR.config.width='1010px';
      CKEDITOR.config.extraPlugins = 'confighelper';
      var config = {};
      config.value = 'some value'; 
      CKEDITOR.replace("ckeditor6" , config );
      CKEDITOR.replace("ckeditor7" , config );
      CKEDITOR.replace("ckeditor8" , config );
      CKEDITOR.replace("ckeditor9" , config );
      CKEDITOR.replace("ckeditor10" , config );
   </script>
</html>