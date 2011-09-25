<?php

namespace Ricardclau\LittlewebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * Website root. Automatically redirect to preferred culture based on browser settings
     *
     * @Route("/", name="root")
     */
    public function rootAction()
    {
        $weblangs = $this->container->getParameter('langs');
        $lang = $this->getRequest()->getPreferredLanguage($weblangs);

        return $this->redirect(
                $this->generateUrl('index', array('_locale' => $lang))
                );
    }

    /**
     * Website Index. Culture must be set and be either es (Spanish), en (English) or ca (Catalan)
     *
     * @Route("/{_locale}", requirements={"_locale"="es|en|ca"}, name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
