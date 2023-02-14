<?php

namespace DinhQuocHan\Twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class Url extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('action', 'action', ['is_safe' => ['html']]),
            new TwigFilter('asset', 'asset', ['is_safe' => ['html']]),
            new TwigFilter('route', 'route', ['is_safe' => ['html']]),
            new TwigFilter('secure_asset', 'secure_asset', ['is_safe' => ['html']]),
            new TwigFilter('secure_url', 'secure_url', ['is_safe' => ['html']]),
            new TwigFilter('url', 'url', ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('action', 'action', ['is_safe' => ['html']]),
            new TwigFunction('asset', 'asset', ['is_safe' => ['html']]),
            new TwigFunction('route', 'route', ['is_safe' => ['html']]),
            new TwigFunction('secure_asset', 'secure_asset', ['is_safe' => ['html']]),
            new TwigFunction('secure_url', 'secure_url', ['is_safe' => ['html']]),
            new TwigFunction('url', 'url', ['is_safe' => ['html']]),
        ];
    }
}
