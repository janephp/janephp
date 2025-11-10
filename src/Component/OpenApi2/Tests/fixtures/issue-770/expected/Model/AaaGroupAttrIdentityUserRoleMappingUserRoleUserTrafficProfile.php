<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile
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
     * User traffic profile UUID
     *
     * @var string
     */
    protected $id;
    /**
     * User traffic profile name
     *
     * @var string
     */
    protected $name;
    /**
     * User traffic profile UUID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User traffic profile UUID
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * User traffic profile name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User traffic profile name
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
}