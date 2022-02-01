<?php

namespace Github\Exception;

class ReposMergeConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoMergesPostResponse409
     */
    private $reposOwnerRepoMergesPostResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoMergesPostResponse409 $reposOwnerRepoMergesPostResponse409)
    {
        parent::__construct('Merge conflict response', 409);
        $this->reposOwnerRepoMergesPostResponse409 = $reposOwnerRepoMergesPostResponse409;
    }
    public function getReposOwnerRepoMergesPostResponse409() : \Github\Model\ReposOwnerRepoMergesPostResponse409
    {
        return $this->reposOwnerRepoMergesPostResponse409;
    }
}