<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
/**
 * @Route("/",name="app_home")
 */
    public function home():Response
    {
        return $this->render('pages/home.html.twig');
    }

/**
 * @Route("/about",name="app_about")
 */
    public function about():Response
    {
        return $this->render('pages/about.html.twig');
    }

    /**
 * @Route("/studies",name="app_studies")
 */
public function studies():Response
{
    return $this->render('pages/studies.html.twig');
}

/**
 * @Route("/projects",name="app_projects")
 */
public function projects():Response
{
    return $this->render('pages/projects.html.twig');
}

/**
 * @Route("/test",name="app_test")
 */
public function test():Response
{
    return $this->render('pages/test.html.twig');
}




}
