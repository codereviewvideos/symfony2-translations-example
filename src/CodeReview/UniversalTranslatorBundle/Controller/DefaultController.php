<?php

namespace CodeReview\UniversalTranslatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
//        $request->setLocale('de');

        return $this->render('CodeReviewUniversalTranslatorBundle:Default:index.html.twig');
    }
}
