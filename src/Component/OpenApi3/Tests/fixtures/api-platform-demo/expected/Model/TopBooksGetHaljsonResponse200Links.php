<?php

namespace ApiPlatform\Demo\Model;

class TopBooksGetHaljsonResponse200Links extends \ArrayObject
{
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : TopBooksGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(TopBooksGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : TopBooksGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(TopBooksGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200LinksLast
     */
    public function getLast() : TopBooksGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(TopBooksGetHaljsonResponse200LinksLast $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200LinksNext
     */
    public function getNext() : TopBooksGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(TopBooksGetHaljsonResponse200LinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : TopBooksGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(TopBooksGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}