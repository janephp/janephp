<?php

namespace Github\Model;

class ReposOwnerRepoCheckSuitesPostBody extends \ArrayObject
{
    /**
     * The sha of the head commit.
     *
     * @var string
     */
    protected $headSha;
    /**
     * The sha of the head commit.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The sha of the head commit.
     *
     * @param string $headSha
     *
     * @return self
     */
    public function setHeadSha(string $headSha) : self
    {
        $this->headSha = $headSha;
        return $this;
    }
}