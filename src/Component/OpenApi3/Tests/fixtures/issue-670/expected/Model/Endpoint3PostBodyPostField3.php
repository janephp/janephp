<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint3PostBodyPostField3 implements AdditionalPropertiesInterface
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
    protected $postSubField3;
    /**
     * @return string
     */
    public function getPostSubField3(): string
    {
        return $this->postSubField3;
    }
    /**
     * @param string $postSubField3
     *
     * @return self
     */
    public function setPostSubField3(string $postSubField3): self
    {
        $this->initialized['postSubField3'] = true;
        $this->postSubField3 = $postSubField3;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['postSubField3' => ['post-sub-field-3', 'getPostSubField3', 'setPostSubField3']];
    }
}