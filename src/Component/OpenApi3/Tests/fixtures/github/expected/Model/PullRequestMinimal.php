<?php

namespace Github\Model;

class PullRequestMinimal extends \ArrayObject
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
        $this->initialized['id'] = true;
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
        $this->initialized['number'] = true;
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
        $this->initialized['url'] = true;
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
        $this->initialized['head'] = true;
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
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
}