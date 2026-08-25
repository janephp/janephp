<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint3PostBody implements AdditionalPropertiesInterface
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
     * @var Endpoint3PostBodyPostField3
     */
    protected $postField3;
    /**
     * @return Endpoint3PostBodyPostField3
     */
    public function getPostField3(): Endpoint3PostBodyPostField3
    {
        return $this->postField3;
    }
    /**
     * @param Endpoint3PostBodyPostField3 $postField3
     *
     * @return self
     */
    public function setPostField3(Endpoint3PostBodyPostField3 $postField3): self
    {
        $this->initialized['postField3'] = true;
        $this->postField3 = $postField3;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['postField3' => ['post-field-3', 'getPostField3', 'setPostField3']];
    }
}