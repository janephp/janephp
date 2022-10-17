<?php

namespace ApiPlatform\Demo\Model;

class ReviewsGetHaljsonResponse200Links extends \ArrayObject
{
    /**
     * 
     *
     * @var ReviewsGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var ReviewsGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var ReviewsGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var ReviewsGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var ReviewsGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return ReviewsGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : ReviewsGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ReviewsGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(ReviewsGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewsGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : ReviewsGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param ReviewsGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(ReviewsGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewsGetHaljsonResponse200LinksLast
     */
    public function getLast() : ReviewsGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param ReviewsGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(ReviewsGetHaljsonResponse200LinksLast $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewsGetHaljsonResponse200LinksNext
     */
    public function getNext() : ReviewsGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param ReviewsGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(ReviewsGetHaljsonResponse200LinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewsGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : ReviewsGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param ReviewsGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(ReviewsGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}