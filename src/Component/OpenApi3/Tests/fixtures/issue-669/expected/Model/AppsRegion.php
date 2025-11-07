<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsRegion extends \ArrayObject
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
    protected $continent;
    /**
     * @var list<string>
     */
    protected $dataCenters;
    /**
     * Whether or not the region is presented as the default.
     *
     * @var bool
     */
    protected $default;
    /**
     * @var bool
     */
    protected $disabled;
    /**
     * @var string
     */
    protected $flag;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }
    /**
     * @param string $continent
     *
     * @return self
     */
    public function setContinent(string $continent): self
    {
        $this->initialized['continent'] = true;
        $this->continent = $continent;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getDataCenters(): array
    {
        return $this->dataCenters;
    }
    /**
     * @param list<string> $dataCenters
     *
     * @return self
     */
    public function setDataCenters(array $dataCenters): self
    {
        $this->initialized['dataCenters'] = true;
        $this->dataCenters = $dataCenters;
        return $this;
    }
    /**
     * Whether or not the region is presented as the default.
     *
     * @return bool
     */
    public function getDefault(): bool
    {
        return $this->default;
    }
    /**
     * Whether or not the region is presented as the default.
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }
    /**
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }
    /**
     * @param string $flag
     *
     * @return self
     */
    public function setFlag(string $flag): self
    {
        $this->initialized['flag'] = true;
        $this->flag = $flag;
        return $this;
    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }
    /**
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;
        return $this;
    }
}