<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenCartService
{

    public function __construct()
    {
        
    }

    public function token($baseUrl,$username,$key)
    {
        $data = [
            "username" => $username,
            "key" => $key
        ];

       $response = Http::post($baseUrl.'/index.php?route=api/login',$data);
       return $response;
    }
    



}
