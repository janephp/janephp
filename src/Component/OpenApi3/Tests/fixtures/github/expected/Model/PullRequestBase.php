<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class PullRequestBase implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $ref;
    /**
     * @var PullRequestBaseRepo
     */
    protected $repo;
    /**
     * @var string
     */
    protected $sha;
    /**
     * @var PullRequestBaseUser
     */
    protected $user;
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }
    /**
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref): self
    {
        $this->initialized['ref'] = true;
        $this->ref = $ref;
        return $this;
    }
    /**
     * @return PullRequestBaseRepo
     */
    public function getRepo(): PullRequestBaseRepo
    {
        return $this->repo;
    }
    /**
     * @param PullRequestBaseRepo $repo
     *
     * @return self
     */
    public function setRepo(PullRequestBaseRepo $repo): self
    {
        $this->initialized['repo'] = true;
        $this->repo = $repo;
        return $this;
    }
    /**
     * @return string
     */
    public function getSha(): string
    {
        return $this->sha;
    }
    /**
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha): self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
        return $this;
    }
    /**
     * @return PullRequestBaseUser
     */
    public function getUser(): PullRequestBaseUser
    {
        return $this->user;
    }
    /**
     * @param PullRequestBaseUser $user
     *
     * @return self
     */
    public function setUser(PullRequestBaseUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['label' => ['label', 'getLabel', 'setLabel'], 'ref' => ['ref', 'getRef', 'setRef'], 'repo' => ['repo', 'getRepo', 'setRepo'], 'sha' => ['sha', 'getSha', 'setSha'], 'user' => ['user', 'getUser', 'setUser']];
    }
}