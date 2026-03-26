<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class MediaType
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
     * @var mixed|null
     */
    protected $schema;
    /**
     * @var array<string, Encoding>|null
     */
    protected $encoding;

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema($schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return array<string, Encoding>|null
     */
    public function getEncoding(): ?iterable
    {
        return $this->encoding;
    }

    /**
     * @param array<string, Encoding>|null $encoding
     */
    public function setEncoding(?iterable $encoding): self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;

        return $this;
    }
}
