<?php

namespace App\Services;

use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use GuzzleHttp\Client;
use SendinBlue\Client\Model\SendSmtpEmail;

class SendinblueMailer
{
    protected $apiInstance;

    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey(
            'api-key',
            config('services.sendinblue.key')
        );

        $this->apiInstance = new TransactionalEmailsApi(
            new Client(),
            $config
        );
    }

    public function send($toEmail, $toName, $subject, $htmlContent, $fromName = 'Noble IT Services', $fromEmail = 'no-reply@nobleitservices.ng')
    {
        $email = new \SendinBlue\Client\Model\SendSmtpEmail([
            'subject' => $subject,
            'sender' => ['name' => $fromName, 'email' => $fromEmail],
            'to' => [[ 'email' => $toEmail, 'name' => $toName ]],
            'htmlContent' => $htmlContent,
        ]);

        return $this->apiInstance->sendTransacEmail($email);
    }

}
