<?php

namespace Ricardclau\LittlewebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CompanyController {
    /**
     * This controller renders "Company" Link. Routes are 100% translated
     *
     * @Route("/{_locale}/company", requirements={"_locale"="en"}, name="company_en")
     * @Route("/{_locale}/empresa", requirements={"_locale"="es"}, name="company_es")
     * @Route("/{_locale}/empresa", requirements={"_locale"="ca"}, name="company_ca")
     * @Template()
     */
    public function companyAction()
    {
        return array();
    }

    /**
     * This controller renders "Who we are" Link. Routes are 100% translated
     *
     * @Route("/{_locale}/whoweare", requirements={"_locale"="en"}, name="whoweare_en")
     * @Route("/{_locale}/quienessomos", requirements={"_locale"="es"}, name="whoweare_es")
     * @Route("/{_locale}/quisom", requirements={"_locale"="ca"}, name="whoweare_ca")
     * @Template()
     */
    public function whoweareAction()
    {
        return array();
    }
}

