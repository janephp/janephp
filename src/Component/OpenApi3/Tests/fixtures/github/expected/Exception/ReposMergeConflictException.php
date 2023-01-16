<?php

namespace Github\Exception;

class ReposMergeConflictException extends ConflictException
{
    /**
     * @var \Github\Model\ReposOwnerRepoMergesPostResponse409
     */
    private $reposOwnerRepoMergesPostResponse409;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\ReposOwnerRepoMergesPostResponse409 $reposOwnerRepoMergesPostResponse409, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Merge conflict response');
        $this->reposOwnerRepoMergesPostResponse409 = $reposOwnerRepoMergesPostResponse409;
        $this->response = $response;
    }
    public function getReposOwnerRepoMergesPostResponse409() : \Github\Model\ReposOwnerRepoMergesPostResponse409
    {
        return $this->reposOwnerRepoMergesPostResponse409;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}