<?php

namespace Github\Exception;

class ReposCreateDeploymentConflictException extends \RuntimeException implements ClientException
{
    private $reposOwnerRepoDeploymentsPostResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoDeploymentsPostResponse409 $reposOwnerRepoDeploymentsPostResponse409)
    {
        parent::__construct('response', 409);
        $this->reposOwnerRepoDeploymentsPostResponse409 = $reposOwnerRepoDeploymentsPostResponse409;
    }
    public function getReposOwnerRepoDeploymentsPostResponse409()
    {
        return $this->reposOwnerRepoDeploymentsPostResponse409;
    }
}