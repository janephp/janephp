<?php

namespace Github\Model;

class GistsGistIdCommentsPostBody extends \ArrayObject
{
    /**
     * The comment text.
     *
     * @var string
     */
    protected $body;
    /**
     * The comment text.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The comment text.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
}