<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FireBaseController extends Controller
{
    public function __construct()
    {

    }
    public function getVersion(Request $request)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();

        $serverKey = 'server key goes here';

        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,
            ]
        ];
        $encodedData = json_encode($data);

        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];


        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'X-RapidAPI-Key' => 'c5ed90c23fmsh8c70a53d763b3b1p13db4ejsnec4a548f514f',
            'X-RapidAPI-Host' => 'microsoft-translator-text.p.rapidapi.com'
        ])->post('https://microsoft-translator-text.p.rapidapi.com/translate', [
            'to[0]' => 'Русский',
            'api-version' => '3.0',
            'from' => 'English',
            'profanityAction' => 'NoAction',
            'textType' => 'plain',
            'text' => 'hello'
        ]);
        return $response;
    }
}
