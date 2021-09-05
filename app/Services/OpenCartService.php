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

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $baseUrl.'index.php?route=api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
       $response = json_decode($response);
        if (isset($response->success)){

            return $response->api_token;
        } else {

            return response('Something went wrong',403);
        }

    


    //     $headers = [
    //         "content-type" => "multipart/form-data",
    //         "accept" => "application/json"
    //     ];

    //    $response = Http::withHeaders($headers)->post($baseUrl.'/index.php?route=api/login',$data);
    //    return $response->status();
    }




}
