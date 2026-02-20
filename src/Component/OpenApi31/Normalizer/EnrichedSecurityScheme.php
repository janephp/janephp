<?php

namespace Jane\Component\OpenApi31\Normalizer;

use Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme;

class EnrichedSecurityScheme extends SecurityScheme
{
    protected ?string $name = null;
    protected ?string $in = null;
    protected ?string $scheme = null;
    protected ?string $bearerFormat = null;
    protected mixed $flows = null;
    protected ?string $openIdConnectUrl = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIn(): ?string
    {
        return $this->in;
    }

    public function setIn(?string $in): self
    {
        $this->in = $in;

        return $this;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    public function setScheme(?string $scheme): self
    {
        $this->scheme = $scheme;

        return $this;
    }

    public function getBearerFormat(): ?string
    {
        return $this->bearerFormat;
    }

    public function setBearerFormat(?string $bearerFormat): self
    {
        $this->bearerFormat = $bearerFormat;

        return $this;
    }

    public function getFlows(): mixed
    {
        return $this->flows;
    }

    public function setFlows(mixed $flows): self
    {
        $this->flows = $flows;

        return $this;
    }

    public function getOpenIdConnectUrl(): ?string
    {
        return $this->openIdConnectUrl;
    }

    public function setOpenIdConnectUrl(?string $openIdConnectUrl): self
    {
        $this->openIdConnectUrl = $openIdConnectUrl;

        return $this;
    }
}
