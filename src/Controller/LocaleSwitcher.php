<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocaleSwitcher extends AbstractController
{
    /**
     * @Route("/changeLocale/{route}/{locale}", name="localeSwitcher")
     */
    public function index($route = null, $locale = null)
    {
        if($route == null || $locale == null) {
            return $this->redirectToRoute('index');
        } else {
            return $this->redirectToRoute($route, ['_locale' => $locale]);
        }
    }
}
