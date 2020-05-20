<?php

namespace Jane\OpenApiRuntime\Client\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HeaderResolver implements Plugin
{
    private $optionsResolver;

    public function __construct(OptionsResolver $optionsResolver)
    {
        $this->optionsResolver = $optionsResolver;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $requestHeaders = $request->getHeaders();
        $resolvedHeaders = $this->optionsResolver->resolve($requestHeaders);

        foreach ($requestHeaders as $name => $_) {
            $request->withoutHeader($name);
        }

        foreach ($resolvedHeaders as $name => $value) {
            $request->withHeader($name, $value);
        }

        return $next($request);
    }
}
