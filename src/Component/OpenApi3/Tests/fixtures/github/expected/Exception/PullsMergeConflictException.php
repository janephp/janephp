<?php

namespace Github\Exception;

class PullsMergeConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409
     */
    private $reposOwnerRepoPullsPullNumberMergePutResponse409;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409 $reposOwnerRepoPullsPullNumberMergePutResponse409, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if sha was provided and pull request head did not match');
        $this->reposOwnerRepoPullsPullNumberMergePutResponse409 = $reposOwnerRepoPullsPullNumberMergePutResponse409;
        $this->response = $response;
    }
    public function getReposOwnerRepoPullsPullNumberMergePutResponse409() : \Github\Model\ReposOwnerRepoPullsPullNumberMergePutResponse409
    {
        return $this->reposOwnerRepoPullsPullNumberMergePutResponse409;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}