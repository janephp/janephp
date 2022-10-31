<?php

namespace PicturePark\API\Model;

class TermFilter extends FilterBase
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
     * The value to use to filter on.
     *
     * @var string
     */
    protected $term;
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
     * The value to use to filter on.
     *
     * @return string
     */
    public function getTerm() : string
    {
        return $this->term;
    }
    /**
     * The value to use to filter on.
     *
     * @param string $term
     *
     * @return self
     */
    public function setTerm(string $term) : self
    {
        $this->initialized['term'] = true;
        $this->term = $term;
        return $this;
    }
}