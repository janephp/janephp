<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAdvancedUserRoleAccess
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
    protected $allowedRoleOption = 'ALL';
    /**
     * @var list<string>
     */
    protected $allowedSpecificRoles;
    /**
     * @return string
     */
    public function getAllowedRoleOption(): string
    {
        return $this->allowedRoleOption;
    }
    /**
     * @param string $allowedRoleOption
     *
     * @return self
     */
    public function setAllowedRoleOption(string $allowedRoleOption): self
    {
        $this->initialized['allowedRoleOption'] = true;
        $this->allowedRoleOption = $allowedRoleOption;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getAllowedSpecificRoles(): array
    {
        return $this->allowedSpecificRoles;
    }
    /**
     * @param list<string> $allowedSpecificRoles
     *
     * @return self
     */
    public function setAllowedSpecificRoles(array $allowedSpecificRoles): self
    {
        $this->initialized['allowedSpecificRoles'] = true;
        $this->allowedSpecificRoles = $allowedSpecificRoles;
        return $this;
    }
}