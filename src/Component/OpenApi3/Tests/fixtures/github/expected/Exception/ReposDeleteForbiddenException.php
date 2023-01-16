<?php

namespace Github\Exception;

class ReposDeleteForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ReposOwnerRepoDeleteResponse403
     */
    private $reposOwnerRepoDeleteResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoDeleteResponse403 $reposOwnerRepoDeleteResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('If an organization owner has configured the organization to prevent members from deleting organization-owned repositories, a member will get this response:');
        $this->reposOwnerRepoDeleteResponse403 = $reposOwnerRepoDeleteResponse403;
        $this->response = $response;
    }
    public function getReposOwnerRepoDeleteResponse403() : \Github\Model\ReposOwnerRepoDeleteResponse403
    {
        return $this->reposOwnerRepoDeleteResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}