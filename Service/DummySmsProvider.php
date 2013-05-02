<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Service;


use Btanase\SmsBundle\Entity\SmsInterface;

class DummySmsProvider implements SmsProviderInterface {

    public function  sendSms(SmsInterface $sms)
    {
        echo "pretending to send a sms: ".$sms->getText();
    }
}