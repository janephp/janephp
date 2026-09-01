<?php

namespace PicturePark\API\Model;

class FieldOverwriteBase
{
    /**
     * The field's ID whose information need to be overwritten.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Defines if a field value is mandatory or not: this value will overwrite the existing Required value specified in the parent schema  if
     * OverwriteRequired is set to true.
     *
     * @var bool
     */
    public bool $required;
    /**
     * Enable the overwriting of the Required property of the field specified by the Id property.
     *
     * @var bool
     */
    public bool $overwriteRequired;
    /**
     * @var string
     */
    public string $kind;
}