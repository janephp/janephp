<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TestIdGetResponse200
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
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
}