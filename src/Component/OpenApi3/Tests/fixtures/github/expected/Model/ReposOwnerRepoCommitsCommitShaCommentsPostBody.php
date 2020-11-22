<?php

namespace Github\Model;

class ReposOwnerRepoCommitsCommitShaCommentsPostBody
{
    /**
     * The contents of the comment.
     *
     * @var string
     */
    protected $body;
    /**
     * Relative path of the file to comment on.
     *
     * @var string
     */
    protected $path;
    /**
     * Line index in the diff to comment on.
     *
     * @var int
     */
    protected $position;
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     *
     * @var int
     */
    protected $line;
    /**
     * The contents of the comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The contents of the comment.
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
    /**
     * Relative path of the file to comment on.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Relative path of the file to comment on.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Line index in the diff to comment on.
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * Line index in the diff to comment on.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     *
     * @return int
     */
    public function getLine() : int
    {
        return $this->line;
    }
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     *
     * @param int $line
     *
     * @return self
     */
    public function setLine(int $line) : self
    {
        $this->line = $line;
        return $this;
    }
}