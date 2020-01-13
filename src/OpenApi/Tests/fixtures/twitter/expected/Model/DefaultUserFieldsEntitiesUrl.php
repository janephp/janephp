<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DefaultUserFieldsEntitiesUrl
{
    /**
     * 
     *
     * @var UrlEntity[]
     */
    protected $urls;
    /**
     * 
     *
     * @return UrlEntity[]
     */
    public function getUrls() : array
    {
        return $this->urls;
    }
    /**
     * 
     *
     * @param UrlEntity[] $urls
     *
     * @return self
     */
    public function setUrls(array $urls) : self
    {
        $this->urls = $urls;
        return $this;
    }
}