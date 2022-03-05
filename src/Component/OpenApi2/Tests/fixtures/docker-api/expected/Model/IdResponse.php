<?php

namespace Docker\Api\Model;

class IdResponse
{
    /**
     * The id of the newly created object.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of the newly created object.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The id of the newly created object.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}