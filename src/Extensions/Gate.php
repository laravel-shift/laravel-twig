<?php

namespace DinhQuocHan\Twig\Extensions;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Gate extends AbstractExtension
{
    public function __construct(protected GateContract $gate)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('can', [$this->gate, 'check']),
            new TwigFunction('cant', [$this->gate, 'denies']),
            new TwigFunction('cannot', [$this->gate, 'denies']),
            new TwigFunction('allows', [$this->gate, 'allows']),
            new TwigFunction('denies', [$this->gate, 'denies']),
        ];
    }
}
