<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CompactTweetFieldsReferencedTweetsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}