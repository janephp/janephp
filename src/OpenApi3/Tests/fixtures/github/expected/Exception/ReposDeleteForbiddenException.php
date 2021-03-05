<?php

namespace Github\Exception;

class ReposDeleteForbiddenException extends ForbiddenException
{
    private $reposOwnerRepoDeleteResponse403;
    public function __construct(\Github\Model\ReposOwnerRepoDeleteResponse403 $reposOwnerRepoDeleteResponse403)
    {
        parent::__construct('If an organization owner has configured the organization to prevent members from deleting organization-owned repositories, a member will get this response:', 403);
        $this->reposOwnerRepoDeleteResponse403 = $reposOwnerRepoDeleteResponse403;
    }
    public function getReposOwnerRepoDeleteResponse403()
    {
        return $this->reposOwnerRepoDeleteResponse403;
    }
}