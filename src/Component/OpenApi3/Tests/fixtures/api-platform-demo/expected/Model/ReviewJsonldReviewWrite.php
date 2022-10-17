<?php

namespace ApiPlatform\Demo\Model;

class ReviewJsonldReviewWrite extends \ArrayObject
{
    /**
     * 
     *
     * @var mixed
     */
    protected $context;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * The actual body of the review.
     *
     * @var string
     */
    protected $body;
    /**
     * A rating.
     *
     * @var int
     */
    protected $rating;
    /**
     * DEPRECATED (use rating now): A letter to rate the book.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $letter;
    /**
     * The item that is being reviewed/rated.
     *
     * @var string
     */
    protected $book;
    /**
     * The author of the review.
     *
     * @var string|null
     */
    protected $author;
    /**
     * Publication date of the review.
     *
     * @var \DateTime|null
     */
    protected $publicationDate;
    /**
     * 
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->context = $context;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
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
    /**
     * A rating.
     *
     * @return int
     */
    public function getRating() : int
    {
        return $this->rating;
    }
    /**
     * A rating.
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
     * DEPRECATED (use rating now): A letter to rate the book.
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getLetter() : ?string
    {
        return $this->letter;
    }
    /**
     * DEPRECATED (use rating now): A letter to rate the book.
     *
     * @param string|null $letter
     *
     * @deprecated
     *
     * @return self
     */
    public function setLetter(?string $letter) : self
    {
        $this->letter = $letter;
        return $this;
    }
    /**
     * The item that is being reviewed/rated.
     *
     * @return string
     */
    public function getBook() : string
    {
        return $this->book;
    }
    /**
     * The item that is being reviewed/rated.
     *
     * @param string $book
     *
     * @return self
     */
    public function setBook(string $book) : self
    {
        $this->book = $book;
        return $this;
    }
    /**
     * The author of the review.
     *
     * @return string|null
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * The author of the review.
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * Publication date of the review.
     *
     * @return \DateTime|null
     */
    public function getPublicationDate() : ?\DateTime
    {
        return $this->publicationDate;
    }
    /**
     * Publication date of the review.
     *
     * @param \DateTime|null $publicationDate
     *
     * @return self
     */
    public function setPublicationDate(?\DateTime $publicationDate) : self
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }
}