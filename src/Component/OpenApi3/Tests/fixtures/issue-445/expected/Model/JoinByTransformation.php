<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class JoinByTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Separator to use.
     *
     * @var string|null
     */
    public ?string $separator;
    public function definedProperties(): array
    {
        return ['separator' => 'separator'];
    }
}