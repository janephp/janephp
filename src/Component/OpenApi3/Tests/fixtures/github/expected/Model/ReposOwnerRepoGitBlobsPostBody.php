<?php

namespace Github\Model;

class ReposOwnerRepoGitBlobsPostBody extends \ArrayObject
{
    /**
     * The new blob's content.
     *
     * @var string
     */
    protected $content;
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     *
     * @var string
     */
    protected $encoding = 'utf-8';
    /**
     * The new blob's content.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The new blob's content.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     *
     * @return string
     */
    public function getEncoding() : string
    {
        return $this->encoding;
    }
    /**
     * The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     *
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding) : self
    {
        $this->encoding = $encoding;
        return $this;
    }
}