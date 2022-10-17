<?php

namespace ApiPlatform\Demo\Model;

class TopBookJsonhal extends \ArrayObject
{
    /**
     * 
     *
     * @var TopBookJsonhalLinks
     */
    protected $links;
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
     * @return TopBookJsonhalLinks
     */
    public function getLinks() : TopBookJsonhalLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param TopBookJsonhalLinks $links
     *
     * @return self
     */
    public function setLinks(TopBookJsonhalLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
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