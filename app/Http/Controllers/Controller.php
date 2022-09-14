<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use View;

class Controller extends BaseController
{   


  public function __construct() {

    $data = [];

    $divisions = DB::table('madrashas')->distinct()->get(['division'])->pluck('division');
  
    foreach($divisions as $division){

        $data[$division] = DB::table('madrashas')->where('division',$division)->distinct()->get(['district'])->pluck('district');
};

       View::share ( 'data', $data );
    }  


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
