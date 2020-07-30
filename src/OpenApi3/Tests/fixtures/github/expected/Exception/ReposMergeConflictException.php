<?php

namespace Github\Exception;

class ReposMergeConflictException extends \RuntimeException implements ClientException
{
    private $reposOwnerRepoMergesPostResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoMergesPostResponse409 $reposOwnerRepoMergesPostResponse409)
    {
        parent::__construct('Merge conflict response', 409);
        $this->reposOwnerRepoMergesPostResponse409 = $reposOwnerRepoMergesPostResponse409;
    }
    public function getReposOwnerRepoMergesPostResponse409()
    {
        return $this->reposOwnerRepoMergesPostResponse409;
    }
}