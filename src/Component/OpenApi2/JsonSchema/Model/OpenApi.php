<?php

namespace Jane\Component\OpenApi2\JsonSchema\Model;

class OpenApi extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The Swagger version of this document.
     *
     * @var string|null
     */
    protected $swagger;
    /**
     * General information about the API.
     *
     * @var Info|null
     */
    protected $info;
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'
     *
     * @var string|null
     */
    protected $host;
    /**
     * The base path to the API. Example: '/api'.
     *
     * @var string|null
     */
    protected $basePath;
    /**
     * The transfer protocol of the API.
     *
     * @var string[]|null
     */
    protected $schemes;
    /**
     * A list of MIME types accepted by the API.
     *
     * @var string[]|null
     */
    protected $consumes;
    /**
     * A list of MIME types the API can produce.
     *
     * @var string[]|null
     */
    protected $produces;
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @var mixed[]|PathItem[]|null
     */
    protected $paths;
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @var array<string, Schema>|null
     */
    protected $definitions;
    /**
     * One or more JSON representations for parameters
     *
     * @var array<string, BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema>|null
     */
    protected $parameters;
    /**
     * One or more JSON representations for responses
     *
     * @var array<string, Response>|null
     */
    protected $responses;
    /**
     * 
     *
     * @var array<string, string[]>[]|null
     */
    protected $security;
    /**
     * 
     *
     * @var array<string, BasicAuthenticationSecurity|ApiKeySecurity|Oauth2ImplicitSecurity|Oauth2PasswordSecurity|Oauth2ApplicationSecurity|Oauth2AccessCodeSecurity>|null
     */
    protected $securityDefinitions;
    /**
     * 
     *
     * @var Tag[]|null
     */
    protected $tags;
    /**
     * information about external documentation
     *
     * @var ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * The Swagger version of this document.
     *
     * @return string|null
     */
    public function getSwagger() : ?string
    {
        return $this->swagger;
    }
    /**
     * The Swagger version of this document.
     *
     * @param string|null $swagger
     *
     * @return self
     */
    public function setSwagger(?string $swagger) : self
    {
        $this->initialized['swagger'] = true;
        $this->swagger = $swagger;
        return $this;
    }
    /**
     * General information about the API.
     *
     * @return Info|null
     */
    public function getInfo() : ?Info
    {
        return $this->info;
    }
    /**
     * General information about the API.
     *
     * @param Info|null $info
     *
     * @return self
     */
    public function setInfo(?Info $info) : self
    {
        $this->initialized['info'] = true;
        $this->info = $info;
        return $this;
    }
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'
     *
     * @return string|null
     */
    public function getHost() : ?string
    {
        return $this->host;
    }
    /**
     * The host (name or ip) of the API. Example: 'swagger.io'
     *
     * @param string|null $host
     *
     * @return self
     */
    public function setHost(?string $host) : self
    {
        $this->initialized['host'] = true;
        $this->host = $host;
        return $this;
    }
    /**
     * The base path to the API. Example: '/api'.
     *
     * @return string|null
     */
    public function getBasePath() : ?string
    {
        return $this->basePath;
    }
    /**
     * The base path to the API. Example: '/api'.
     *
     * @param string|null $basePath
     *
     * @return self
     */
    public function setBasePath(?string $basePath) : self
    {
        $this->initialized['basePath'] = true;
        $this->basePath = $basePath;
        return $this;
    }
    /**
     * The transfer protocol of the API.
     *
     * @return string[]|null
     */
    public function getSchemes() : ?array
    {
        return $this->schemes;
    }
    /**
     * The transfer protocol of the API.
     *
     * @param string[]|null $schemes
     *
     * @return self
     */
    public function setSchemes(?array $schemes) : self
    {
        $this->initialized['schemes'] = true;
        $this->schemes = $schemes;
        return $this;
    }
    /**
     * A list of MIME types accepted by the API.
     *
     * @return string[]|null
     */
    public function getConsumes() : ?array
    {
        return $this->consumes;
    }
    /**
     * A list of MIME types accepted by the API.
     *
     * @param string[]|null $consumes
     *
     * @return self
     */
    public function setConsumes(?array $consumes) : self
    {
        $this->initialized['consumes'] = true;
        $this->consumes = $consumes;
        return $this;
    }
    /**
     * A list of MIME types the API can produce.
     *
     * @return string[]|null
     */
    public function getProduces() : ?array
    {
        return $this->produces;
    }
    /**
     * A list of MIME types the API can produce.
     *
     * @param string[]|null $produces
     *
     * @return self
     */
    public function setProduces(?array $produces) : self
    {
        $this->initialized['produces'] = true;
        $this->produces = $produces;
        return $this;
    }
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @return mixed[]|PathItem[]
     */
    public function getPaths()
    {
        return $this->paths;
    }
    /**
     * Relative paths to the individual endpoints. They must be relative to the 'basePath'.
     *
     * @param mixed[]|PathItem[] $paths
     *
     * @return self
     */
    public function setPaths($paths) : self
    {
        $this->initialized['paths'] = true;
        $this->paths = $paths;
        return $this;
    }
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @return array<string, Schema>|null
     */
    public function getDefinitions() : ?iterable
    {
        return $this->definitions;
    }
    /**
     * One or more JSON objects describing the schemas being consumed and produced by the API.
     *
     * @param array<string, Schema>|null $definitions
     *
     * @return self
     */
    public function setDefinitions(?iterable $definitions) : self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;
        return $this;
    }
    /**
     * One or more JSON representations for parameters
     *
     * @return array<string, BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema>|null
     */
    public function getParameters() : ?iterable
    {
        return $this->parameters;
    }
    /**
     * One or more JSON representations for parameters
     *
     * @param array<string, BodyParameter|HeaderParameterSubSchema|FormDataParameterSubSchema|QueryParameterSubSchema|PathParameterSubSchema>|null $parameters
     *
     * @return self
     */
    public function setParameters(?iterable $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * One or more JSON representations for responses
     *
     * @return array<string, Response>|null
     */
    public function getResponses() : ?iterable
    {
        return $this->responses;
    }
    /**
     * One or more JSON representations for responses
     *
     * @param array<string, Response>|null $responses
     *
     * @return self
     */
    public function setResponses(?iterable $responses) : self
    {
        $this->initialized['responses'] = true;
        $this->responses = $responses;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string[]>[]|null
     */
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * 
     *
     * @param array<string, string[]>[]|null $security
     *
     * @return self
     */
    public function setSecurity(?array $security) : self
    {
        $this->initialized['security'] = true;
        $this->security = $security;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, BasicAuthenticationSecurity|ApiKeySecurity|Oauth2ImplicitSecurity|Oauth2PasswordSecurity|Oauth2ApplicationSecurity|Oauth2AccessCodeSecurity>|null
     */
    public function getSecurityDefinitions() : ?iterable
    {
        return $this->securityDefinitions;
    }
    /**
     * 
     *
     * @param array<string, BasicAuthenticationSecurity|ApiKeySecurity|Oauth2ImplicitSecurity|Oauth2PasswordSecurity|Oauth2ApplicationSecurity|Oauth2AccessCodeSecurity>|null $securityDefinitions
     *
     * @return self
     */
    public function setSecurityDefinitions(?iterable $securityDefinitions) : self
    {
        $this->initialized['securityDefinitions'] = true;
        $this->securityDefinitions = $securityDefinitions;
        return $this;
    }
    /**
     * 
     *
     * @return Tag[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param Tag[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * information about external documentation
     *
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * information about external documentation
     *
     * @param ExternalDocs|null $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : self
    {
        $this->initialized['externalDocs'] = true;
        $this->externalDocs = $externalDocs;
        return $this;
    }
}