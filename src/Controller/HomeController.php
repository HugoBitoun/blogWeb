<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 11/02/19
 * Time: 10:29
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController
{

    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response("First page !");
    }
}