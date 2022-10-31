<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DefaultUserFieldsEntities extends \ArrayObject
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
     * Expanded details for the URL specified in the user's profile, with start and end indices.
     *
     * @var DefaultUserFieldsEntitiesUrl
     */
    protected $url;
    /**
     * 
     *
     * @var FullTextEntities
     */
    protected $description;
    /**
     * Expanded details for the URL specified in the user's profile, with start and end indices.
     *
     * @return DefaultUserFieldsEntitiesUrl
     */
    public function getUrl() : DefaultUserFieldsEntitiesUrl
    {
        return $this->url;
    }
    /**
     * Expanded details for the URL specified in the user's profile, with start and end indices.
     *
     * @param DefaultUserFieldsEntitiesUrl $url
     *
     * @return self
     */
    public function setUrl(DefaultUserFieldsEntitiesUrl $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return FullTextEntities
     */
    public function getDescription() : FullTextEntities
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param FullTextEntities $description
     *
     * @return self
     */
    public function setDescription(FullTextEntities $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}