<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <title>নতুন শিক্ষক সংযুক্তি</title>
      <link rel="shortcut icon" href="/favicon.ico">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
      <!-- Fontawesome  -->
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <!-- Style  -->
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="/css/responsive.css">
   </head>
   <style type="text/css">
      body{ font-size:25px;
      background-image: url('/images/mosque1.png');background-repeat: repeat;}
      .add-teacher{
      margin-top:36px;
      background-color: #20c997;
      border:  2px solid black;
      padding-bottom: 50px;
      }
      .input-group-text{
      color: #ecf0f1;
      background-color:#2980b9;
      border: 2px solid black;
      font-weight: bold;
      font-size: 16px;
      }
   </style>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center profile-container">
         <div class='col-md-10 text-center add-teacher'>
            <div class='row'>
               <div class='col-md-12 text-center primary-info'>
                  <label for="basic-url">
                     <h3><i class="fa-solid fa-people-group" style="color:white;"></i>&nbsp&nbsp<b>নতুন শিক্ষক যোগ করুন</b></h3>
                  </label>
                  <hr/>
                  {{Form::open(['url' => ['add_teacher_profile', $madrasha]])}}
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
                  <div class="container">
                     <div class="col-md-12 text-center">
                        <button type="submit" class="form-control btn btn-info" style='font-size:20px; border:2px solid white'>শিক্ষকদের প্রোফাইল যোগ করুন</button>    
                     </div>
                  </div>
                  {{ Form::close() }}
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="/js/jquery.min.js"></script>
   <script type="text/javascript" src="/js/popper.min.js"></script>
   <script type="text/javascript" src="/js/custom.js"></script>
</html>