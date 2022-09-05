<?php

namespace PicturePark\API\Model;

class TermFilter extends FilterBase
{
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
        $this->term = $term;
        return $this;
    }
}