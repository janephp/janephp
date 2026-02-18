<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppFunctionsSpecCors extends \ArrayObject
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
     * The set of allowed CORS origins.
     *
     * @var list<AppsStringMatch>
     */
    protected $allowOrigins;
    /**
     * The set of allowed HTTP methods. This configures the `Access-Control-Allow-Methods` header.
     *
     * @var list<string>
     */
    protected $allowMethods;
    /**
     * The set of allowed HTTP request headers. This configures the `Access-Control-Allow-Headers` header.
     *
     * @var list<string>
     */
    protected $allowHeaders;
    /**
     * The set of HTTP response headers that browsers are allowed to access. This configures the `Access-Control-Expose-Headers` header.
     *
     * @var list<string>
     */
    protected $exposeHeaders;
    /**
     * An optional duration specifying how long browsers can cache the results of a preflight request. This configures the `Access-Control-Max-Age` header.
     *
     * @var string
     */
    protected $maxAge;
    /**
     * Whether browsers should expose the response to the client-side JavaScript code when the request’s credentials mode is include. This configures the `Access-Control-Allow-Credentials` header.
     *
     * @var bool
     */
    protected $allowCredentials;
    /**
     * The set of allowed CORS origins.
     *
     * @return list<AppsStringMatch>
     */
    public function getAllowOrigins(): array
    {
        return $this->allowOrigins;
    }
    /**
     * The set of allowed CORS origins.
     *
     * @param list<AppsStringMatch> $allowOrigins
     *
     * @return self
     */
    public function setAllowOrigins(array $allowOrigins): self
    {
        $this->initialized['allowOrigins'] = true;
        $this->allowOrigins = $allowOrigins;
        return $this;
    }
    /**
     * The set of allowed HTTP methods. This configures the `Access-Control-Allow-Methods` header.
     *
     * @return list<string>
     */
    public function getAllowMethods(): array
    {
        return $this->allowMethods;
    }
    /**
     * The set of allowed HTTP methods. This configures the `Access-Control-Allow-Methods` header.
     *
     * @param list<string> $allowMethods
     *
     * @return self
     */
    public function setAllowMethods(array $allowMethods): self
    {
        $this->initialized['allowMethods'] = true;
        $this->allowMethods = $allowMethods;
        return $this;
    }
    /**
     * The set of allowed HTTP request headers. This configures the `Access-Control-Allow-Headers` header.
     *
     * @return list<string>
     */
    public function getAllowHeaders(): array
    {
        return $this->allowHeaders;
    }
    /**
     * The set of allowed HTTP request headers. This configures the `Access-Control-Allow-Headers` header.
     *
     * @param list<string> $allowHeaders
     *
     * @return self
     */
    public function setAllowHeaders(array $allowHeaders): self
    {
        $this->initialized['allowHeaders'] = true;
        $this->allowHeaders = $allowHeaders;
        return $this;
    }
    /**
     * The set of HTTP response headers that browsers are allowed to access. This configures the `Access-Control-Expose-Headers` header.
     *
     * @return list<string>
     */
    public function getExposeHeaders(): array
    {
        return $this->exposeHeaders;
    }
    /**
     * The set of HTTP response headers that browsers are allowed to access. This configures the `Access-Control-Expose-Headers` header.
     *
     * @param list<string> $exposeHeaders
     *
     * @return self
     */
    public function setExposeHeaders(array $exposeHeaders): self
    {
        $this->initialized['exposeHeaders'] = true;
        $this->exposeHeaders = $exposeHeaders;
        return $this;
    }
    /**
     * An optional duration specifying how long browsers can cache the results of a preflight request. This configures the `Access-Control-Max-Age` header.
     *
     * @return string
     */
    public function getMaxAge(): string
    {
        return $this->maxAge;
    }
    /**
     * An optional duration specifying how long browsers can cache the results of a preflight request. This configures the `Access-Control-Max-Age` header.
     *
     * @param string $maxAge
     *
     * @return self
     */
    public function setMaxAge(string $maxAge): self
    {
        $this->initialized['maxAge'] = true;
        $this->maxAge = $maxAge;
        return $this;
    }
    /**
     * Whether browsers should expose the response to the client-side JavaScript code when the request’s credentials mode is include. This configures the `Access-Control-Allow-Credentials` header.
     *
     * @return bool
     */
    public function getAllowCredentials(): bool
    {
        return $this->allowCredentials;
    }
    /**
     * Whether browsers should expose the response to the client-side JavaScript code when the request’s credentials mode is include. This configures the `Access-Control-Allow-Credentials` header.
     *
     * @param bool $allowCredentials
     *
     * @return self
     */
    public function setAllowCredentials(bool $allowCredentials): self
    {
        $this->initialized['allowCredentials'] = true;
        $this->allowCredentials = $allowCredentials;
        return $this;
    }
}