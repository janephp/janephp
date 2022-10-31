<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberReviewsPostBodyCommentsItem extends \ArrayObject
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
     * The relative path to the file that necessitates a review comment.
     *
     * @var string
     */
    protected $path;
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     *
     * @var int
     */
    protected $position;
    /**
     * Text of the review comment.
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var int
     */
    protected $line;
    /**
     * 
     *
     * @var string
     */
    protected $side;
    /**
     * 
     *
     * @var int
     */
    protected $startLine;
    /**
     * 
     *
     * @var string
     */
    protected $startSide;
    /**
     * The relative path to the file that necessitates a review comment.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The relative path to the file that necessitates a review comment.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Text of the review comment.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * Text of the review comment.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLine() : int
    {
        return $this->line;
    }
    /**
     * 
     *
     * @param int $line
     *
     * @return self
     */
    public function setLine(int $line) : self
    {
        $this->initialized['line'] = true;
        $this->line = $line;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSide() : string
    {
        return $this->side;
    }
    /**
     * 
     *
     * @param string $side
     *
     * @return self
     */
    public function setSide(string $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStartLine() : int
    {
        return $this->startLine;
    }
    /**
     * 
     *
     * @param int $startLine
     *
     * @return self
     */
    public function setStartLine(int $startLine) : self
    {
        $this->initialized['startLine'] = true;
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartSide() : string
    {
        return $this->startSide;
    }
    /**
     * 
     *
     * @param string $startSide
     *
     * @return self
     */
    public function setStartSide(string $startSide) : self
    {
        $this->initialized['startSide'] = true;
        $this->startSide = $startSide;
        return $this;
    }
}