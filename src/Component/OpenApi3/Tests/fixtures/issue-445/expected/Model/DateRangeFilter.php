<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DateRangeFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The date time range.
     *
     * @var DateRange
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
     * The date time range.
     *
     * @return DateRange
     */
    public function getRange(): DateRange
    {
        return $this->range;
    }
    /**
     * The date time range.
     *
     * @param DateRange $range
     *
     * @return self
     */
    public function setRange(DateRange $range): self
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