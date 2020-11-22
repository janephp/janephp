<?php

namespace Github\Model;

class TopicSearchResultItem
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * 
     *
     * @var string|null
     */
    protected $released;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var bool
     */
    protected $featured;
    /**
     * 
     *
     * @var bool
     */
    protected $curated;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var int|null
     */
    protected $repositoryCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $logoUrl;
    /**
     * 
     *
     * @var SearchResultTextMatchesItem[]
     */
    protected $textMatches;
    /**
     * 
     *
     * @var TopicSearchResultItemRelatedItem[]|null
     */
    protected $related;
    /**
     * 
     *
     * @var TopicSearchResultItemAliasesItem[]|null
     */
    protected $aliases;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortDescription() : ?string
    {
        return $this->shortDescription;
    }
    /**
     * 
     *
     * @param string|null $shortDescription
     *
     * @return self
     */
    public function setShortDescription(?string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param string|null $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReleased() : ?string
    {
        return $this->released;
    }
    /**
     * 
     *
     * @param string|null $released
     *
     * @return self
     */
    public function setReleased(?string $released) : self
    {
        $this->released = $released;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFeatured() : bool
    {
        return $this->featured;
    }
    /**
     * 
     *
     * @param bool $featured
     *
     * @return self
     */
    public function setFeatured(bool $featured) : self
    {
        $this->featured = $featured;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCurated() : bool
    {
        return $this->curated;
    }
    /**
     * 
     *
     * @param bool $curated
     *
     * @return self
     */
    public function setCurated(bool $curated) : self
    {
        $this->curated = $curated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRepositoryCount() : ?int
    {
        return $this->repositoryCount;
    }
    /**
     * 
     *
     * @param int|null $repositoryCount
     *
     * @return self
     */
    public function setRepositoryCount(?int $repositoryCount) : self
    {
        $this->repositoryCount = $repositoryCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLogoUrl() : ?string
    {
        return $this->logoUrl;
    }
    /**
     * 
     *
     * @param string|null $logoUrl
     *
     * @return self
     */
    public function setLogoUrl(?string $logoUrl) : self
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }
    /**
     * 
     *
     * @return SearchResultTextMatchesItem[]
     */
    public function getTextMatches() : array
    {
        return $this->textMatches;
    }
    /**
     * 
     *
     * @param SearchResultTextMatchesItem[] $textMatches
     *
     * @return self
     */
    public function setTextMatches(array $textMatches) : self
    {
        $this->textMatches = $textMatches;
        return $this;
    }
    /**
     * 
     *
     * @return TopicSearchResultItemRelatedItem[]|null
     */
    public function getRelated() : ?array
    {
        return $this->related;
    }
    /**
     * 
     *
     * @param TopicSearchResultItemRelatedItem[]|null $related
     *
     * @return self
     */
    public function setRelated(?array $related) : self
    {
        $this->related = $related;
        return $this;
    }
    /**
     * 
     *
     * @return TopicSearchResultItemAliasesItem[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param TopicSearchResultItemAliasesItem[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->aliases = $aliases;
        return $this;
    }
}