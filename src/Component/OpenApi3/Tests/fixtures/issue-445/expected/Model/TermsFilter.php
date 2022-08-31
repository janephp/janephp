<?php

namespace PicturePark\API\Model;

class TermsFilter extends FilterBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @var string[]
     */
    protected $terms;
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @return string[]
     */
    public function getTerms() : array
    {
        return $this->terms;
    }
    /**
     * The list of values to be filtered on. At least one must match to return results.
     *
     * @param string[] $terms
     *
     * @return self
     */
    public function setTerms(array $terms) : self
    {
        $this->terms = $terms;
        return $this;
    }
}