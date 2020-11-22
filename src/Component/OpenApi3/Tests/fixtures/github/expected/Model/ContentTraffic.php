<?php

namespace Github\Model;

class ContentTraffic
{
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var int
     */
    protected $uniques;
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUniques() : int
    {
        return $this->uniques;
    }
    /**
     * 
     *
     * @param int $uniques
     *
     * @return self
     */
    public function setUniques(int $uniques) : self
    {
        $this->uniques = $uniques;
        return $this;
    }
}