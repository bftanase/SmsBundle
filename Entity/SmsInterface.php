<?php
/**
 * User: bogdan
 * 
 */

namespace Btanase\SmsBundle\Entity;


interface SmsInterface {
    public function getText();

    public function setText($text);

    public function getRecipients();

    public function addRecipient($phoneNo);
}