<?php

namespace PicturePark\API\Model;

class CustomerApp
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
     * @var string|null
     */
    protected $appId;
    /**
     * @var array<string, string>|null
     */
    protected $name;
    /**
     * @var array<string, string>|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $icon;
    /**
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * @param string|null $appId
     *
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * @return array<string, string>|null
     */
    public function getName(): ?iterable
    {
        return $this->name;
    }
    /**
     * @param array<string, string>|null $name
     *
     * @return self
     */
    public function setName(?iterable $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return array<string, string>|null
     */
    public function getDescription(): ?iterable
    {
        return $this->description;
    }
    /**
     * @param array<string, string>|null $description
     *
     * @return self
     */
    public function setDescription(?iterable $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    /**
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
}