<?php

namespace Jane\Generated\DigitalOcean\Model;

class AddonsResource extends \ArrayObject
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
     * The unique identifier for the addon resource.
     *
     * @var string
     */
    protected $uuid;
    /**
     * The name of the addon resource.
     *
     * @var string
     */
    protected $name;
    /**
     * The state the resource is currently in.
     *
     * @var string
     */
    protected $state;
    /**
     * The name of the application associated with the resource.
     *
     * @var string
     */
    protected $appName;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    protected $appSlug;
    /**
     * The name of the plan associated with the resource.
     *
     * @var string
     */
    protected $planName;
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @var string
     */
    protected $planSlug;
    /**
     * The price of the plan per month in US dollars.
     *
     * @var int
     */
    protected $planPricePerMonth;
    /**
     * Indicates if the resource has configuration values set by the vendor.
     *
     * @var bool
     */
    protected $hasConfig;
    /**
     * Metadata associated with the resource, set by the user.
     *
     * @var list<AddonsResourceMetadata>
     */
    protected $metadata;
    /**
     * The Single Sign-On URL for the resource, if applicable.
     *
     * @var string
     */
    protected $ssoUrl;
    /**
     * A message related to the resource, if applicable.
     *
     * @var string
     */
    protected $message;
    /**
     * The unique identifier for the addon resource.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * The unique identifier for the addon resource.
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * The name of the addon resource.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the addon resource.
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
     * The state the resource is currently in.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The state the resource is currently in.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The name of the application associated with the resource.
     *
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }
    /**
     * The name of the application associated with the resource.
     *
     * @param string $appName
     *
     * @return self
     */
    public function setAppName(string $appName): self
    {
        $this->initialized['appName'] = true;
        $this->appName = $appName;
        return $this;
    }
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @return string
     */
    public function getAppSlug(): string
    {
        return $this->appSlug;
    }
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @param string $appSlug
     *
     * @return self
     */
    public function setAppSlug(string $appSlug): self
    {
        $this->initialized['appSlug'] = true;
        $this->appSlug = $appSlug;
        return $this;
    }
    /**
     * The name of the plan associated with the resource.
     *
     * @return string
     */
    public function getPlanName(): string
    {
        return $this->planName;
    }
    /**
     * The name of the plan associated with the resource.
     *
     * @param string $planName
     *
     * @return self
     */
    public function setPlanName(string $planName): self
    {
        $this->initialized['planName'] = true;
        $this->planName = $planName;
        return $this;
    }
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @return string
     */
    public function getPlanSlug(): string
    {
        return $this->planSlug;
    }
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @param string $planSlug
     *
     * @return self
     */
    public function setPlanSlug(string $planSlug): self
    {
        $this->initialized['planSlug'] = true;
        $this->planSlug = $planSlug;
        return $this;
    }
    /**
     * The price of the plan per month in US dollars.
     *
     * @return int
     */
    public function getPlanPricePerMonth(): int
    {
        return $this->planPricePerMonth;
    }
    /**
     * The price of the plan per month in US dollars.
     *
     * @param int $planPricePerMonth
     *
     * @return self
     */
    public function setPlanPricePerMonth(int $planPricePerMonth): self
    {
        $this->initialized['planPricePerMonth'] = true;
        $this->planPricePerMonth = $planPricePerMonth;
        return $this;
    }
    /**
     * Indicates if the resource has configuration values set by the vendor.
     *
     * @return bool
     */
    public function getHasConfig(): bool
    {
        return $this->hasConfig;
    }
    /**
     * Indicates if the resource has configuration values set by the vendor.
     *
     * @param bool $hasConfig
     *
     * @return self
     */
    public function setHasConfig(bool $hasConfig): self
    {
        $this->initialized['hasConfig'] = true;
        $this->hasConfig = $hasConfig;
        return $this;
    }
    /**
     * Metadata associated with the resource, set by the user.
     *
     * @return list<AddonsResourceMetadata>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }
    /**
     * Metadata associated with the resource, set by the user.
     *
     * @param list<AddonsResourceMetadata> $metadata
     *
     * @return self
     */
    public function setMetadata(array $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * The Single Sign-On URL for the resource, if applicable.
     *
     * @return string
     */
    public function getSsoUrl(): string
    {
        return $this->ssoUrl;
    }
    /**
     * The Single Sign-On URL for the resource, if applicable.
     *
     * @param string $ssoUrl
     *
     * @return self
     */
    public function setSsoUrl(string $ssoUrl): self
    {
        $this->initialized['ssoUrl'] = true;
        $this->ssoUrl = $ssoUrl;
        return $this;
    }
    /**
     * A message related to the resource, if applicable.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * A message related to the resource, if applicable.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}