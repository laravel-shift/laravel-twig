<?php

namespace DinhQuocHan\Twig;

use Illuminate\Contracts\View\Engine;

class TwigEngine implements Engine
{
    public function __construct(protected TwigEnvironment $environment)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function get($path, array $data = []): string
    {
        return $this->environment->render($path, $data);
    }
}
