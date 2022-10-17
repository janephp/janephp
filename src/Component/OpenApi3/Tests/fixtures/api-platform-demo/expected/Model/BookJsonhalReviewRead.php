<?php

namespace ApiPlatform\Demo\Model;

class BookJsonhalReviewRead extends \ArrayObject
{
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
        $this->title = $title;
        return $this;
    }
}