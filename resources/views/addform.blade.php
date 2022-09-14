<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <link rel="shortcut icon" href="favicon.ico">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <!-- Fontawesome  -->
      <link rel="stylesheet" href="fontawesome/css/all.css">
      <!-- Style  -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
   </head>
   <style type="text/css">
      body{ font-size:25px;
      background-image: url('/images/mosque1.png');background-repeat: repeat;}
   </style>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center success-container">
         <div class='col-md-6 text-center'>
            @include('flash-message')
         </div>
      </div>
      <div class="d-flex justify-content-center profile-container">
         <div class='col-md-10 text-center madrasha-form'>
            <div class='row'>
               <div class='col-md-12 text-center primary-info'>
                  <label for="basic-url"> <i class="fa-solid fa-mosque form-mosque"></i>&nbsp&nbspনতুন মাদ্রাসার প্রোফাইল পূরণ</label>
                  <hr/>
                  {{ Form::open(array('url' => '/submit_madrasha_profile','files'=>'true')) }}
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসার নাম</span>
                     <input type="text" required class="form-control"  id="basic-url" aria-describedby="basic-addon3" name='madrasha' placeholder="মাদ্রাসার নাম"/ >
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ধরণ</span>
                     <select class="form-control" required name='type'>
                        <option disabled selected>মাদ্রাসার ধরণ</option>
                        <option>কওমী</option>
                        <option>আলিয়া</option>
                        <option>আহলে সুন্নাত</option>
                        <option>জামায়েতে ইসলামী</option>
                     </select>
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">উপ-ধরণ</span>
                     <select class="form-control" required name='subtype'>
                        <option disabled selected>মাদ্রাসার উপ-ধরণ</option>
                        <option>তাবলীগ</option>
                        <option>চরমোনাই</option>
                        <option>শিয়া</option>
                        <option>হানাফী</option>
                     </select>
                     <span class="input-group-addon">&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসার ছবি</span>
                     <input type="file" name='madrasha_image' class="form-control" id="customFile">
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">প্রতিষ্ঠাতা</span>
                     <input type="text"  name='founder' class="form-control" placeholder="মাদ্রাসার প্রতিষ্ঠাতা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">প্রতিষ্ঠা সাল</span>
                     <input type="text"  name='foundationyear' class="form-control" placeholder="মাদ্রাসার প্রতিষ্ঠা সাল"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">বিভাগ</span>
                     <input type="text"  name='division' required class="form-control" placeholder="বিভাগ"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">জেলা</span>
                     <input type="text"  name='district' required class="form-control" placeholder="জেলা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">উপজেলা</span>
                     <input type="text"  name='subdistrict' required class="form-control" placeholder="উপজেলা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ঠিকানা</span>
                     <input type="text"  name='address'  class="form-control" placeholder="ঠিকানা"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">মুহতামিম</span>
                     <input type="text"  name='muhtamim' required class="form-control" placeholder="মুহতামিমের নাম"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">আদর্শ</span>
                     <input type="text"  name='muhtamimideology'  class="form-control" placeholder="রাজনৈতিক আদর্শ"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ঠিকানা</span>
                     <input type="text"  name='muhtamimaddress'  class="form-control" placeholder=" ঠিকানা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">জাতীয় পরিচয়পত্র</span>
                     <input type="text"  name='muhtamimnid'  class="form-control" placeholder="জাতীয় পরিচয়পত্র"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ফোন</span>
                     <input type="text"  name='muhtamimphone'  class="form-control"  placeholder="ফোন নাম্বার"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">উল্লেখযোগ্য শিক্ষক</span>
                     <select class="form-control" id="t-count" name="t-count">
                        <option disabled selected>উল্লেখযোগ্য শিক্ষকের সংখ্যা</option>
                        <option value='1'>১</option>
                        <option value='2'>২</option>
                        <option value='3'>৩</option>
                        <option value='4'>৪</option>
                        <option value='5'>৫</option>
                        <option value='6'>৬</option>
                        <option value='7'>৭</option>
                        <option value='8'>৮</option>
                        <option value='9'>৯</option>
                        <option value='10'>১০</option>
                        <option value=0>উল্লেখযোগ্য শিক্ষক নেই</option>
                     </select>
                  </div>
                  <hr/>
                  <div class="input-group mb-3" id="teacher-field">
                     <div id="t-name" class="col-md-3"></div>
                     <div id="t-role" class="col-md-3"></div>
                     <div id="t-ideology" class="col-md-3"></div>
                     <div id="t-address" class="col-md-3"></div>
                  </div>
                  <hr id="line" style="display: none;"/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">সর্বোচ্চ ক্লাস</span>
                     <input type="text"  name='highestclass'  class="form-control" placeholder="সর্বোচ্চ যে ক্লাস পর্যন্ত পড়ানো হয়"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">শিক্ষক সংখ্যা</span>
                     <input type="text"  name='teachernumber'  class="form-control" placeholder="শিক্ষক সংখ্যা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">ছাত্র/ছাত্রী সংখ্যা</span>
                     <input type="text"  name='studentnumber'  class="form-control" placeholder=" ছাত্র/ছাত্রী সংখ্যা"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">মাদ্রাসা ক্যাটাগরি</span>
                     <select class="form-control" required name='category'>
                        <option value='৫,০০০ জনের অধিক ছাত্র'>৫,০০০ জনের অধিক ছাত্র</option>
                        <option value='২,৫০০-৫,০০০ জন ছাত্র'>২,৫০০-৫,০০০ জন ছাত্র</option>
                        <option value='১,০০০-২,৫০০ জন ছাত্র'>১,০০০-২,৫০০ জন ছাত্র</option>
                        <option value='অনধিক ১,০০০ জন ছাত্র'>অনধিক ১,০০০ জন ছাত্র</option>
                     </select>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon3">রাজনৈতিক মতাদর্শ</span>
                     <input type="text"  name='madrashaideology'  class="form-control" placeholder="মাদ্রাসার সার্বিক রাজনৈতিক মতাদর্শ"/>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <span class="input-group-text" id="basic-addon3">বহিরাগত প্রভাব</span>
                     <input type="text"  name='externalinfluence'  class="form-control" placeholder="বহিরাগত রাজনৈতিক/অরাজনৈতিক প্রভাব"/>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbspগুরুত্বপূর্ণ ঘটনা/দুর্ঘটনা/বিরোধ&nbsp&nbsp</span>
                     <textarea class="ckeditor1 form-control" name='accidentinfo' required aria-label="With textarea" placeholder="বিগত সময়ে মাদ্রাসায় সংঘটিত গুরুত্বপূর্ণ ঘটনা/দুর্ঘটনা/বিরোধের বিবরণ"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspমামলা সম্পর্কিত তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor2 form-control" name='caseinfo' required aria-label="With textarea" placeholder="মাদ্রাসার মামলা সম্পর্কিত তথ্যাদি (মামলা নাম্বার, এজাহার, চার্জশীট, আসামী, ইত্যাদি)"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbspব্যাংক একাউন্টের তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor3 form-control" name='bankinfo' required aria-label="With textarea" placeholder="মাদ্রাসার আর্থিক তথ্যাদি (ব্যাংক একাউন্ট নাম্বার, জমাকৃত অর্থের পরিমাণ, মাসিক/বাৎসরিক লেনদেনের পরিমাণ, ইত্যাদি)"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspদাতার তথ্যাদি&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor3 form-control" name='donnerinfo' required aria-label="With textarea" placeholder="মাদ্রাসার প্রধান দাতা/দাতা গোষ্ঠীর তথ্যাদি"></textarea>
                  </div>
                  <hr/>
                  <div class="input-group mb-3">
                     <span class="input-group-text"  id="basic-addon3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspমন্তব্য&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                     <textarea class="ckeditor4 form-control" name='remarks' required aria-label="With textarea" placeholder="মাদ্রাসা সম্পর্কে সার্বিক মন্তব্য"></textarea>
                  </div>
                  <hr/>
                  <br/>
                  <div class="container">
                     <div class="col-md-12 text-center">
                        <button type="submit" class="form-control btn btn-success" style='font-size:20px;'>প্রোফাইলটি সাবমিট করুন</button>    
                     </div>
                  </div>
                  {{ Form::close() }}
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="/js/jquery.min.js"></script>
   <script type="text/javascript" src="/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="/js/popper.min.js"></script>
   <script type="text/javascript" src="/js/custom.js"></script>
   <script src="ckeditor/ckeditor.js"></script>
   <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $('.ckeditor1').ckeditor();
         $('.ckeditor2').ckeditor();
         $('.ckeditor3').ckeditor();
         $('.ckeditor4').ckeditor();
      });
      CKEDITOR.config.height='350px';
      CKEDITOR.config.width='1010px';
      CKEDITOR.config.extraPlugins = 'confighelper';
      var config = {};
      config.placeholder = 'some value'; 
      CKEDITOR.replace("ckeditor1" , config );
      CKEDITOR.replace("ckeditor2" , config ); 
   </script>
</html>