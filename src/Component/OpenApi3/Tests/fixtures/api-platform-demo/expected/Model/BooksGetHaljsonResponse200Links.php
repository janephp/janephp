<?php

namespace ApiPlatform\Demo\Model;

class BooksGetHaljsonResponse200Links extends \ArrayObject
{
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var BooksGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : BooksGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(BooksGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : BooksGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(BooksGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksLast
     */
    public function getLast() : BooksGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(BooksGetHaljsonResponse200LinksLast $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksNext
     */
    public function getNext() : BooksGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(BooksGetHaljsonResponse200LinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : BooksGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(BooksGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}