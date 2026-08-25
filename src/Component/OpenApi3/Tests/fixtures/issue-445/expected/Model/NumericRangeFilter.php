<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NumericRangeFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @var string
     */
    protected $field;
    /**
     * The numeric range on which filtering.
     *
     * @var NumericRange
     */
    protected $range;
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @param string $field
    *
    * @return self
    */
    public function setField(string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * The numeric range on which filtering.
     *
     * @return NumericRange
     */
    public function getRange(): NumericRange
    {
        return $this->range;
    }
    /**
     * The numeric range on which filtering.
     *
     * @param NumericRange $range
     *
     * @return self
     */
    public function setRange(NumericRange $range): self
    {
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['field' => ['field', 'getField', 'setField'], 'range' => ['range', 'getRange', 'setRange']];
    }
}