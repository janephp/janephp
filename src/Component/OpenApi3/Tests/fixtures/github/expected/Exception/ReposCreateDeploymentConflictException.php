<?php

namespace Github\Exception;

class ReposCreateDeploymentConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoDeploymentsPostResponse409
     */
    private $reposOwnerRepoDeploymentsPostResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoDeploymentsPostResponse409 $reposOwnerRepoDeploymentsPostResponse409)
    {
        parent::__construct('response');
        $this->reposOwnerRepoDeploymentsPostResponse409 = $reposOwnerRepoDeploymentsPostResponse409;
    }
    public function getReposOwnerRepoDeploymentsPostResponse409() : \Github\Model\ReposOwnerRepoDeploymentsPostResponse409
    {
        return $this->reposOwnerRepoDeploymentsPostResponse409;
    }
}