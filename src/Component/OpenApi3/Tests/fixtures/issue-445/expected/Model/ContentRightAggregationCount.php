<?php

namespace PicturePark\API\Model;

class ContentRightAggregationCount
{
    /**
     * ContentRight.
     *
     * @var mixed
     */
    protected $contentRight;
    /**
     * Found document count.
     *
     * @var int
     */
    protected $count;
    /**
     * ContentRight.
     *
     * @return mixed
     */
    public function getContentRight()
    {
        return $this->contentRight;
    }
    /**
     * ContentRight.
     *
     * @param mixed $contentRight
     *
     * @return self
     */
    public function setContentRight($contentRight) : self
    {
        $this->contentRight = $contentRight;
        return $this;
    }
    /**
     * Found document count.
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * Found document count.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
}