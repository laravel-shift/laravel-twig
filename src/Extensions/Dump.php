<?php

namespace DinhQuocHan\Twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Dump extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('dump', 'dump', ['is_safe' => ['html']]),
            new TwigFunction('dd', 'dd', ['is_safe' => ['html']]),
        ];
    }
}
