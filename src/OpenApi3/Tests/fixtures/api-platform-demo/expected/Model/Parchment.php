<?php

namespace ApiPlatform\Demo\Model;

/**
 *
 * @deprecated
 */
class Parchment
{
    /**
     * The title of the book
     *
     * @var string
     */
    protected $title;
    /**
     * A description of the item
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * The title of the book
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the book
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
    /**
     * A description of the item
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the item
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
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
}