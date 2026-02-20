<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class ClientCredentials
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
    protected $tokenUrl;
    /**
     * @var string|null
     */
    protected $refreshUrl;
    /**
     * @var array<string, string>|null
     */
    protected $scopes;

    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    public function setTokenUrl(?string $tokenUrl): self
    {
        $this->initialized['tokenUrl'] = true;
        $this->tokenUrl = $tokenUrl;

        return $this;
    }

    public function getRefreshUrl(): ?string
    {
        return $this->refreshUrl;
    }

    public function setRefreshUrl(?string $refreshUrl): self
    {
        $this->initialized['refreshUrl'] = true;
        $this->refreshUrl = $refreshUrl;

        return $this;
    }

    /**
     * @return array<string, string>|null
     */
    public function getScopes(): ?iterable
    {
        return $this->scopes;
    }

    /**
     * @param array<string, string>|null $scopes
     */
    public function setScopes(?iterable $scopes): self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;

        return $this;
    }
}
