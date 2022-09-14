<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{$madrasha->madrasha}}</title>

<style type="text/css"> 

@page {header: page-header; footer: page-footer;}

body{font-family: 'bangla', Arial, sans-serif;} .table{border:none;} .center {margin-left: auto;margin-right: auto;} .text-center{ text-align:center; } .text-left{ text-align:left; } h2 {line-height: 80%;color:#27ae60} h4 {line-height: 60%;} .heading{line-height: 10%;} table{width: 100%;} .data {border: 1px solid black; border-collapse: collapse;} .madrasha-image{border: 2px solid black;} hr {border-top: 2px dashed black;}  
    </style>
   </head>
   <body>
   <htmlpageheader name="page-header">
      <table class="table" cellspacing="0" cellpadding="0" border="0" style='padding-top:10px; color:#7f8c8d;'>
    <tr>
        <td align="center">গোপনীয়</td>
    </tr>
    </table>
</htmlpageheader>

   <htmlpagefooter name="page-footer">
      <table class="table" cellspacing="0" cellpadding="0" border="0" style='padding-bottom:10px;color:#7f8c8d;'>
    <tr>
        <td align="center">গোপনীয়</td> 
    </tr>
    
    </table>
</htmlpagefooter>

      <div class="profile-container">
         <div class='text-center madrasha-profile'>
            <div class='row'>
               <div class='text-center primary-info'>
                  <img src="{{ public_path('/images/madrasha/'.$madrasha->madrashaimage)}}"   class='madrasha-image' alt="">
                  <h2 class='text-center'><br/><b>{{$madrasha->madrasha}}</b></h2>

               <table class='center' style='width:50%;'>
                     <tr>
                        <th style="text-align: center;">ধরণঃ <span style='color:#2980b9;'><b>{{$madrasha->type}}</b></span></th>
                        <th style="text-align: center;">উপধরণঃ <span style='color:#2980b9;'><b>{{$madrasha->subtype}} </b></span></th>
               </tr>
               </table> <hr style="width:50%;text-align:center;margin-left:0;"> 
               <table class='center' style='width:70%;'>
                     <tr>
                        <th style="text-align: center;">প্রতিষ্ঠাতাঃ <span style='color:#2980b9;'><b>{{$madrasha->founder}}</b></span></th>
                        <th style="text-align: center;">প্রতিষ্ঠা সালঃ <span style='color:#2980b9;'><b>{{$madrasha->foundationyear}} সাল </b></span></th>
               </tr>
               </table>  
                <hr/> 
                  <h2 class='heading'>ঠিকানা</h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">বিভাগ</th>
                        <th class="data text-center">জেলা</th>
                        <th class="data text-center">উপজেলা</th>
                        <th class="data text-center">অবস্থান</th>
                     </tr>
                     <tr>
                        <td class="data text-center">{{$madrasha->division}}</td>
                        <td class="data text-center">{{$madrasha->district}}</td>
                        <td class="data text-center">{{$madrasha->subdistrict}}</td>
                        <td class="data text-center">{{$madrasha->address}}</td>
                     </tr>
                  </table>
                  <hr/>
                  <h2 class='heading'>মুহতামিম</h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">মুহতামিম</th>
                        <th class="data text-center">রাজনৈতিক আদর্শ</th>
                        <th class="data text-center">ঠিকানা</th>
                        <th class="data text-center">জাতীয় পরিচয় পত্র</th>
                        <th class="data text-center">মোবাইল নাম্বার</th>
                     </tr>
                     <tr class='data'>
                        <td class="data text-center"><b>{{$madrasha->muhtamim}}</b></td>
                        <td class="data text-center">{{$madrasha->muhtamimideology}}</td>
                        <td class="data text-center">{{$madrasha->muhtamimaddress}}</td>
                        <td class="data text-center" style='color:#e74c3c'><b>{{$madrasha->muhtamimnid}}</b></td>
                        <td class="data text-center" style='color:#e74c3c'><b>{{$madrasha->muhtamimphone}}</b></td>
                     </tr>
                  </table>
                  <hr/>
                  @if($madrasha->teachers->count() != 0)
                  <h2 class='heading'><b>মাদ্রাসার শিক্ষকদের তথ্য</b></h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">নাম</th>
                        <th class="data text-center">পদ</th>
                        <th class="data text-center">রাজনৈতিক আদর্শ</th>
                        <th class="data text-center">ঠিকানা</th>
                     </tr>
                     @foreach($madrasha->teachers as $teacher)
                     <tr class='data'>
                        <td class="data text-center">{{$teacher->teacher}}</td>
                        <td class="data text-center">{{$teacher->role}}</td>
                        <td class="data text-center">{{$teacher->teacherideology}}</td>
                        <td class="data text-center">{{$teacher->teacheraddress}}</td>
                     </tr>
                     @endforeach
                  </table>
                  <hr/>
                  @endif
                  <h2 class='heading'>মাদ্রাসার একাডেমিক তথ্য</h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">সর্বোচ্চ ক্লাস</th>
                        <th class="data text-center">শিক্ষক সংখ্যা</th>
                        <th class="data text-center">ছাত্র/ছাত্রী সংখ্যা</th>
                     </tr>
                     <tr class='data'>
                        <td class="data text-center">{{$madrasha->highestclass}}</td>
                        <td class="data text-center">{{$madrasha->teachernumber}}</td>
                        <td class="data text-center">{{$madrasha->studentnumber}}</td>
                     </tr>
                  </table>
                  <hr/>
                  <h2 class='heading'>মাদ্রাসার রাজনৈতিক তথ্য</h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">রাজনৈতিক অবস্থান</th>
                        <th class="data text-center">বহিরাগত রাজনৈতিক/অরাজনৈতিক প্রভাব</th>
                        <th class="data text-center">গুরুত্বপূর্ন ঘটনা/দুর্ঘটনা/বিরোধের তথ্য</th>
                     </tr>
                     <tr class='data'>
                        <td class="data text-left large-text">{{$madrasha->information->madrashaideology}}</td>
                        <td class="data text-left large-text">{{ $madrasha->information->externalinfluence }}</td>
                        <td class="data text-left large-text">{!! $madrasha->information->accidentinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <h2 class='heading'><b>মাদ্রাসার মামলা বিষয়ক তথ্য</b></h2>
                  <table class='data'>
                     <tr class='data'>
                        <td class="data text-left large-text">{!! $madrasha->information->caseinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <h2 class='heading'>মাদ্রাসার অর্থনৈতিক তথ্য</h2>
                  <table class='data'>
                     <tr class='data'>
                        <th class="data text-center">ব্যাংক একাউন্ট সম্পর্কিত তথ্য </th>
                        <th class="data text-center">দাতা সম্পর্কিত তথ্য</th>
                     </tr>
                     <tr>
                        <td class="data text-left large-text">{!! $madrasha->information->bankinfo !!}</td>
                        <td class="data text-left large-text">{!! $madrasha->information->donnerinfo !!}</td>
                     </tr>
                  </table>
                  <hr/>
                  <h2>মাদ্রাসা সম্পর্কে মন্তব্য</h2>
                  <table class='data'>
                     <tr class='data'>
                        <td class="data text-left large-text">{!! $madrasha->information->remarks !!}</td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div> 
   </body>
</html>