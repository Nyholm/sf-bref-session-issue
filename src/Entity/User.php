<?php

declare(strict_types=1);


namespace App\Entity;


use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $roles = ['ROLE_USER'];

    /**
     * @var string
     */
    private $username;

    public function getRoles()
    {

    }

    public function getPassword()
    {
        return '';
    }

    public function getSalt()
    {
        return '';

    }

    public function eraseCredentials()
    {

    }

    public function getUsername()
    {
        return $this->username;
    }


    public function getUserIdentifier()
    {
        return $this->username;

    }



}