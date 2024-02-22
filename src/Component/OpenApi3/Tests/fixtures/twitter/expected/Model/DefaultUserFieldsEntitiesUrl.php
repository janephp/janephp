<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DefaultUserFieldsEntitiesUrl extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<UrlEntity>
     */
    protected $urls;
    /**
     * 
     *
     * @return list<UrlEntity>
     */
    public function getUrls() : array
    {
        return $this->urls;
    }
    /**
     * 
     *
     * @param list<UrlEntity> $urls
     *
     * @return self
     */
    public function setUrls(array $urls) : self
    {
        $this->initialized['urls'] = true;
        $this->urls = $urls;
        return $this;
    }
}