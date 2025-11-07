<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseKafkaSchemas extends \ArrayObject
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
}