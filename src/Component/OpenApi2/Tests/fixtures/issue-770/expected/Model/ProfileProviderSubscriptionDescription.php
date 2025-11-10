<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderSubscriptionDescription
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
    protected $language;
    /**
     * Name of the friendly name
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the friendly name
     *
     * @var string
     */
    protected $description;
    /**
     * The binary data of icon, maximum size 65536
     *
     * @var string
     */
    protected $icon;
    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Name of the friendly name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the friendly name
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
    /**
     * Description of the friendly name
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the friendly name
     *
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
    /**
     * The binary data of icon, maximum size 65536
     *
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }
    /**
     * The binary data of icon, maximum size 65536
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
}