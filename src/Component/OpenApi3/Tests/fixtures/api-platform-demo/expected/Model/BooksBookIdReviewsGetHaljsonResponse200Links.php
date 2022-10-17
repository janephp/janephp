<?php

namespace ApiPlatform\Demo\Model;

class BooksBookIdReviewsGetHaljsonResponse200Links extends \ArrayObject
{
    /**
     * 
     *
     * @var BooksBookIdReviewsGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : BooksBookIdReviewsGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(BooksBookIdReviewsGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : BooksBookIdReviewsGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(BooksBookIdReviewsGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200LinksLast
     */
    public function getLast() : BooksBookIdReviewsGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(BooksBookIdReviewsGetHaljsonResponse200LinksLast $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200LinksNext
     */
    public function getNext() : BooksBookIdReviewsGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(BooksBookIdReviewsGetHaljsonResponse200LinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : BooksBookIdReviewsGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(BooksBookIdReviewsGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}