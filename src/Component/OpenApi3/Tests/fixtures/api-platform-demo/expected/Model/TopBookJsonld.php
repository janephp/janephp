<?php

namespace ApiPlatform\Demo\Model;

class TopBookJsonld
{
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $id2;
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
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId2() : int
    {
        return $this->id2;
    }
    /**
     * 
     *
     * @param int $id2
     *
     * @return self
     */
    public function setId2(int $id2) : self
    {
        $this->id2 = $id2;
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
        $this->borrowCount = $borrowCount;
        return $this;
    }
}