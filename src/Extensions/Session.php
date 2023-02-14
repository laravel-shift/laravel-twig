<?php

namespace DinhQuocHan\Twig\Extensions;

use Illuminate\Contracts\Session\Session as SessionContract;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Session extends AbstractExtension
{
    public function __construct(protected SessionContract $session)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('session', [$this->session, 'get']),
            new TwigFunction('csrf_token', [$this->session, 'token']),
            new TwigFunction('csrf_field', 'csrf_field', ['is_safe' => ['html']]),
            new TwigFunction('method_field', 'method_field', ['is_safe' => ['html']]),
            new TwigFunction('session_get', [$this->session, 'get']),
            new TwigFunction('session_put', [$this->session, 'put']),
            new TwigFunction('session_pull', [$this->session, 'pull']),
            new TwigFunction('session_has', [$this->session, 'has']),
            new TwigFunction('session_forget', [$this->session, 'forget']),
        ];
    }
}
