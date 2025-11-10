<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneSoftGreRef
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
    protected $name;
    /**
     * @var bool
     */
    protected $aaaAffinityEnabled;
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
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
    /**
     * @return bool
     */
    public function getAaaAffinityEnabled(): bool
    {
        return $this->aaaAffinityEnabled;
    }
    /**
     * @param bool $aaaAffinityEnabled
     *
     * @return self
     */
    public function setAaaAffinityEnabled(bool $aaaAffinityEnabled): self
    {
        $this->initialized['aaaAffinityEnabled'] = true;
        $this->aaaAffinityEnabled = $aaaAffinityEnabled;
        return $this;
    }
}