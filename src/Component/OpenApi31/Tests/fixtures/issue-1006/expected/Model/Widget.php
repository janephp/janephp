<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Model;

class Widget
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
    protected $name;
    /**
     * @var WidgetSettings
     */
    protected $settings;
    /**
     * @var WidgetSettings
     */
    protected $plain;
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
     * @return WidgetSettings
     */
    public function getSettings(): WidgetSettings
    {
        return $this->settings;
    }
    /**
     * @param WidgetSettings $settings
     *
     * @return self
     */
    public function setSettings(WidgetSettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * @return WidgetSettings
     */
    public function getPlain(): WidgetSettings
    {
        return $this->plain;
    }
    /**
     * @param WidgetSettings $plain
     *
     * @return self
     */
    public function setPlain(WidgetSettings $plain): self
    {
        $this->initialized['plain'] = true;
        $this->plain = $plain;
        return $this;
    }
}