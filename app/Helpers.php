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

            $bengali = ['বিভাগ','জেলা','উপজেলা','ধরণ','উপধরণ','ক্যাটাগরি','উপ'];
            $english = ['division','district','subdistrict','type','subtype','category','sub'];
             $convertedEnglishStrings = str_replace($english,$bengali,$string);
    
            return $convertedEnglishStrings;

                     }

}

