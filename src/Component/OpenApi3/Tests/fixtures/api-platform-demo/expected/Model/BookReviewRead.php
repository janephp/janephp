<?php

namespace ApiPlatform\Demo\Model;

class BookReviewRead
{
    /**
     * The title of the book.
     *
     * @var string
     */
    protected $title;
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