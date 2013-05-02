<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Service;


use Btanase\SmsBundle\Entity\SmsInterface;

class SmsService {

    private $provider;

    function __construct(SmsProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function sendMessage(SmsInterface $sms)
    {
        $this->provider->sendSms($sms);
    }


}