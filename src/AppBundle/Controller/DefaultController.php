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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/producto", name="productos_list")
     * @Method({"GET"})
     */
    public function listProducto(Request $request)
    {
        return new Response(
            '<html><body>'.'Nro de Productos: '.$request->get('nro').'</body></html>'
        );
    }

    /**
     * @Route("/producto/new", name="cms_producto_new")
     * @Method({"POST"})
     */
    public function newProducto(Request $request)
    {
        return new Response(
            json_encode($request->request->all())
        );
    }

    /**
     * @Route("/producto/{id}/edit", name="cms_producto_edit")
     * @Method({"PUT"})
     */
    public function editProducto($id)
    {
        return new Response(
            'Editar Producto ID: '.$id
        );
    }

    /**
     * @Route("/producto/{id}", name="cms_producto_delete")
     * @Method({"DELETE"})
     */
    public function deteleProducto($id)
    {
        return new Response(
            'Borrar Producto ID: '.$id
        );
    }

}
