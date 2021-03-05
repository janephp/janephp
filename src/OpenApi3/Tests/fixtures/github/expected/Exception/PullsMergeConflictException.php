<?php

namespace Github\Exception;

class PullsMergeConflictException extends ConflictException
{
    private $reposOwnerRepoPullsPullNumberMergePutResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409 $reposOwnerRepoPullsPullNumberMergePutResponse409)
    {
        parent::__construct('Response if sha was provided and pull request head did not match', 409);
        $this->reposOwnerRepoPullsPullNumberMergePutResponse409 = $reposOwnerRepoPullsPullNumberMergePutResponse409;
    }
    public function getReposOwnerRepoPullsPullNumberMergePutResponse409()
    {
        return $this->reposOwnerRepoPullsPullNumberMergePutResponse409;
    }
}