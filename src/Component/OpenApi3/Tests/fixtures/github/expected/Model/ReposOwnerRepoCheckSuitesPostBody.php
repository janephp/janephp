<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoCheckSuitesPostBody implements AdditionalPropertiesInterface
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
    public function getHeadSha(): string
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
    public function setHeadSha(string $headSha): self
    {
        $this->initialized['headSha'] = true;
        $this->headSha = $headSha;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['headSha' => ['head_sha', 'getHeadSha', 'setHeadSha']];
    }
}