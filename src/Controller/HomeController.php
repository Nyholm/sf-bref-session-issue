<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        return new Response('This is the homepage. <a href="/login">Login</a>');
    }
}