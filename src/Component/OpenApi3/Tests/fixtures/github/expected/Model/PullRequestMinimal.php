<?php

namespace Github\Model;

class PullRequestMinimal
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var PullRequestMinimalHead
     */
    protected $head;
    /**
     * 
     *
     * @var PullRequestMinimalBase
     */
    protected $base;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMinimalHead
     */
    public function getHead() : PullRequestMinimalHead
    {
        return $this->head;
    }
    /**
     * 
     *
     * @param PullRequestMinimalHead $head
     *
     * @return self
     */
    public function setHead(PullRequestMinimalHead $head) : self
    {
        $this->head = $head;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMinimalBase
     */
    public function getBase() : PullRequestMinimalBase
    {
        return $this->base;
    }
    /**
     * 
     *
     * @param PullRequestMinimalBase $base
     *
     * @return self
     */
    public function setBase(PullRequestMinimalBase $base) : self
    {
        $this->base = $base;
        return $this;
    }
}