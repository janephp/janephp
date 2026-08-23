<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class MyApiEndpointIdGetResponse200
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $someField;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getSomeField(): string
    {
        return $this->someField;
    }
    /**
     * @param string $someField
     *
     * @return self
     */
    public function setSomeField(string $someField): self
    {
        $this->initialized['someField'] = true;
        $this->someField = $someField;
        return $this;
    }
}