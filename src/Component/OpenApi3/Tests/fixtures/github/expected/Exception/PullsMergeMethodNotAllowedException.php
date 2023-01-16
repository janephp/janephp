<?php

namespace Github\Exception;

class PullsMergeMethodNotAllowedException extends MethodNotAllowedException
{
    /**
     * @var \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405
     */
    private $reposOwnerRepoPullsPullNumberMergePutResponse405;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405 $reposOwnerRepoPullsPullNumberMergePutResponse405, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if merge cannot be performed');
        $this->reposOwnerRepoPullsPullNumberMergePutResponse405 = $reposOwnerRepoPullsPullNumberMergePutResponse405;
        $this->response = $response;
    }
    public function getReposOwnerRepoPullsPullNumberMergePutResponse405() : \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse405
    {
        return $this->reposOwnerRepoPullsPullNumberMergePutResponse405;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}