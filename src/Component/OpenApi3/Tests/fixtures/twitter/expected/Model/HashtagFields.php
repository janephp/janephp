<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class HashtagFields extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The text of the Hashtag
     *
     * @var string
     */
    protected $tag;
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
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
}