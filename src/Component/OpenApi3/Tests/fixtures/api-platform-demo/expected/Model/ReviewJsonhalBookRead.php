<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonhalBookRead
{
    /**
     * 
     *
     * @var ReviewJsonhalBookReadLinks
     */
    protected $links;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * The actual body of the review.
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @return ReviewJsonhalBookReadLinks
     */
    public function getLinks() : ReviewJsonhalBookReadLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ReviewJsonhalBookReadLinks $links
     *
     * @return self
     */
    public function setLinks(ReviewJsonhalBookReadLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The actual body of the review.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The actual body of the review.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
}