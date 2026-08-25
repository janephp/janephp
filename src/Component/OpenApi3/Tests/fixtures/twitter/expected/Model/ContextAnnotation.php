<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class ContextAnnotation implements AdditionalPropertiesInterface
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
     * Represents the data for the context annotation domain.
     *
     * @var ContextAnnotationDomainFields
     */
    protected $domain;
    /**
     * Represents the data for the context annotation entity.
     *
     * @var ContextAnnotationEntityFields
     */
    protected $entity;
    /**
     * Represents the data for the context annotation domain.
     *
     * @return ContextAnnotationDomainFields
     */
    public function getDomain(): ContextAnnotationDomainFields
    {
        return $this->domain;
    }
    /**
     * Represents the data for the context annotation domain.
     *
     * @param ContextAnnotationDomainFields $domain
     *
     * @return self
     */
    public function setDomain(ContextAnnotationDomainFields $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * Represents the data for the context annotation entity.
     *
     * @return ContextAnnotationEntityFields
     */
    public function getEntity(): ContextAnnotationEntityFields
    {
        return $this->entity;
    }
    /**
     * Represents the data for the context annotation entity.
     *
     * @param ContextAnnotationEntityFields $entity
     *
     * @return self
     */
    public function setEntity(ContextAnnotationEntityFields $entity): self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['domain' => ['domain', 'getDomain', 'setDomain'], 'entity' => ['entity', 'getEntity', 'setEntity']];
    }
}