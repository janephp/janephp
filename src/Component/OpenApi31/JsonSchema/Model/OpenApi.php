<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class OpenApi
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $openapi;
    /**
     * @var Info|null
     */
    protected $info;
    /**
     * @var string|null
     */
    protected $jsonSchemaDialect = 'https://spec.openapis.org/oas/3.1/dialect/base';
    /**
     * @var list<Server>|null
     */
    protected $servers = [0 => ['url' => '/']];
    /**
     * @var PathItem[]|null
     */
    protected $paths;
    /**
     * @var array<string, mixed>|null
     */
    protected $webhooks;
    /**
     * @var Components|null
     */
    protected $components;
    /**
     * @var list<array<string, list<string>>>|null
     */
    protected $security;
    /**
     * @var list<Tag>|null
     */
    protected $tags;
    /**
     * @var ExternalDocumentation|null
     */
    protected $externalDocs;

    public function getOpenapi(): ?string
    {
        return $this->openapi;
    }

    public function setOpenapi(?string $openapi): self
    {
        $this->initialized['openapi'] = true;
        $this->openapi = $openapi;

        return $this;
    }

    public function getInfo(): ?Info
    {
        return $this->info;
    }

    public function setInfo(?Info $info): self
    {
        $this->initialized['info'] = true;
        $this->info = $info;

        return $this;
    }

    public function getJsonSchemaDialect(): ?string
    {
        return $this->jsonSchemaDialect;
    }

    public function setJsonSchemaDialect(?string $jsonSchemaDialect): self
    {
        $this->initialized['jsonSchemaDialect'] = true;
        $this->jsonSchemaDialect = $jsonSchemaDialect;

        return $this;
    }

    /**
     * @return list<Server>|null
     */
    public function getServers(): ?array
    {
        return $this->servers;
    }

    /**
     * @param list<Server>|null $servers
     */
    public function setServers(?array $servers): self
    {
        $this->initialized['servers'] = true;
        $this->servers = $servers;

        return $this;
    }

    /**
     * @return PathItem[]
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @param PathItem[] $paths
     */
    public function setPaths($paths): self
    {
        $this->initialized['paths'] = true;
        $this->paths = $paths;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getWebhooks(): ?iterable
    {
        return $this->webhooks;
    }

    /**
     * @param array<string, mixed>|null $webhooks
     */
    public function setWebhooks(?iterable $webhooks): self
    {
        $this->initialized['webhooks'] = true;
        $this->webhooks = $webhooks;

        return $this;
    }

    public function getComponents(): ?Components
    {
        return $this->components;
    }

    public function setComponents(?Components $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;

        return $this;
    }

    /**
     * @return list<array<string, list<string>>>|null
     */
    public function getSecurity(): ?array
    {
        return $this->security;
    }

    /**
     * @param list<array<string, list<string>>>|null $security
     */
    public function setSecurity(?array $security): self
    {
        $this->initialized['security'] = true;
        $this->security = $security;

        return $this;
    }

    /**
     * @return list<Tag>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param list<Tag>|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    public function getExternalDocs(): ?ExternalDocumentation
    {
        return $this->externalDocs;
    }

    public function setExternalDocs(?ExternalDocumentation $externalDocs): self
    {
        $this->initialized['externalDocs'] = true;
        $this->externalDocs = $externalDocs;

        return $this;
    }
}
