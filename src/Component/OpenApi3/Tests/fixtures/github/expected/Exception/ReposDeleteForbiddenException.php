<?php

namespace Github\Exception;

class ReposDeleteForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\ReposOwnerRepoDeleteResponse403
     */
    private $reposOwnerRepoDeleteResponse403;
    public function __construct(\Github\Model\ReposOwnerRepoDeleteResponse403 $reposOwnerRepoDeleteResponse403)
    {
        parent::__construct('If an organization owner has configured the organization to prevent members from deleting organization-owned repositories, a member will get this response:');
        $this->reposOwnerRepoDeleteResponse403 = $reposOwnerRepoDeleteResponse403;
    }
    public function getReposOwnerRepoDeleteResponse403() : \Github\Model\ReposOwnerRepoDeleteResponse403
    {
        return $this->reposOwnerRepoDeleteResponse403;
    }
}