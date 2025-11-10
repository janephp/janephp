<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapIndooMapAuditId
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
     * the identifier of the indoor map
     *
     * @var string
     */
    protected $id;
    /**
     * the name of the indoor map
     *
     * @var string
     */
    protected $name;
    /**
     * the identifier of the indoor map
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * the identifier of the indoor map
     *
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
     * the name of the indoor map
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * the name of the indoor map
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}