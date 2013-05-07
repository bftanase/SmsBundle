<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Service;


use Btanase\SmsBundle\Entity\SmsInterface;
use Symfony\Bridge\Monolog\Logger;

class DummySmsProvider implements SmsProviderInterface {

    private $apiKey;

    private $postUrl;

    private $logger;

    function __construct($apiKey, $postUrl, Logger $logger)
    {
        $this->apiKey = $apiKey;
        $this->logger = $logger;
        $this->postUrl = $postUrl;
    }


    public function  sendSms(SmsInterface $sms)
    {
        /* @var \Doctrine\Common\Collections\ArrayCollection $recipients */
        $recipients = $sms->getRecipients();

        $recipText = implode(', ', $recipients->toArray());

        $this->logger->info('Sending message to: '.$recipText.' | '.$sms->getText());

    }
}