<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NumericRangeFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The numeric range on which filtering.
     *
     * @var NumericRange
     */
    public NumericRange $range;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'range' => 'range'];
    }
}