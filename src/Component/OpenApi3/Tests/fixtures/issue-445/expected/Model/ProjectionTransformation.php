<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ProjectionTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Transformations to apply.
     *
     * @var list<BusinessRuleTransformation>|null
     */
    public ?array $transformations;
    public function definedProperties(): array
    {
        return ['transformations' => 'transformations'];
    }
}