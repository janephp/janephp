<?php

namespace Github\Model;

class ReposOwnerRepoActionsArtifactsGetResponse200
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
        $this->artifacts = $artifacts;
        return $this;
    }
}