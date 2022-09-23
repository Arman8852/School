<?php // Code within app\Helpers.php

namespace App;

class Helpers
{

public static function convertnumber($string) {
                     $bengali = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
                     $num = range(0, 9);
                     $convertedBengaliNums = str_replace($num,$bengali,$string);
    
                     return $convertedBengaliNums;
                     }



public static function convertstring($string) {
                     $bengali = ['উপ', 'বিভাগ', 'জেলা', 'ধরণ', 'ক্যাটাগরি', ];
                     $english = ['sub','division','district','type','category'];
                     $convertedBengali = str_replace($english,$bengali,$string);
    
                     return $convertedBengali;
                     }


}

