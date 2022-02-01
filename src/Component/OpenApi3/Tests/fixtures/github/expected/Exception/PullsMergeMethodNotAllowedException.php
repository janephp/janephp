<?php

namespace Github\Exception;

class PullsMergeMethodNotAllowedException extends MethodNotAllowedException
{
    /**
     * @var \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405
     */
    private $reposOwnerRepoPullsPullNumberMergePutResponse405;
    public function __construct(\Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405 $reposOwnerRepoPullsPullNumberMergePutResponse405)
    {
        parent::__construct('Response if merge cannot be performed', 405);
        $this->reposOwnerRepoPullsPullNumberMergePutResponse405 = $reposOwnerRepoPullsPullNumberMergePutResponse405;
    }
    public function getReposOwnerRepoPullsPullNumberMergePutResponse405() : \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405
    {
        return $this->reposOwnerRepoPullsPullNumberMergePutResponse405;
    }
}