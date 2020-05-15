<?php

namespace Jane\OpenApiRuntime\Client\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class AuthenticationRegistry implements Plugin
{
    public const SCOPES_HEADER = 'X-Jane-Authentication';

    /** @var Plugin[]|AuthenticationPlugin[] */
    private $authenticationPlugins;

    public function __construct(array $authenticationPlugins)
    {
        $this->authenticationPlugins = $authenticationPlugins;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $scopes = $request->getHeader(self::SCOPES_HEADER);

        foreach ($this->authenticationPlugins as $authenticationPlugin) {
            if (\in_array($authenticationPlugin->getScope(), $scopes)) {
                $callback = function (RequestInterface $request) {
                    throw new \RuntimeException('Next / first callback are not implemented in Authentication plugin.');
                };

                $authenticationPlugin->handleRequest($request, $callback, $callback);
            }
        }

        return $next($request);
    }
}
