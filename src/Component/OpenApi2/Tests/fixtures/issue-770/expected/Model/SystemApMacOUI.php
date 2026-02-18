<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApMacOUI
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
    protected $oui;
    /**
     * @var string
     */
    protected $description;
    /**
     * @return string
     */
    public function getOui(): string
    {
        return $this->oui;
    }
    /**
     * @param string $oui
     *
     * @return self
     */
    public function setOui(string $oui): self
    {
        $this->initialized['oui'] = true;
        $this->oui = $oui;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}