<?php

namespace PicturePark\API\Model;

class DateRangeFilter extends FilterBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The date time range.
     *
     * @var mixed
     */
    protected $range;
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @return string
    */
    public function getField() : string
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
    public function setField(string $field) : self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * The date time range.
     *
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * The date time range.
     *
     * @param mixed $range
     *
     * @return self
     */
    public function setRange($range) : self
    {
        $this->initialized['range'] = true;
        $this->range = $range;
        return $this;
    }
}