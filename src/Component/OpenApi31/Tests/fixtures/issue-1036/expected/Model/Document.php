<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model;

use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\AdditionalPropertiesInterface;
class Document implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId']];
    }
}