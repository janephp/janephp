<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class HashtagFields
{
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
        $this->tag = $tag;
        return $this;
    }
}