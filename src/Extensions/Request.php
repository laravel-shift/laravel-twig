<?php

namespace DinhQuocHan\Twig\Extensions;

use Illuminate\Http\Request as BaseRequest;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Request extends AbstractExtension
{
    public function __construct(protected BaseRequest $request)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('request', [$this->request, 'input']),
            new TwigFunction('request_has', [$this->request, 'has']),
            new TwigFunction('request_exists', [$this->request, 'exists']),
            new TwigFunction('request_filled', [$this->request, 'filled']),
            new TwigFunction('request_input', [$this->request, 'input']),
            new TwigFunction('request_query', [$this->request, 'query']),
            new TwigFunction('request_is', [$this->request, 'is']),
            new TwigFunction('current_url', [$this->request, 'url']),
            new TwigFunction('current_full_url', [$this->request, 'fullUrl']),
            new TwigFunction('current_full_url_with_query', [$this->request, 'fullUrlWithQuery']),
            new TwigFunction('old', [$this->request, 'old']),
        ];
    }
}
