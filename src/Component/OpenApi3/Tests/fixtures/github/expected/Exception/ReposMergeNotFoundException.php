<?php

namespace Github\Exception;

class ReposMergeNotFoundException extends NotFoundException
{
    private $reposOwnerRepoMergesPostResponse404;
    public function __construct(\Github\Model\ReposOwnerRepoMergesPostResponse404 $reposOwnerRepoMergesPostResponse404)
    {
        parent::__construct('response', 404);
        $this->reposOwnerRepoMergesPostResponse404 = $reposOwnerRepoMergesPostResponse404;
    }
    public function getReposOwnerRepoMergesPostResponse404()
    {
        return $this->reposOwnerRepoMergesPostResponse404;
    }
}