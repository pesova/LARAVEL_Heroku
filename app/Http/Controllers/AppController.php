<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Library\Curls;


// This is API request getter.
class AppController extends Controller
{
    public function get_detail(){
        $url = "https://api.postalpincode.in/pincode/497001";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output; 
    }
}
