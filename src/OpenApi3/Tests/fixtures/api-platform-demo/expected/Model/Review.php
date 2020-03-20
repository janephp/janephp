<?php

namespace ApiPlatform\Demo\Model;

class Review
{
    /**
     * The actual body of the review
     *
     * @var string
     */
    protected $body;
    /**
     * A rating
     *
     * @var int
     */
    protected $rating;
    /**
     * DEPRECATED (use rating now): A letter to rate the book
     *
     * @deprecated
     *
     * @var string
     */
    protected $letter;
    /**
     * The author of the review
     *
     * @var string
     */
    protected $author;
    /**
     * Publication date of the review
     *
     * @var \DateTime
     */
    protected $publicationDate;
    /**
     * A book.
     *
     * @var Book
     */
    protected $book;
    /**
     * The actual body of the review
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The actual body of the review
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
    /**
     * A rating
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * A rating
     *
     * @param int $rating
     *
     * @return self
     */
    public function setRating(int $rating) : self
    {
        $this->rating = $rating;
        return $this;
    }
    /**
     * DEPRECATED (use rating now): A letter to rate the book
     *
     * @deprecated
     *
     * @return string
     */
    public function getLetter() : string
    {
        return $this->letter;
    }
    /**
     * DEPRECATED (use rating now): A letter to rate the book
     *
     * @param string $letter
     *
     * @deprecated
     *
     * @return self
     */
    public function setLetter(string $letter) : self
    {
        $this->letter = $letter;
        return $this;
    }
    /**
     * The author of the review
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * The author of the review
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
     * Publication date of the review
     *
     * @return \DateTime
     */
    public function getPublicationDate() : \DateTime
    {
        return $this->publicationDate;
    }
    /**
     * Publication date of the review
     *
     * @param \DateTime $publicationDate
     *
     * @return self
     */
    public function setPublicationDate(\DateTime $publicationDate) : self
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }
    /**
     * A book.
     *
     * @return Book
     */
    public function getBook() : Book
    {
        return $this->book;
    }
    /**
     * A book.
     *
     * @param Book $book
     *
     * @return self
     */
    public function setBook(Book $book) : self
    {
        $this->book = $book;
        return $this;
    }
}