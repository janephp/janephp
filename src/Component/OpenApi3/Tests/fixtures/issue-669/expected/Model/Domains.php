<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Domains implements AdditionalPropertiesInterface
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
     * FQDN to associate with a Global load balancer.
     *
     * @var string
     */
    protected $name;
    /**
     * A boolean value indicating if the domain is already managed by DigitalOcean. If true, all A and AAAA records required to enable Global load balancers will be automatically added.
     *
     * @var bool
     */
    protected $isManaged;
    /**
     * The ID of the TLS certificate used for SSL termination.
     *
     * @var string
     */
    protected $certificateId;
    /**
     * FQDN to associate with a Global load balancer.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * FQDN to associate with a Global load balancer.
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
     * A boolean value indicating if the domain is already managed by DigitalOcean. If true, all A and AAAA records required to enable Global load balancers will be automatically added.
     *
     * @return bool
     */
    public function getIsManaged(): bool
    {
        return $this->isManaged;
    }
    /**
     * A boolean value indicating if the domain is already managed by DigitalOcean. If true, all A and AAAA records required to enable Global load balancers will be automatically added.
     *
     * @param bool $isManaged
     *
     * @return self
     */
    public function setIsManaged(bool $isManaged): self
    {
        $this->initialized['isManaged'] = true;
        $this->isManaged = $isManaged;
        return $this;
    }
    /**
     * The ID of the TLS certificate used for SSL termination.
     *
     * @return string
     */
    public function getCertificateId(): string
    {
        return $this->certificateId;
    }
    /**
     * The ID of the TLS certificate used for SSL termination.
     *
     * @param string $certificateId
     *
     * @return self
     */
    public function setCertificateId(string $certificateId): self
    {
        $this->initialized['certificateId'] = true;
        $this->certificateId = $certificateId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'isManaged' => ['is_managed', 'getIsManaged', 'setIsManaged'], 'certificateId' => ['certificate_id', 'getCertificateId', 'setCertificateId']];
    }
}