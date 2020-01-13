<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class HashtagEntity
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
     * The text of the Hashtag
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
     * The text of the Hashtag
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * The text of the Hashtag
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