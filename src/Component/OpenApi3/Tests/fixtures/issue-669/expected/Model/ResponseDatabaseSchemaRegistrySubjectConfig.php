<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseSchemaRegistrySubjectConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the schema subject.
     *
     * @var string
     */
    public string $subjectName;
    /**
     * The compatibility level of the schema registry.
     *
     * @var string
     */
    public string $compatibilityLevel;
    public function definedProperties(): array
    {
        return ['subjectName' => 'subject_name', 'compatibilityLevel' => 'compatibility_level'];
    }
}