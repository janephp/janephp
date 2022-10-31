<?php

namespace Github\Model;

class SearchResultTextMatchesItem extends \ArrayObject
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
     * @var string
     */
    protected $objectUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $objectType;
    /**
     * 
     *
     * @var string
     */
    protected $property;
    /**
     * 
     *
     * @var string
     */
    protected $fragment;
    /**
     * 
     *
     * @var SearchResultTextMatchesItemMatchesItem[]
     */
    protected $matches;
    /**
     * 
     *
     * @return string
     */
    public function getObjectUrl() : string
    {
        return $this->objectUrl;
    }
    /**
     * 
     *
     * @param string $objectUrl
     *
     * @return self
     */
    public function setObjectUrl(string $objectUrl) : self
    {
        $this->initialized['objectUrl'] = true;
        $this->objectUrl = $objectUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    /**
     * 
     *
     * @param string|null $objectType
     *
     * @return self
     */
    public function setObjectType(?string $objectType) : self
    {
        $this->initialized['objectType'] = true;
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProperty() : string
    {
        return $this->property;
    }
    /**
     * 
     *
     * @param string $property
     *
     * @return self
     */
    public function setProperty(string $property) : self
    {
        $this->initialized['property'] = true;
        $this->property = $property;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFragment() : string
    {
        return $this->fragment;
    }
    /**
     * 
     *
     * @param string $fragment
     *
     * @return self
     */
    public function setFragment(string $fragment) : self
    {
        $this->initialized['fragment'] = true;
        $this->fragment = $fragment;
        return $this;
    }
    /**
     * 
     *
     * @return SearchResultTextMatchesItemMatchesItem[]
     */
    public function getMatches() : array
    {
        return $this->matches;
    }
    /**
     * 
     *
     * @param SearchResultTextMatchesItemMatchesItem[] $matches
     *
     * @return self
     */
    public function setMatches(array $matches) : self
    {
        $this->initialized['matches'] = true;
        $this->matches = $matches;
        return $this;
    }
}