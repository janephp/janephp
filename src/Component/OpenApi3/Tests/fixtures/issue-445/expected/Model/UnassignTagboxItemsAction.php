<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UnassignTagboxItemsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Path to the object the tagbox is contained in.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * ID of the tagbox field.
     *
     * @var string|null
     */
    public ?string $fieldId;
    /**
     * List of refIds of the items that should be removed.
     *
     * @var mixed|null
     */
    public $refIds;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'fieldId' => 'fieldId', 'refIds' => 'refIds'];
    }
}