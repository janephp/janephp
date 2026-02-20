<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Encoding
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
    protected $contentType;
    /**
     * @var array<string, mixed>|null
     */
    protected $headers;
    /**
     * @var mixed|null
     */
    protected $style = 'form';
    /**
     * @var bool|null
     */
    protected $explode;
    /**
     * @var bool|null
     */
    protected $allowReserved = false;

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function setContentType(?string $contentType): self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getHeaders(): ?iterable
    {
        return $this->headers;
    }

    /**
     * @param array<string, mixed>|null $headers
     */
    public function setHeaders(?iterable $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle($style): self
    {
        $this->initialized['style'] = true;
        $this->style = $style;

        return $this;
    }

    public function getExplode(): ?bool
    {
        return $this->explode;
    }

    public function setExplode(?bool $explode): self
    {
        $this->initialized['explode'] = true;
        $this->explode = $explode;

        return $this;
    }

    public function getAllowReserved(): ?bool
    {
        return $this->allowReserved;
    }

    public function setAllowReserved(?bool $allowReserved): self
    {
        $this->initialized['allowReserved'] = true;
        $this->allowReserved = $allowReserved;

        return $this;
    }
}
