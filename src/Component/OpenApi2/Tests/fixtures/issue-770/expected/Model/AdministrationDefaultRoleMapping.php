<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationDefaultRoleMapping
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
     * DefaultAdmin of DefaultRoleMapping object
     *
     * @var string
     */
    protected $defaultAdmin;
    /**
     * DefaultUserGroup of DefaultRoleMapping object
     *
     * @var string
     */
    protected $defaultUserGroup;
    /**
     * DefaultAdmin of DefaultRoleMapping object
     *
     * @return string
     */
    public function getDefaultAdmin(): string
    {
        return $this->defaultAdmin;
    }
    /**
     * DefaultAdmin of DefaultRoleMapping object
     *
     * @param string $defaultAdmin
     *
     * @return self
     */
    public function setDefaultAdmin(string $defaultAdmin): self
    {
        $this->initialized['defaultAdmin'] = true;
        $this->defaultAdmin = $defaultAdmin;
        return $this;
    }
    /**
     * DefaultUserGroup of DefaultRoleMapping object
     *
     * @return string
     */
    public function getDefaultUserGroup(): string
    {
        return $this->defaultUserGroup;
    }
    /**
     * DefaultUserGroup of DefaultRoleMapping object
     *
     * @param string $defaultUserGroup
     *
     * @return self
     */
    public function setDefaultUserGroup(string $defaultUserGroup): self
    {
        $this->initialized['defaultUserGroup'] = true;
        $this->defaultUserGroup = $defaultUserGroup;
        return $this;
    }
}