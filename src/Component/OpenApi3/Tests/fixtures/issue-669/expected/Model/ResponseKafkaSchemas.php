<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKafkaSchemas implements AdditionalPropertiesInterface
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
     * @var list<KafkaSchemaVerbose>
     */
    protected $subjects;
    /**
     * @return list<KafkaSchemaVerbose>
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }
    /**
     * @param list<KafkaSchemaVerbose> $subjects
     *
     * @return self
     */
    public function setSubjects(array $subjects): self
    {
        $this->initialized['subjects'] = true;
        $this->subjects = $subjects;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['subjects' => ['subjects', 'getSubjects', 'setSubjects']];
    }
}