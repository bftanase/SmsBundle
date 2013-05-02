<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Sms implements SmsInterface{

    private $recipients;

    private $text;

    function __construct()
    {
        $this->recipients = new  ArrayCollection();
    }

    public function getText()
    {
        return $this->text;
    }


    public function getRecipients()
    {
        return $this->recipients;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function addRecipient($phoneNo)
    {
        $this->recipients[] = $phoneNo;
        return $this;
    }
}