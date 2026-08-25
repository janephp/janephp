<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint1PostBody implements AdditionalPropertiesInterface
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
    protected $postField1;
    /**
     * @return string
     */
    public function getPostField1(): string
    {
        return $this->postField1;
    }
    /**
     * @param string $postField1
     *
     * @return self
     */
    public function setPostField1(string $postField1): self
    {
        $this->initialized['postField1'] = true;
        $this->postField1 = $postField1;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['postField1' => ['post-field-1', 'getPostField1', 'setPostField1']];
    }
}