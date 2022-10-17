<?php

namespace Github\Model;

class OrgsOrgActionsSecretsGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var OrganizationActionsSecret[]
     */
    protected $secrets;
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount() : int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount) : self
    {
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return OrganizationActionsSecret[]
     */
    public function getSecrets() : array
    {
        return $this->secrets;
    }
    /**
     * 
     *
     * @param OrganizationActionsSecret[] $secrets
     *
     * @return self
     */
    public function setSecrets(array $secrets) : self
    {
        $this->secrets = $secrets;
        return $this;
    }
}