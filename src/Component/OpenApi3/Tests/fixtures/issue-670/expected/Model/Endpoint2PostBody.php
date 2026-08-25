<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint2PostBody implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $postField2;
    /**
     * @return string
     */
    public function getPostField2(): string
    {
        return $this->postField2;
    }
    /**
     * @param string $postField2
     *
     * @return self
     */
    public function setPostField2(string $postField2): self
    {
        $this->initialized['postField2'] = true;
        $this->postField2 = $postField2;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['postField2' => ['post-field-2', 'getPostField2', 'setPostField2']];
    }
}