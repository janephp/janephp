<?php

namespace Github\Exception;

class ReposCreateDeploymentConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoDeploymentsPostResponse409
     */
    private $reposOwnerRepoDeploymentsPostResponse409;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoDeploymentsPostResponse409 $reposOwnerRepoDeploymentsPostResponse409, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('response');
        $this->reposOwnerRepoDeploymentsPostResponse409 = $reposOwnerRepoDeploymentsPostResponse409;
        $this->response = $response;
    }
    public function getReposOwnerRepoDeploymentsPostResponse409() : \Github\Model\ReposOwnerRepoDeploymentsPostResponse409
    {
        return $this->reposOwnerRepoDeploymentsPostResponse409;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}