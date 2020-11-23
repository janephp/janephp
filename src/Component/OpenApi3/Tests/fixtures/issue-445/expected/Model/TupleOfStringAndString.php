<?php

namespace PicturePark\API\Model;

class TupleOfStringAndString
{
    /**
     * 
     *
     * @var string
     */
    protected $item1;
    /**
     * 
     *
     * @var string
     */
    protected $item2;
    /**
     * 
     *
     * @return string
     */
    public function getItem1() : string
    {
        return $this->item1;
    }
    /**
     * 
     *
     * @param string $item1
     *
     * @return self
     */
    public function setItem1(string $item1) : self
    {
        $this->item1 = $item1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getItem2() : string
    {
        return $this->item2;
    }
    /**
     * 
     *
     * @param string $item2
     *
     * @return self
     */
    public function setItem2(string $item2) : self
    {
        $this->item2 = $item2;
        return $this;
    }
}