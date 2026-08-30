<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalPropertiesInterface;
class OrderProductData implements AdditionalPropertiesInterface
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
    protected $title;
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
        return ['title' => ['title', 'getTitle', 'setTitle']];
    }
}