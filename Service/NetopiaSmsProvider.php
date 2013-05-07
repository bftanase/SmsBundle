<?php
/**
 * User: bogdan
 *
 */

namespace Btanase\SmsBundle\Service;


use Btanase\SmsBundle\Entity\SmsInterface;
use Symfony\Bridge\Monolog\Logger;

class NetopiaSmsProvider implements SmsProviderInterface
{
    private $username;

    private $apiKey;

    private $postUrl;

    private $logger;

    private $from;


    function __construct($username, $apiKey, $from, $postUrl, Logger $logger)
    {
        $this->username = $username;
        $this->apiKey = $apiKey;
        $this->from = $from;
        $this->postUrl = $postUrl;
        $this->logger = $logger;
    }


    public function  sendSms(SmsInterface $sms)
    {
        $soapClient = new \SoapClient('http://wsi.web2sms.ro/service.php?wsdl');

        /* @var \Doctrine\Common\Collections\ArrayCollection $recipients */
        $recipients = $sms->getRecipients();

        foreach ($recipients as $recipient) {
            $msgId = $soapClient->sendSmsAuthKey($this->username, $this->apiKey,
                $this->from, $recipient, $sms->getText()
            );

            $this->logger->info('SMS Sent, ID: ' . $msgId);
        }

    }
}