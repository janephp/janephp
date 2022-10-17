<?php

namespace Github\Model;

class ContentReferencesContentReferenceIdAttachmentsPostBody extends \ArrayObject
{
    /**
     * The title of the attachment
     *
     * @var string
     */
    protected $title;
    /**
     * The body of the attachment
     *
     * @var string
     */
    protected $body;
    /**
     * The title of the attachment
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the attachment
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The body of the attachment
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The body of the attachment
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