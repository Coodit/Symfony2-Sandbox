<?php

namespace Acme\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BundleController extends Controller
{
    /**
     * @Route("/bundles/friendship-bundle", name="_sandbox_bundle_friendship")
     * @Template()
     */
    public function friendshipAction()
    {
        /**
         * FriendshipBundle demo.
         */
        return array();
    }
}
