<?php

namespace PicturePark\API\Model;

class PrefixFilter extends FilterBase
{
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The value to be used as prefix.
     *
     * @var string
     */
    protected $prefix;
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
        $this->field = $field;
        return $this;
    }
    /**
     * The value to be used as prefix.
     *
     * @return string
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }
    /**
     * The value to be used as prefix.
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix) : self
    {
        $this->prefix = $prefix;
        return $this;
    }
}