<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
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