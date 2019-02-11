<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 11/02/19
 * Time: 10:29
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function homepage(){
        return new Response("First page !");
    }
}