<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessRuleScript extends BusinessRule implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Script
     *
     * @var string|null
     */
    public ?string $script;
    public function definedProperties(): array
    {
        return ['script' => 'script'];
    }
}