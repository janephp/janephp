<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SubLevel2 extends \ArrayObject
{
    /**
     * 
     *
     * @var SubLevel3
     */
    protected $subLevel3;
    /**
     * 
     *
     * @return SubLevel3
     */
    public function getSubLevel3() : SubLevel3
    {
        return $this->subLevel3;
    }
    /**
     * 
     *
     * @param SubLevel3 $subLevel3
     *
     * @return self
     */
    public function setSubLevel3(SubLevel3 $subLevel3) : self
    {
        $this->subLevel3 = $subLevel3;
        return $this;
    }
}