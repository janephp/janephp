<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaModifyAuthenticationServer
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
     * @var string
     */
    protected $description;
    /**
     * @var CommonRadiusServer
     */
    protected $primary;
    /**
     * @var CommonRadiusServer
     */
    protected $secondary;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @var CommonRadiusServer
     */
    protected $standbyPrimary;
    /**
     * @var bool
     */
    protected $standbyServerEnabled;
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
    /**
     * @return CommonRadiusServer
     */
    public function getPrimary(): CommonRadiusServer
    {
        return $this->primary;
    }
    /**
     * @param CommonRadiusServer $primary
     *
     * @return self
     */
    public function setPrimary(CommonRadiusServer $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * @return CommonRadiusServer
     */
    public function getSecondary(): CommonRadiusServer
    {
        return $this->secondary;
    }
    /**
     * @param CommonRadiusServer $secondary
     *
     * @return self
     */
    public function setSecondary(CommonRadiusServer $secondary): self
    {
        $this->initialized['secondary'] = true;
        $this->secondary = $secondary;
        return $this;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @return list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    public function getMappings(): array
    {
        return $this->mappings;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @param list<AaaModifyGroupAttrIdentityUserRoleMapping> $mappings
     *
     * @return self
     */
    public function setMappings(array $mappings): self
    {
        $this->initialized['mappings'] = true;
        $this->mappings = $mappings;
        return $this;
    }
    /**
     * @return CommonRadiusServer
     */
    public function getStandbyPrimary(): CommonRadiusServer
    {
        return $this->standbyPrimary;
    }
    /**
     * @param CommonRadiusServer $standbyPrimary
     *
     * @return self
     */
    public function setStandbyPrimary(CommonRadiusServer $standbyPrimary): self
    {
        $this->initialized['standbyPrimary'] = true;
        $this->standbyPrimary = $standbyPrimary;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStandbyServerEnabled(): bool
    {
        return $this->standbyServerEnabled;
    }
    /**
     * @param bool $standbyServerEnabled
     *
     * @return self
     */
    public function setStandbyServerEnabled(bool $standbyServerEnabled): self
    {
        $this->initialized['standbyServerEnabled'] = true;
        $this->standbyServerEnabled = $standbyServerEnabled;
        return $this;
    }
}