<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DeleteRulesRequest
{
    /**
     * 
     *
     * @var string[]
     */
    protected $ids;
    /**
     * 
     *
     * @var string[]
     */
    protected $values;
    /**
     * 
     *
     * @return string[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param string[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param string[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}