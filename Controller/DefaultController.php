<?php

namespace Btanase\SmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BtanaseSmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
