<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CashtagEntity
{
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    protected $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    protected $end;
    /**
     * 
     *
     * @var string
     */
    protected $tag;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @return int
     */
    public function getStart() : int
    {
        return $this->start;
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @return int
     */
    public function getEnd() : int
    {
        return $this->end;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end) : self
    {
        $this->end = $end;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * 
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->tag = $tag;
        return $this;
    }
}