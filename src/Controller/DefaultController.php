<?php

namespace App\Controller;

use App\Entity\App;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController


{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository(App::class)->findAll();
//        $menu = $em->getRepository(Menu::class)->findAll();
//        $tag = $em->getRepository(Tag::class)->findAll();


        return $this->render('app/index.html.twig', [
            'controller_name' => 'DefaultController',
//            'post' => $this->getDoctrine()->getManager()->getRepository(Post::class)->findBy(['published' => 1]),
            'app'=>$app,
//            'tag'=>$tag,
        ]);

    }







}
