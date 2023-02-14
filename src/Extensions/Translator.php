<?php

namespace DinhQuocHan\Twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class Translator extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('__', '__', ['pre_escape' => 'html', 'is_safe' => ['html']]),
            new TwigFilter('trans', 'trans', ['pre_escape' => 'html', 'is_safe' => ['html']]),
            new TwigFilter('trans_choice', 'trans_choice', ['pre_escape' => 'html', 'is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('__', '__', ['pre_escape' => 'html', 'is_safe' => ['html']]),
            new TwigFunction('trans', 'trans', ['pre_escape' => 'html', 'is_safe' => ['html']]),
            new TwigFunction('trans_choice', 'trans_choice', ['pre_escape' => 'html', 'is_safe' => ['html']]),
        ];
    }
}
