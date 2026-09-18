<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class ContextAnnotation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Represents the data for the context annotation domain.
     *
     * @var ContextAnnotationDomainFields
     */
    public ContextAnnotationDomainFields $domain;
    /**
     * Represents the data for the context annotation entity.
     *
     * @var ContextAnnotationEntityFields
     */
    public ContextAnnotationEntityFields $entity;
    public function definedProperties(): array
    {
        return ['domain' => 'domain', 'entity' => 'entity'];
    }
}