<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2VpcsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @var string
     */
    protected $description;
    /**
     * The slug identifier for the region where the VPC will be created.
     *
     * @var string
     */
    protected $region;
    /**
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @var string
     */
    protected $ipRange;
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC. Must be unique and may only contain alphanumeric characters, dashes, and periods.
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
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A free-form text field for describing the VPC's purpose. It may be a maximum of 255 characters.
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
     * The slug identifier for the region where the VPC will be created.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the VPC will be created.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @return string
     */
    public function getIpRange(): string
    {
        return $this->ipRange;
    }
    /**
     * The range of IP addresses in the VPC in CIDR notation. Network ranges cannot overlap with other networks in the same account and must be in range of private addresses as defined in RFC1918. It may not be smaller than `/28` nor larger than `/16`. If no IP range is specified, a `/20` network range is generated that won't conflict with other VPC networks in your account.
     *
     * @param string $ipRange
     *
     * @return self
     */
    public function setIpRange(string $ipRange): self
    {
        $this->initialized['ipRange'] = true;
        $this->ipRange = $ipRange;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'description' => ['description', 'getDescription', 'setDescription'], 'region' => ['region', 'getRegion', 'setRegion'], 'ipRange' => ['ip_range', 'getIpRange', 'setIpRange']];
    }
}