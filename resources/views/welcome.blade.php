<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>মাদ্রাসা ডাটাবেইজ</title>
     <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <link rel="shortcut icon" href="favicon.ico">
      <!-- Bootstrap  -->
      <link rel="preload" href="/bootstrap/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
      <!-- Fontawesome  -->
      <link rel="preload" href="/fontawesome/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
      <!-- Style  -->
      <link rel="preload" href="/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
      <style type="text/css">
         body{background-color: #1abc9c;} .alert-success{margin-top: 20px;}
      </style>
   </head>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center success-container">
         <div class='col-md-6 text-center'>
            @include('flash-message')
         </div>
      </div>
      <div class="d-flex justify-content-center search-block content">
         <div class='col-md-10 md-offset-2 search-area text-center'>
            <h2 class='col-md-12' style='color: #e74c3c;padding-top: 50px;padding-bottom: 20px;'> <i class="fa-solid fa-magnifying-glass"></i>&nbspমাদ্রাসা অনুসন্ধান</h2>
            {{ Form::open(array('url' => '/viewmadrashaprofile','method' => 'GET')) }}
            <div class="input-group mb-3">
               <div class='col-md-2'></div>
               <input type="text" autocomplete="off" id="search" required name="search" placeholder="মাদ্রাসার নাম লিখুন" class="col-md-8 form-control search-box" />
               <button type="submit" class='search-button' style='border: 1px solid black;'>
               <i class="fa-solid fa-magnifying-glass fa-mag"></i></button>
            </div>
            {{ Form::close() }}    
         </div>
      </div>

      <div class="d-flex justify-content-center sort-container">
         <div class='col-md-10 text-center sort-area'>
            <div class='row'>
               <div class='col-md-12 text-center primary-info'>
                  <h2 class='col-md-12' style='padding-top: 20px;color: #e74c3c;padding-bottom: 30px;'> <i class="fa-solid fa-filter"></i>&nbsp&nbspমাদ্রাসা সর্টিং</h2>
                  {{ Form::open(array('url' => '/sortmadrashaprofile','method' => 'GET')) }}
                  <div class="input-group mb-3">
                     <select class="select form-control" id="div-select" name="division">
                        <option disabled selected>বিভাগ</option>
                         @foreach($data as $key => $value )
                        <option>{{$key}}</option> 
                        @endforeach
                     </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <select class="select form-control" id="dis-select" name="district">
                        <option value='all' disabled selected>জেলা</option>
                     </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <select class="select form-control" id="subdis-select" name="subdistrict">
                        <option value='all' disabled selected>উপজেলা</option>
                     </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <select class="select form-control" id="type-select"  name="type" required>
                        <option value='all' selected disabled>ধরণ</option>
                        <option>কওমী</option>
                        <option>আলিয়া</option>
                        <option>আহলে সুন্নাত</option>
                        <option>জামায়েতে ইসলামী</option>
                     </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                  <select class="select form-control"  id="subtype-select" name="subtype">
                     <option value='all' selected disabled>উপধরণ</option>
                  </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <select class="select form-control" name="category" required >
                        <option value='all' selected disabled>উপধরণ</option>
                        <option value='৫,০০০ জনের অধিক ছাত্র'>৫,০০০ জনের অধিক ছাত্র</option>
                        <option value='২,৫০০-৫,০০০ জন ছাত্র'>২,৫০০-৫,০০০ জন ছাত্র</option>
                        <option value='১,০০০-২,৫০০ জন ছাত্র'>১,০০০-২,৫০০ জন ছাত্র</option>
                        <option value='অনধিক ১,০০০ জন ছাত্র'>অনধিক ১,০০০ জন ছাত্র</option>
                     </select>
                     <span class="input-group-addon">&nbsp&nbsp</span>
                     <button type="submit" class="col-md-1 select-button form-control btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>  
                  </div>
                  {{ Form::close() }}  
               </div>
            </div>
         </div>
      </div>
      <div class="d-flex justify-content-center bd-container">
         <div class='col-md-10 md-offset-2 input-group mb-3 bd-area text-center'>
            <h2 class='col-md-12' style='color: #e74c3c;padding-bottom: 30px;'><i class="fa-solid fa-map-location map-loc"></i>&nbsp&nbspম্যাপ ভিত্তিক অনুসন্ধান</h2>
            <div class='col-md-12'>
               <div class="input-group mb-3 justify-content-center">
                  <div id="map"></div>
               </div>
            </div>
         </div>
      </div>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="/js/custom.js"></script>
      <script src="/js/typehead.js"></script>
      <script src="/js/map.js"></script>
      <script src="/js/countrymap.js"></script>
      <script type="text/javascript">
         var route = "{{ url('autocomplete-search') }}";
         $('#search').typeahead({
             source: function (query, process) {
                 return $.get(route, {
                     q: query
                 }, function (data) {
         
                   return process(data);             
         
                   //console.log(data);
                 
                 });
             }
         });
      </script> 

      <script type="text/javascript">
         $(document).ready(function(){
          $("#type-select").on("change",function(){$("#subtype-select").empty();var a=$("#type-select").val();$("#subtype-select").html('<option selected="selected" value="">\u09B2\u09CB\u09A1 \u09B9\u099A\u09CD\u099B\u09C7...</option>'),$.ajax({url:"/get-subtype/"+a,type:"GET",dataType:"json",success:function(a){console.log(a),$("#subtype-select").html('<option disabled  selected="selected" value="">উপধরণ নির্বাচন করুন</option>'),$.each(a,function(b,a){$("#subtype-select").append('<option value="'+a+'">'+a+"</option>")})}})})})
      </script>
   </body>
</html>