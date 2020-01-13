<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class ContextAnnotation
{
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
    public function getDomain() : ContextAnnotationDomainFields
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
    public function setDomain(ContextAnnotationDomainFields $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     * Represents the data for the context annotation entity.
     *
     * @return ContextAnnotationEntityFields
     */
    public function getEntity() : ContextAnnotationEntityFields
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
    public function setEntity(ContextAnnotationEntityFields $entity) : self
    {
        $this->entity = $entity;
        return $this;
    }
}