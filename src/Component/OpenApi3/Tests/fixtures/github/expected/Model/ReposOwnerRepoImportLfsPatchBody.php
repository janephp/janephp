<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoImportLfsPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getUseLfs(): string
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
    public function setUseLfs(string $useLfs): self
    {
        $this->initialized['useLfs'] = true;
        $this->useLfs = $useLfs;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['useLfs' => ['use_lfs', 'getUseLfs', 'setUseLfs']];
    }
}