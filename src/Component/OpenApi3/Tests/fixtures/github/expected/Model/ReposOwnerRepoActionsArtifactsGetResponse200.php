<?php

namespace Github\Model;

class ReposOwnerRepoActionsArtifactsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @var Artifact[]
     */
    protected $artifacts;
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
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * 
     *
     * @return Artifact[]
     */
    public function getArtifacts() : array
    {
        return $this->artifacts;
    }
    /**
     * 
     *
     * @param Artifact[] $artifacts
     *
     * @return self
     */
    public function setArtifacts(array $artifacts) : self
    {
        $this->initialized['artifacts'] = true;
        $this->artifacts = $artifacts;
        return $this;
    }
}