<?php

namespace Github\Model;

class ReposOwnerRepoImportLfsPatchBody extends \ArrayObject
{
    /**
     * Can be one of `opt_in` (large files will be stored using Git LFS) or `opt_out` (large files will be removed during the import).
     *
     * @var string
     */
    protected $useLfs;
    /**
     * Can be one of `opt_in` (large files will be stored using Git LFS) or `opt_out` (large files will be removed during the import).
     *
     * @return string
     */
    public function getUseLfs() : string
    {
        return $this->useLfs;
    }
    /**
     * Can be one of `opt_in` (large files will be stored using Git LFS) or `opt_out` (large files will be removed during the import).
     *
     * @param string $useLfs
     *
     * @return self
     */
    public function setUseLfs(string $useLfs) : self
    {
        $this->useLfs = $useLfs;
        return $this;
    }
}