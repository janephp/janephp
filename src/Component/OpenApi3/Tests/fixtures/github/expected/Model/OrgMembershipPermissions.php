<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class OrgMembershipPermissions implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $canCreateRepository;
    /**
     * @return bool
     */
    public function getCanCreateRepository(): bool
    {
        return $this->canCreateRepository;
    }
    /**
     * @param bool $canCreateRepository
     *
     * @return self
     */
    public function setCanCreateRepository(bool $canCreateRepository): self
    {
        $this->initialized['canCreateRepository'] = true;
        $this->canCreateRepository = $canCreateRepository;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['canCreateRepository' => ['can_create_repository', 'getCanCreateRepository', 'setCanCreateRepository']];
    }
}