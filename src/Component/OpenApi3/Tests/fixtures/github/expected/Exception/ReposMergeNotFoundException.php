<?php

namespace Github\Exception;

class ReposMergeNotFoundException extends NotFoundException
{
    /**
     * @var \Github\Model\ReposOwnerRepoMergesPostResponse404
     */
    private $reposOwnerRepoMergesPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoMergesPostResponse404 $reposOwnerRepoMergesPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('response');
        $this->reposOwnerRepoMergesPostResponse404 = $reposOwnerRepoMergesPostResponse404;
        $this->response = $response;
    }
    public function getReposOwnerRepoMergesPostResponse404() : \Github\Model\ReposOwnerRepoMergesPostResponse404
    {
        return $this->reposOwnerRepoMergesPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}