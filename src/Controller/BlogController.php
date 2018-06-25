<?php
/**
 * Created by PhpStorm.
 * User: BenjiT7
 * Date: 23/06/2018
 * Time: 18:28
 */

namespace App\Controller;


use App\Service\Greeting;
use App\Service\VeryBadDesign;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    /**
     * @var Greeting
     */
    private $greeting;
    /**
     * @var \Twig_Environment
     */
    private $twig;


    public function __construct(Greeting $greeting, \Twig_Environment $twig)
    {
        $this->greeting = $greeting;
        $this->twig = $twig;
    }

    /**
     * @Route("/{name}", name="blog_index")
     */
    public function index($name)
    {
//        $this->get('app.greeting');
        $html = $this->twig->render('base.html.twig', ['message' => $this->greeting->greet(
            $name
        )]);

        return new Response($html);
    }

}