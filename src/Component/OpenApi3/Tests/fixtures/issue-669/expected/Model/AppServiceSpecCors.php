<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppServiceSpecCors implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The set of allowed CORS origins.
     *
     * @var list<AppsStringMatch>
     */
    public array $allowOrigins;
    /**
     * The set of allowed HTTP methods. This configures the `Access-Control-Allow-Methods` header.
     *
     * @var list<string>
     */
    public array $allowMethods;
    /**
     * The set of allowed HTTP request headers. This configures the `Access-Control-Allow-Headers` header.
     *
     * @var list<string>
     */
    public array $allowHeaders;
    /**
     * The set of HTTP response headers that browsers are allowed to access. This configures the `Access-Control-Expose-Headers` header.
     *
     * @var list<string>
     */
    public array $exposeHeaders;
    /**
     * An optional duration specifying how long browsers can cache the results of a preflight request. This configures the `Access-Control-Max-Age` header.
     *
     * @var string
     */
    public string $maxAge;
    /**
     * Whether browsers should expose the response to the client-side JavaScript code when the request’s credentials mode is include. This configures the `Access-Control-Allow-Credentials` header.
     *
     * @var bool
     */
    public bool $allowCredentials;
    public function definedProperties(): array
    {
        return ['allowOrigins' => 'allow_origins', 'allowMethods' => 'allow_methods', 'allowHeaders' => 'allow_headers', 'exposeHeaders' => 'expose_headers', 'maxAge' => 'max_age', 'allowCredentials' => 'allow_credentials'];
    }
}