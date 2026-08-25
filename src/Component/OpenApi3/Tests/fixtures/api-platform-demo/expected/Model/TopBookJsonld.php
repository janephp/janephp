<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class TopBookJsonld implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|object
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $id2;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $author;
    /**
     * @var string
     */
    protected $part;
    /**
     * @var string
     */
    protected $place;
    /**
     * @var int
     */
    protected $borrowCount;
    /**
     * @return string|object
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * @param string|object $context
     *
     * @return self
     */
    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return int
     */
    public function getId2(): int
    {
        return $this->id2;
    }
    /**
     * @param int $id2
     *
     * @return self
     */
    public function setId2(int $id2): self
    {
        $this->initialized['id2'] = true;
        $this->id2 = $id2;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
    /**
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;
        return $this;
    }
    /**
     * @return string
     */
    public function getPart(): string
    {
        return $this->part;
    }
    /**
     * @param string $part
     *
     * @return self
     */
    public function setPart(string $part): self
    {
        $this->initialized['part'] = true;
        $this->part = $part;
        return $this;
    }
    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }
    /**
     * @param string $place
     *
     * @return self
     */
    public function setPlace(string $place): self
    {
        $this->initialized['place'] = true;
        $this->place = $place;
        return $this;
    }
    /**
     * @return int
     */
    public function getBorrowCount(): int
    {
        return $this->borrowCount;
    }
    /**
     * @param int $borrowCount
     *
     * @return self
     */
    public function setBorrowCount(int $borrowCount): self
    {
        $this->initialized['borrowCount'] = true;
        $this->borrowCount = $borrowCount;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['@context', 'getContext', 'setContext'], 'id' => ['@id', 'getId', 'setId'], 'type' => ['@type', 'getType', 'setType'], 'id2' => ['id', 'getId2', 'setId2'], 'title' => ['title', 'getTitle', 'setTitle'], 'author' => ['author', 'getAuthor', 'setAuthor'], 'part' => ['part', 'getPart', 'setPart'], 'place' => ['place', 'getPlace', 'setPlace'], 'borrowCount' => ['borrowCount', 'getBorrowCount', 'setBorrowCount']];
    }
}