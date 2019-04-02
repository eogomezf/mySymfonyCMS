<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;

class PostController extends Controller
{
    /**
     * @Route("/insert/post", name="insert_post")
     */
    public function insertPost()
    {
        $post = new Post();
        $post->setTitulo('Symfony 4 release');
        $post->setContenido('llega lo que estabamos esperando el nuevo realese de Symfony, la version 4 con muchas mejoras y actualizciones de lujos para facilitarnos la vida');
        $post->setAutor('Floegel Servicios');
        $post->setFecha(new \DateTime('2018-07-04'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($post);

        $em->flush();

        return new Response('Se inserto nueva entrada con ID: '.$post->getId());
    }

     /**
     * @Route("/get/post", name="get_post")
     */
    public function getAllPost()
    {
       
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AppBundle:Post');

        $posts = $repository->findAll();

        dump($posts);

        return new Response('Datos tabla post');
    }
}
