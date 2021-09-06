<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    public function one()
    {
        return $this->render('admin/one.html.twig');
    }

    public function two()
    {
        return $this->render('admin/two.html.twig');
    }
}
