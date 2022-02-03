<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Id
{
    /**
     * 
     *
     * @var string
     */
    protected $uuid;
    /**
     * 
     *
     * @return string
     */
    public function getUuid() : string
    {
        return $this->uuid;
    }
    /**
     * 
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
}