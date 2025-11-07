<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabaseSchemaRegistrySubjectConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the schema subject.
     *
     * @var string
     */
    protected $subjectName;
    /**
     * The compatibility level of the schema registry.
     *
     * @var string
     */
    protected $compatibilityLevel;
    /**
     * The name of the schema subject.
     *
     * @return string
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
    /**
     * The name of the schema subject.
     *
     * @param string $subjectName
     *
     * @return self
     */
    public function setSubjectName(string $subjectName): self
    {
        $this->initialized['subjectName'] = true;
        $this->subjectName = $subjectName;
        return $this;
    }
    /**
     * The compatibility level of the schema registry.
     *
     * @return string
     */
    public function getCompatibilityLevel(): string
    {
        return $this->compatibilityLevel;
    }
    /**
     * The compatibility level of the schema registry.
     *
     * @param string $compatibilityLevel
     *
     * @return self
     */
    public function setCompatibilityLevel(string $compatibilityLevel): self
    {
        $this->initialized['compatibilityLevel'] = true;
        $this->compatibilityLevel = $compatibilityLevel;
        return $this;
    }
}