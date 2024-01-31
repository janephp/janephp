<?php

namespace PicturePark\API\Model;

class BlacklistItem
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
     * Friendly name of item.
     *
     * @var string
     */
    protected $name;
    /**
     * Pattern a file name must match to be excluded from the transfer.
     *
     * @var string
     */
    protected $match;
    /**
     * Friendly name of item.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Friendly name of item.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Pattern a file name must match to be excluded from the transfer.
     *
     * @return string
     */
    public function getMatch() : string
    {
        return $this->match;
    }
    /**
     * Pattern a file name must match to be excluded from the transfer.
     *
     * @param string $match
     *
     * @return self
     */
    public function setMatch(string $match) : self
    {
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
}