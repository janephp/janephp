<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalReviewRead extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var BookJsonhalReviewReadLinks
     */
    protected $links;
    /**
     * The title of the book.
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @return BookJsonhalReviewReadLinks
     */
    public function getLinks() : BookJsonhalReviewReadLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param BookJsonhalReviewReadLinks $links
     *
     * @return self
     */
    public function setLinks(BookJsonhalReviewReadLinks $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * The title of the book.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the book.
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
}