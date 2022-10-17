<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Something extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var \Symfony\Component\Uid\UuidV4
     */
    protected $uuid;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return \Symfony\Component\Uid\UuidV4
     */
    public function getUuid() : \Symfony\Component\Uid\UuidV4
    {
        return $this->uuid;
    }
    /**
     * 
     *
     * @param \Symfony\Component\Uid\UuidV4 $uuid
     *
     * @return self
     */
    public function setUuid(\Symfony\Component\Uid\UuidV4 $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
}