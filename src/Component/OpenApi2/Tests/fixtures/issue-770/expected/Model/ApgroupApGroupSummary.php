<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApgroupApGroupSummary
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
     * Identifier of the AP group
     *
     * @var string
     */
    protected $id;
    /**
     * Description of the AP group
     *
     * @var string
     */
    protected $name;
    /**
     * Identifier of the AP group
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the AP group
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
     * Description of the AP group
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Description of the AP group
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