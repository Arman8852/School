<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
      <title>মাদ্রাসা সর্টিং</title>
      <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      <link rel="shortcut icon" href="/favicon.ico">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
      <!-- Fontawesome  -->
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <!-- Style  -->
      <link rel="stylesheet" href="/css/style.css">
      <style type="text/css">
         body{background-image: url('/images/mosque1.png');background-repeat: repeat;} 
      </style>
   </head>
   <body>
      @include('layouts.navbar')
      <div class="d-flex justify-content-center profile-container">
         <div class='col-md-10 text-center sort-profile' >
            <div class='row'>
               <div class='col-md-12 text-center primary-info' id='sort-profile'>
                  <h4 style="text-align:center;"><i class="fa-solid fa-map-location" style='color:black;'>&nbsp&nbsp</i>&nbsp<b>{!! $title !!}(<span style='color:red;'>{{$count}}টি</span> মাদ্রাসা)</b></h4><hr/>
                  <table class='table table-dark table-striped table-bordered madrasha-info' id='sort-table' style="background-color: transparent; border:2px solid black; margin-top:15px;">
                     <tr id='sort-table'>
                        <th id='sort-table' class="text-center" style='color:black;'>মাদ্রাসা</th>
                        <th id='sort-table' class="text-center" style='color:black;'>ছাত্র</th>
                        <th id='sort-table' class="text-center" style='color:black;'>মুহতামিম</th>
                        <th id='sort-table' class="text-center" style='color:black;'>ঠিকানা</th>
                     </tr>
                   

                     @foreach($madrashas as $madrasha)
                     <tr id='sort-table'>
                        <td id='sort-table' class="text-center"><a href ='/madrashaprofile/{{$madrasha->id}}' title='মাদ্রাসার প্রোফাইল দেখুন' class='madrasha-a'>{{$madrasha->madrasha}}</a> </td>
                        <td id='sort-table' class="text-center" style='color:black;'>{{$madrasha->studentnumber}} </td>
                        <td id='sort-table' class="text-center" style='color:black;'>{{$madrasha->muhtamim}}, {{$madrasha->muhtamimphone}}</td>
                        <td id='sort-table' class="text-center"> <a href ='/profile/উপজেলা/subdistrict/{{$madrasha->subdistrict}}/{{$madrasha->type}}' title='{{$madrasha->subdistrict}} উপজেলার {{$madrasha->type}} মাদ্রাসা সমূহ দেখুন' class='madrasha-a'>{{$madrasha->subdistrict}}, </a><a href ='/profile/জেলা/district/{{$madrasha->district}}/{{$madrasha->type}}' title='{{$madrasha->district}} জেলার {{$madrasha->type}} মাদ্রাসা সমূহ দেখুন' class='madrasha-a'>{{$madrasha->district}}</a></td>
                     </tr>
                     @endforeach
                  </table>
               </div>
            </div><br/>

   <div class="d-flex justify-content-center pagination">
  {{$madrashas->appends($_GET)->links()}}
</div><hr/>
            <button type="button" id="btnExport" style='font-size:23px;border:2px solid black;' class="btn btn-danger col-md-4" onclick="exporttopdf()"><i class="fa-solid fa-file-pdf" style='color:white;'></i>&nbsp পিডিএফ ডাউনলোড</button> 
         </div>
      </div>
      <!-- jQuery -->
      <script src="/js/jquery.min.js"></script> 
     
      <script type="text/javascript">
         function exporttopdf(){
         
         var pdf = document.getElementById('sort-profile');

         $("a").css('text-decoration','none');

         $("table").css({'border':'2px solid black','border-collapse': 'collapse','width':'1050px','height':'1420px'});

         $("th").css({'border':'2px solid black','border-collapse': 'collapse'});

         $("td").css({'border':'1px solid black','border-collapse': 'collapse','text-align':'center'});

         $("h4").css({'font-size':'35px'});

         $("hr").css({'margin-top':'-30px','margin-bottom':'30px','border-top': '3px dashed black'});

         var wme = window.open("","","width:700, height:900");

         wme.document.write(pdf.outerHTML);

         wme.document.close();

         wme.focus();

         wme.print();

         wme.close();

         window. location. reload();

   }
      </script>
   </body>
</html>