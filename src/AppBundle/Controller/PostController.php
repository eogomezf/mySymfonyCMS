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
        $post->setTitulo('Top Framework PHP 2018');
        $post->setContenido('Aca va el contenido dando una descripcion del framewark que fue catalogado como uno de los mejores fw para php');
        $post->setAutor('Juanito Caminante');
        $post->setFecha(new \DateTime('2018-04-01'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($post);

        $em->flush();

        return new Response('Se inserto nueva entrada con ID: '.$post->getId());
    }
}
