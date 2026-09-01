<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentSchemaCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Content schema id to match on.
     *
     * @var string|null
     */
    public ?string $schemaId;
    public function definedProperties(): array
    {
        return ['schemaId' => 'schemaId'];
    }
}