<?php

namespace PicturePark\API\Model;

class CdnPurgeJobByUri extends CdnPurgeJobBase
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
     * @var string|null
     */
    protected $uri;
    /**
     * 
     *
     * @return string|null
     */
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * 
     *
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri) : self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}