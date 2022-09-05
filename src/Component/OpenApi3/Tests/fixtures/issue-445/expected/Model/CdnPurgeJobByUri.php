<?php

namespace PicturePark\API\Model;

class CdnPurgeJobByUri extends CdnPurgeJobBase
{
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
        $this->uri = $uri;
        return $this;
    }
}