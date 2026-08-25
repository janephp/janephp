<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class OrgsOrgActionsSecretsGetResponse200 implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalCount;
    /**
     * @var list<OrganizationActionsSecret>
     */
    protected $secrets;
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * @return list<OrganizationActionsSecret>
     */
    public function getSecrets(): array
    {
        return $this->secrets;
    }
    /**
     * @param list<OrganizationActionsSecret> $secrets
     *
     * @return self
     */
    public function setSecrets(array $secrets): self
    {
        $this->initialized['secrets'] = true;
        $this->secrets = $secrets;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalCount' => ['total_count', 'getTotalCount', 'setTotalCount'], 'secrets' => ['secrets', 'getSecrets', 'setSecrets']];
    }
}