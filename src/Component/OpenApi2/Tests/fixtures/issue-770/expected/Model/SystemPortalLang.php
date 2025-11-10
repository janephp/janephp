<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemPortalLang
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
     * Display name
     *
     * @var string
     */
    protected $display;
    /**
     * value of language used on create Hotspot 2.0 Identity provider (Language in OSU Service Description) profile
     *
     * @var string
     */
    protected $value;
    /**
     * Display name
     *
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }
    /**
     * Display name
     *
     * @param string $display
     *
     * @return self
     */
    public function setDisplay(string $display): self
    {
        $this->initialized['display'] = true;
        $this->display = $display;
        return $this;
    }
    /**
     * value of language used on create Hotspot 2.0 Identity provider (Language in OSU Service Description) profile
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * value of language used on create Hotspot 2.0 Identity provider (Language in OSU Service Description) profile
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}