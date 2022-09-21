<?php

namespace ApiPlatform\Demo\Model;

class TopBooksGetHaljsonResponse200LinksFirst
{
    /**
     * 
     *
     * @var string
     */
    protected $href;
    /**
     * 
     *
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }
    /**
     * 
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href) : self
    {
        $this->href = $href;
        return $this;
    }
}