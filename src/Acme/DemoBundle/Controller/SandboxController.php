<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SandboxController extends Controller
{
    /**
     * @Route("/", name="_sandbox")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}