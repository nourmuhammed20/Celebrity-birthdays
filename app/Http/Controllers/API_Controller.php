<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class API_Controller extends Controller
{
    public function __construct()
    {
        $GLOBALS['apikey'] = "d13e91a1d4msh0c25f02408bce1ap17c11bjsn5264a1b59bdc";
    }
    //
    public function fetchAPI(Request $request)
    {
        $date = $request->input('birthday');
        $date_components = explode('-', $date);
        // return $date;
        $month = $date_components[1];
        $day = $date_components[2];
        $result1=$this->fetchID($month, $day);
        if($result1["success"]==true) {
            $response=$this->fetchName($result1["message"]);

        } else {
            $response=$result1;

        }
        return $response;
    }

    private function fetchID($month, $day)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$month&day=$day",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                "X-RapidAPI-Key: ".$GLOBALS['apikey']
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return [
                'success'=>false,
                'message'=>$err,
            ];

        } else {
            return [
                'success'=>true,
                'message'=>$response,
            ];
        }
    }

    private function fetchName($response)
    {
        $nconsts = json_decode($response);
        $names = array();
        foreach ($nconsts as $nconst) {
            $nconst=str_replace("/name/", '', $nconst);
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$nconst",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                    "X-RapidAPI-Key: " .$GLOBALS['apikey']
                ],
            ]);
            $bio_response = curl_exec($curl);
            $bio_err = curl_error($curl);
            curl_close($curl);
            if ($bio_err) {
                return [
                    'success'=>false,
                    'message'=>$bio_err,
                ];
            } else {
                $bio = json_decode($bio_response);
                if (isset($bio->name)) {
                    $names[] = $bio->name;
                }
            }
        }

        return [
            'success'=>true,
            'message'=> json_encode($names),
        ];

    }
}