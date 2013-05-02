<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Service;


use Btanase\SmsBundle\Entity\SmsInterface;

interface SmsProviderInterface {
    public function  sendSms(SmsInterface $sms);
}