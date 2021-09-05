<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class AdminController
{
    public function one()
    {
        return new Response('This is the first admin page. <a href="/admin/two">Second admin page</a> <br><br><a href="/logout">Logout</a>');
    }

    public function two()
    {
        return new Response('This is the second admin page. <a href="/admin/one">First admin page</a> <br><br><a href="/logout">Logout</a>');
    }
}