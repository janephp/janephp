<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsGetExecResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A websocket URL that allows sending/receiving console input and receiving console output.
     *
     * @var string
     */
    protected $url;
    /**
     * A websocket URL that allows sending/receiving console input and receiving console output.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * A websocket URL that allows sending/receiving console input and receiving console output.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}