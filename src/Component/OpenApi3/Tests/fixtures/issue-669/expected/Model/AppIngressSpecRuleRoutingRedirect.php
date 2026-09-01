<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRuleRoutingRedirect implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An optional URI path to redirect to. Note: if this is specified the whole URI of the original request will be overwritten to this value, irrespective of the original request URI being matched.
     *
     * @var string
     */
    public string $uri;
    /**
     * The authority/host to redirect to. This can be a hostname or IP address. Note: use `port` to set the port.
     *
     * @var string
     */
    public string $authority;
    /**
     * The port to redirect to.
     *
     * @var int
     */
    public int $port;
    /**
     * The scheme to redirect to. Supported values are `http` or `https`. Default: `https`.
     *
     * @var string
     */
    public string $scheme;
    /**
     * The redirect code to use. Defaults to `302`. Supported values are 300, 301, 302, 303, 304, 307, 308.
     *
     * @var int
     */
    public int $redirectCode;
    public function definedProperties(): array
    {
        return ['uri' => 'uri', 'authority' => 'authority', 'port' => 'port', 'scheme' => 'scheme', 'redirectCode' => 'redirect_code'];
    }
}