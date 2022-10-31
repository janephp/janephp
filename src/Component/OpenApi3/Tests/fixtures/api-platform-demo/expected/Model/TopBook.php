<?php

namespace ApiPlatform\Demo\Model;

class TopBook extends \ArrayObject
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
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $author;
    /**
     * 
     *
     * @var string
     */
    protected $part;
    /**
     * 
     *
     * @var string
     */
    protected $place;
    /**
     * 
     *
     * @var int
     */
    protected $borrowCount;
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
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPart() : string
    {
        return $this->part;
    }
    /**
     * 
     *
     * @param string $part
     *
     * @return self
     */
    public function setPart(string $part) : self
    {
        $this->initialized['part'] = true;
        $this->part = $part;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlace() : string
    {
        return $this->place;
    }
    /**
     * 
     *
     * @param string $place
     *
     * @return self
     */
    public function setPlace(string $place) : self
    {
        $this->initialized['place'] = true;
        $this->place = $place;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBorrowCount() : int
    {
        return $this->borrowCount;
    }
    /**
     * 
     *
     * @param int $borrowCount
     *
     * @return self
     */
    public function setBorrowCount(int $borrowCount) : self
    {
        $this->initialized['borrowCount'] = true;
        $this->borrowCount = $borrowCount;
        return $this;
    }
}