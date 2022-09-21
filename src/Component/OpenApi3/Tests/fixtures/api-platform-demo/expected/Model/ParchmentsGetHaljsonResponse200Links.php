<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetHaljsonResponse200Links
{
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200LinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200LinksFirst
     */
    protected $first;
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200LinksLast
     */
    protected $last;
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200LinksNext
     */
    protected $next;
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200LinksPrevious
     */
    protected $previous;
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200LinksSelf
     */
    public function getSelf() : ParchmentsGetHaljsonResponse200LinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200LinksSelf $self
     *
     * @return self
     */
    public function setSelf(ParchmentsGetHaljsonResponse200LinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200LinksFirst
     */
    public function getFirst() : ParchmentsGetHaljsonResponse200LinksFirst
    {
        return $this->first;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200LinksFirst $first
     *
     * @return self
     */
    public function setFirst(ParchmentsGetHaljsonResponse200LinksFirst $first) : self
    {
        $this->first = $first;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200LinksLast
     */
    public function getLast() : ParchmentsGetHaljsonResponse200LinksLast
    {
        return $this->last;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200LinksLast $last
     *
     * @return self
     */
    public function setLast(ParchmentsGetHaljsonResponse200LinksLast $last) : self
    {
        $this->last = $last;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200LinksNext
     */
    public function getNext() : ParchmentsGetHaljsonResponse200LinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200LinksNext $next
     *
     * @return self
     */
    public function setNext(ParchmentsGetHaljsonResponse200LinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200LinksPrevious
     */
    public function getPrevious() : ParchmentsGetHaljsonResponse200LinksPrevious
    {
        return $this->previous;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200LinksPrevious $previous
     *
     * @return self
     */
    public function setPrevious(ParchmentsGetHaljsonResponse200LinksPrevious $previous) : self
    {
        $this->previous = $previous;
        return $this;
    }
}