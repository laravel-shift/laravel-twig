<?php

namespace DinhQuocHan\Twig\Extensions;

use Illuminate\Contracts\Config\Repository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Config extends AbstractExtension
{
    public function __construct(protected Repository $config)
    {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('config', [$this->config, 'get']),
            new TwigFunction('config_get', [$this->config, 'get']),
            new TwigFunction('config_has', [$this->config, 'has']),
        ];
    }
}
