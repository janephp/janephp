<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AssignTagboxItemsAction extends BusinessRuleAction implements AdditionalPropertiesInterface
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
     * List of refIds of the items that should be assigned.
     *
     * @var mixed|null
     */
    public $refIds;
    /**
     * Indicates whether all the already assigned tags get replaced by the set specified in the action.
     * If false, the not already assigned tags get added, the rest is left as is.
     *
     * @var bool
     */
    public bool $replace;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'fieldId' => 'fieldId', 'refIds' => 'refIds', 'replace' => 'replace'];
    }
}