<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalPropertiesInterface;
class Foo implements AdditionalPropertiesInterface
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
    protected $type;
    /**
     * @var string
     */
    protected $title;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'title' => ['title', 'getTitle', 'setTitle']];
    }
}