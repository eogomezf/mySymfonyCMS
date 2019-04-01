<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Home:index.html.twig');
       /* return $this->render('layout/base.html.twig');*/
    }

    /**
     * @Route("/post/{id}", name="simple_post")
     */
    public function simplePost($id)
    {
        return $this->render('AppBundle:Post:simple.html.twig', array(
            'id' => $id
        ));
    }

   
}
