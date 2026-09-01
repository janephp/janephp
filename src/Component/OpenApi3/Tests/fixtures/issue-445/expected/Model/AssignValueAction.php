<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignValueAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Path to the object the value should be inserted in.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * ID of the field, the value should be inserted in.
     *
     * @var string|null
     */
    public ?string $fieldId;
    /**
     * Value to assign.
     *
     * @var mixed|null
     */
    public $value;
    /**
     * Indicates whether existing values should be replaced.
     * Note: for multi fieldsets and relations, this setting controls, if the value is added
     * to the already existing values or if the existing values shall be overwritten.
     *
     * @var bool
     */
    public bool $replace;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'fieldId' => 'fieldId', 'value' => 'value', 'replace' => 'replace'];
    }
}