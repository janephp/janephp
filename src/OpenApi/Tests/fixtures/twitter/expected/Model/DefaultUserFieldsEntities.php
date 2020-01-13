<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DefaultUserFieldsEntities
{
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
        $this->description = $description;
        return $this;
    }
}