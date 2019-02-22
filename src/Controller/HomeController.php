<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 11/02/19
 * Time: 10:29
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage(){
        return $this->render("base.html.twig") ;
    }




}