<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingProfileSummary
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
     * DNS Spoofing Profile's id
     *
     * @var string
     */
    protected $id;
    /**
     * DNS Spoofing Profile's name
     *
     * @var string
     */
    protected $name;
    /**
     * DNS Spoofing Profile's id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * DNS Spoofing Profile's id
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
     * DNS Spoofing Profile's name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * DNS Spoofing Profile's name
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