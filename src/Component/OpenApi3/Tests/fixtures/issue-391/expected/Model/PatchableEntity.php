<?php

namespace Gounlaf\JanephpBug\Model;

use Gounlaf\JanephpBug\Runtime\AdditionalAndPatternProperties;
use Gounlaf\JanephpBug\Runtime\AdditionalPropertiesInterface;
class PatchableEntity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $nullableProperty;
    /**
     * @var string|null
     */
    public ?string $nullableAndRequiredProperty;
    public function definedProperties(): array
    {
        return ['nullableProperty' => 'nullable_property', 'nullableAndRequiredProperty' => 'nullable_and_required_property'];
    }
}