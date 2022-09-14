<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{$madrasha->madrasha}}</title>
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <link rel="shortcut icon" href="/favicon.ico">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
      <!-- Fontawesome  -->
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <!-- Style  -->
      <link rel="stylesheet" href="/css/style.css">
      <style type="text/css">
         body{background-image: url('/images/mosque1.png');background-repeat: repeat;}  .fa-solid{color: #3498db;} .fa-map-pin{color:#e74c3c;} 
      </style>
   </head>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center profile-container">
         <div class='col-md-10 text-center madrasha-profile'>
            <div class='row'>
               <div class='col-md-12 text-center primary-info'>
                  <img src="/images/madrasha/{{$madrasha->madrashaimage}}" class='madrasha-image' alt="">
                  <h4><br/><i class="fa-solid fa-mosque"></i>&nbsp&nbsp<b>{{$madrasha->madrasha}}</b></h4>
                  <h5><i class="fa-solid fa-book"></i>&nbsp&nbspধরণঃ <b>{{$madrasha->type}} মাদ্রাসা</b></h5>
                  <hr class='horizontal'>
                  <h5> <i class="fa-solid fa-person"></i>&nbsp&nbspপ্রতিষ্ঠাতাঃ <b>{{$madrasha->founder}}</b></h5>
                  <h5><i class="fa-solid fa-calendar-days"></i>&nbsp&nbspপ্রতিষ্ঠা সালঃ <b>{{$madrasha->foundationyear}} সাল</b></h5>
                  <hr class='horizontal'>
                  <br/>
                  <h4><i class="fa-solid fa-map-location">&nbsp&nbsp</i><b> ঠিকানা</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">বিভাগ</th>
                        <th class="text-center">জেলা</th>
                        <th class="text-center">উপজেলা</th>
                        <th class="text-center">অবস্থান</th>
                        <th class="text-center">গুগল ম্যাপ</th>
                     </tr>
                     <tr>
                        <td class="text-center"><a href='/profile/বিভাগ/division/{{$madrasha->division}}/all' title='{{$madrasha->division}} বিভাগের মাদ্রাসা সমূহ দেখুন'>{{$madrasha->division}}</a></td>
                        <td class="text-center"><a href='/profile/জেলা/district/{{$madrasha->district}}/all' title='{{$madrasha->district}} জেলার মাদ্রাসা সমূহ দেখুন'>{{$madrasha->district}}</a></td>
                        <td class="text-center"><a href='/profile/উপজেলা/subdistrict/{{$madrasha->subdistrict}}/all' title='{{$madrasha->subdistrict}} উপজেলার মাদ্রাসা সমূহ দেখুন'>{{$madrasha->subdistrict}}</a></td>
                        <td class="text-center">{{$madrasha->address}}</td>
                        <td class="text-center"> <a href='/map/{{$madrasha->madrasha}}/{{$madrasha->latitude}}/{{$madrasha->longitude}}' target="_blank"><span><i class="fa-solid fa-map-pin"></i></span></a></td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  <h4><i class="fa-solid fa-person">&nbsp&nbsp</i><b>মুহতামিম</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">মুহতামিম</th>
                        <th class="text-center">রাজনৈতিক আদর্শ</th>
                        <th class="text-center">ঠিকানা</th>
                        <th class="text-center">জাতীয় পরিচয় পত্র</th>
                        <th class="text-center">মোবাইল নাম্বার</th>
                     </tr>
                     <tr>
                        <td class="text-center"><b>{{$madrasha->muhtamim}}</b></td>
                        <td class="text-center">{{$madrasha->muhtamimideology}}</td>
                        <td class="text-center">{{$madrasha->muhtamimaddress}}</td>
                        <td class="text-center" style='color:#e74c3c'><b>{{$madrasha->muhtamimnid}}</b></td>
                        <td class="text-center" style='color:#e74c3c'><b>{{$madrasha->muhtamimphone}}</b></td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  @if($madrasha->teachers->count() != 0)
                  <h4><i class="fa-solid fa-people-group">&nbsp&nbsp</i><b>মাদ্রাসার শিক্ষকদের তথ্য</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">নাম</th>
                        <th class="text-center">পদ</th>
                        <th class="text-center">রাজনৈতিক আদর্শ</th>
                        <th class="text-center">ঠিকানা</th>
                     </tr>
                     @foreach($madrasha->teachers as $teacher)
                     <tr>
                        <td class="text-center">{{$teacher->teacher}}</td>
                        <td class="text-center">{{$teacher->role}}</td>
                        <td class="text-center">{{$teacher->teacherideology}}</td>
                        <td class="text-center">{{$teacher->teacheraddress}}</td>
                     </tr>
                     @endforeach
                  </table>
                  <hr/>
                  <br/>
                  @endif
                  <h4><i class="fa-solid fa-book"></i>&nbsp&nbsp<b>মাদ্রাসার একাডেমিক তথ্য</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">সর্বোচ্চ ক্লাস</th>
                        <th class="text-center">শিক্ষক সংখ্যা</th>
                        <th class="text-center">ছাত্র/ছাত্রী সংখ্যা</th>
                     </tr>
                     <tr>
                        <td class="text-center">{{$madrasha->highestclass}}</td>
                        <td class="text-center">{{$madrasha->teachernumber}}</td>
                        <td class="text-center">{{$madrasha->studentnumber}}</td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  <h4><i class="fa-solid fa-hand-fist"></i>&nbsp&nbsp<b>মাদ্রাসার রাজনৈতিক তথ্য</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">রাজনৈতিক অবস্থান</th>
                        <th class="text-center">বহিরাগত রাজনৈতিক/অরাজনৈতিক প্রভাব</th>
                        <th class="text-center">গুরুত্বপূর্ন ঘটনা/দুর্ঘটনা/বিরোধের তথ্য</th>
                     </tr>
                     <tr>
                        <td class="text-center">{{$madrasha->information->madrashaideology}}</td>
                        <td class="text-center">{{ $madrasha->information->externalinfluence }}</td>
                        <td class="text-center">{!! $madrasha->information->accidentinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  <h4><i class="fa-solid fa-scale-balanced"></i>&nbsp&nbsp<b>মাদ্রাসার মামলা বিষয়ক তথ্য</b></h4>
                  <table>
                     <tr>
                        <td class="text-left">{!! $madrasha->information->caseinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  <h4><i class="fa-solid fa-building-columns"></i>&nbsp&nbsp<b>মাদ্রাসার অর্থনৈতিক তথ্য</b></h4>
                  <table>
                     <tr>
                        <th class="text-center">ব্যাংক একাউন্ট সম্পর্কিত তথ্য </th>
                        <th class="text-center">দাতা সম্পর্কিত তথ্য</th>
                     </tr>
                     <tr>
                        <td class="text-center">{!! $madrasha->information->bankinfo !!}</td>
                        <td class="text-center">{!! $madrasha->information->donnerinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <br/>
                  <h4><i class="fa-solid fa-comments"></i>&nbsp&nbsp<b>মাদ্রাসা সম্পর্কে মন্তব্য</b></h4>
                  <table>
                     <tr>
                        <td class="text-left">{!! $madrasha->information->remarks !!}</td>
                     </tr>
                  </table>
                  <hr/>
                 
                  <button type="button" style='font-size:23px;border:2px solid black;' class="btn btn-danger col-md-4"><a href="/downloadprofile/detail/{{$madrasha->id}}" style="color:white;" target="_blank"><i class="fa-solid fa-file-pdf" style='color:white;'></i>&nbsp&nbspবিস্তারিত প্রোফাইল ডাউনলোড </a></button> 

                  <button type="button" style='font-size:23px;border:2px solid black;' class="btn btn-success col-md-4"><a href="/downloadprofile/short/{{$madrasha->id}}" style="color:white;" target="_blank"><i class="fa-regular fa-file-pdf"></i>&nbsp&nbspসংক্ষিপ্ত প্রোফাইল ডাউনলোড</a></button>

                  <hr/>
               
                  <button type="button" style='font-size:23px;border:2px solid black;' class="btn btn-info col-md-8"><a href="/editprofile/madrasha/{{$madrasha->id}}" style="color:white;" target="_blank"><i class="fa-regular fa-pen-to-square"></i>&nbsp&nbspপ্রোফাইল ইডিট করুন</a></button>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="/js/jquery.min.js"></script>  
   </body>
</html>