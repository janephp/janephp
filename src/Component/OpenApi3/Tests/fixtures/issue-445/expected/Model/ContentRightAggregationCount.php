<?php

namespace PicturePark\API\Model;

class ContentRightAggregationCount
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ContentRight.
     *
     * @var string
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
     * @return string
     */
    public function getContentRight(): string
    {
        return $this->contentRight;
    }
    /**
     * ContentRight.
     *
     * @param string $contentRight
     *
     * @return self
     */
    public function setContentRight(string $contentRight): self
    {
        $this->initialized['contentRight'] = true;
        $this->contentRight = $contentRight;
        return $this;
    }
    /**
     * Found document count.
     *
     * @return int
     */
    public function getCount(): int
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
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}