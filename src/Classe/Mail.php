<?php

namespace App\Classe;


use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = '2e8a6d2d9706d3814b648d3b722bb8ea';
    private $api_key_Secrete = 'fbfbe8f04c41e7016fff89e6081acb01';

    public function send($to_email , $to_name , $subject , $content)
    {

        $mj = new Client($this->api_key , $this->api_key_Secrete , true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "msouleadowa@gmail.com",
                        'Name' => "TRIANGLE - PAPIERS & CARTONS"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 4131264,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content,
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && $response->getData();
    }
}