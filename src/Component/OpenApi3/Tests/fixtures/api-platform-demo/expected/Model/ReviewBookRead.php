<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class ReviewBookRead implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $id;
    /**
     * The actual body of the review.
     *
     * @var string
     */
    protected $body;
    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The actual body of the review.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }
    /**
     * The actual body of the review.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'body' => ['body', 'getBody', 'setBody']];
    }
}