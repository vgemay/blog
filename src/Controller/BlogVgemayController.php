<?php

namespace App\Controller;

use App\Repository\PostRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogVgemayController extends AbstractController
{
    /**
     * @Route("/blog/vgemay", name="blog_vgemay")
     */
    public function index()
    {


        return $this->render('blog_vgemay/index.html.twig', [
            'controller_name' => 'BlogVgemayController',
        ]);
    }
}




