<?php

namespace DinhQuocHan\Twig\Extensions;

use Illuminate\Contracts\Auth\Factory;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Auth extends AbstractExtension
{
    public function __construct(protected Factory $auth)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('auth', [$this->auth, 'guard']),
            new TwigFunction('auth_check', [$this->auth, 'check']),
            new TwigFunction('auth_guest', [$this->auth, 'guest']),
            new TwigFunction('auth_user', [$this->auth, 'user']),
            new TwigFunction('auth_guard', [$this->auth, 'guard']),
        ];
    }
}
