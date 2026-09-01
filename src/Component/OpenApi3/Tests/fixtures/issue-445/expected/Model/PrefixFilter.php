<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class PrefixFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @var string
     */
    public string $field;
    /**
     * The value to be used as prefix.
     *
     * @var string
     */
    public string $prefix;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'prefix' => 'prefix'];
    }
}