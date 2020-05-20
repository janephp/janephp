<?php

namespace Jane\OpenApiRuntime\Client\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use League\Uri\Uri;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QueryResolver implements Plugin
{
    private $optionsResolver;

    public function __construct(OptionsResolver $optionsResolver)
    {
        $this->optionsResolver = $optionsResolver;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $uri = $request->getUri();

        if (null !== $uri) {
            $parsed = Uri::createFromUri($uri);
            parse_str($parsed->getQuery() ?? '', $query);
            $uri->withQuery(http_build_query($this->optionsResolver->resolve($query)));
        }

        return $next($request);
    }
}
