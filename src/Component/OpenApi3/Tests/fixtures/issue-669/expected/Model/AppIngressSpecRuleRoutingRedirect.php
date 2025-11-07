<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppIngressSpecRuleRoutingRedirect extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An optional URI path to redirect to. Note: if this is specified the whole URI of the original request will be overwritten to this value, irrespective of the original request URI being matched.
     *
     * @var string
     */
    protected $uri;
    /**
     * The authority/host to redirect to. This can be a hostname or IP address. Note: use `port` to set the port.
     *
     * @var string
     */
    protected $authority;
    /**
     * The port to redirect to.
     *
     * @var int
     */
    protected $port;
    /**
     * The scheme to redirect to. Supported values are `http` or `https`. Default: `https`.
     *
     * @var string
     */
    protected $scheme;
    /**
     * The redirect code to use. Defaults to `302`. Supported values are 300, 301, 302, 303, 304, 307, 308.
     *
     * @var int
     */
    protected $redirectCode;
    /**
     * An optional URI path to redirect to. Note: if this is specified the whole URI of the original request will be overwritten to this value, irrespective of the original request URI being matched.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
    /**
     * An optional URI path to redirect to. Note: if this is specified the whole URI of the original request will be overwritten to this value, irrespective of the original request URI being matched.
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
    /**
     * The authority/host to redirect to. This can be a hostname or IP address. Note: use `port` to set the port.
     *
     * @return string
     */
    public function getAuthority(): string
    {
        return $this->authority;
    }
    /**
     * The authority/host to redirect to. This can be a hostname or IP address. Note: use `port` to set the port.
     *
     * @param string $authority
     *
     * @return self
     */
    public function setAuthority(string $authority): self
    {
        $this->initialized['authority'] = true;
        $this->authority = $authority;
        return $this;
    }
    /**
     * The port to redirect to.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The port to redirect to.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * The scheme to redirect to. Supported values are `http` or `https`. Default: `https`.
     *
     * @return string
     */
    public function getScheme(): string
    {
        return $this->scheme;
    }
    /**
     * The scheme to redirect to. Supported values are `http` or `https`. Default: `https`.
     *
     * @param string $scheme
     *
     * @return self
     */
    public function setScheme(string $scheme): self
    {
        $this->initialized['scheme'] = true;
        $this->scheme = $scheme;
        return $this;
    }
    /**
     * The redirect code to use. Defaults to `302`. Supported values are 300, 301, 302, 303, 304, 307, 308.
     *
     * @return int
     */
    public function getRedirectCode(): int
    {
        return $this->redirectCode;
    }
    /**
     * The redirect code to use. Defaults to `302`. Supported values are 300, 301, 302, 303, 304, 307, 308.
     *
     * @param int $redirectCode
     *
     * @return self
     */
    public function setRedirectCode(int $redirectCode): self
    {
        $this->initialized['redirectCode'] = true;
        $this->redirectCode = $redirectCode;
        return $this;
    }
}