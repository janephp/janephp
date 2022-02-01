<?php

namespace Github\Exception;

class PullsMergeConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409
     */
    private $reposOwnerRepoPullsPullNumberMergePutResponse409;
    public function __construct(\Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409 $reposOwnerRepoPullsPullNumberMergePutResponse409)
    {
        parent::__construct('Response if sha was provided and pull request head did not match', 409);
        $this->reposOwnerRepoPullsPullNumberMergePutResponse409 = $reposOwnerRepoPullsPullNumberMergePutResponse409;
    }
    public function getReposOwnerRepoPullsPullNumberMergePutResponse409() : \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409
    {
        return $this->reposOwnerRepoPullsPullNumberMergePutResponse409;
    }
}