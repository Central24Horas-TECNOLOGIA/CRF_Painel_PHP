<?php
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    $reponse = $client -> request('POST', 'https://davitabr.talkdeskid.com/oauth/token',[
        'form_params' => [
        'grand_type' => 'refresh_token'
    ],
        'headers'=> [
        'Autorization' => '',
        'accept' => 'aplication/json',
        'content-type' => 'aplication/x-www-form-urlendcoded',
    ],
    ]);

    echo $reponse->getBody();

