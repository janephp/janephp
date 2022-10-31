<?php

namespace ApiPlatform\Demo\Model;

class BookBookRead extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ISBN of the book.
     *
     * @var string|null
     */
    protected $isbn;
    /**
     * The title of the book.
     *
     * @var string
     */
    protected $title;
    /**
     * A description of the item.
     *
     * @var string
     */
    protected $description;
    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @var string
     */
    protected $author;
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     * @var \DateTime
     */
    protected $publicationDate;
    /**
     * The book's reviews.
     *
     * @var ReviewBookRead[]
     */
    protected $reviews;
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
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The ISBN of the book.
     *
     * @return string|null
     */
    public function getIsbn() : ?string
    {
        return $this->isbn;
    }
    /**
     * The ISBN of the book.
     *
     * @param string|null $isbn
     *
     * @return self
     */
    public function setIsbn(?string $isbn) : self
    {
        $this->initialized['isbn'] = true;
        $this->isbn = $isbn;
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
    /**
     * A description of the item.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @return string
     */
    public function getAuthor() : string
    {
        return $this->author;
    }
    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author) : self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     * @return \DateTime
     */
    public function getPublicationDate() : \DateTime
    {
        return $this->publicationDate;
    }
    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     * @param \DateTime $publicationDate
     *
     * @return self
     */
    public function setPublicationDate(\DateTime $publicationDate) : self
    {
        $this->initialized['publicationDate'] = true;
        $this->publicationDate = $publicationDate;
        return $this;
    }
    /**
     * The book's reviews.
     *
     * @return ReviewBookRead[]
     */
    public function getReviews() : array
    {
        return $this->reviews;
    }
    /**
     * The book's reviews.
     *
     * @param ReviewBookRead[] $reviews
     *
     * @return self
     */
    public function setReviews(array $reviews) : self
    {
        $this->initialized['reviews'] = true;
        $this->reviews = $reviews;
        return $this;
    }
}