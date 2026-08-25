<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class PrivateUserPlan implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $collaborators;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $space;
    /**
     * @var int
     */
    protected $privateRepos;
    /**
     * @return int
     */
    public function getCollaborators(): int
    {
        return $this->collaborators;
    }
    /**
     * @param int $collaborators
     *
     * @return self
     */
    public function setCollaborators(int $collaborators): self
    {
        $this->initialized['collaborators'] = true;
        $this->collaborators = $collaborators;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return int
     */
    public function getSpace(): int
    {
        return $this->space;
    }
    /**
     * @param int $space
     *
     * @return self
     */
    public function setSpace(int $space): self
    {
        $this->initialized['space'] = true;
        $this->space = $space;
        return $this;
    }
    /**
     * @return int
     */
    public function getPrivateRepos(): int
    {
        return $this->privateRepos;
    }
    /**
     * @param int $privateRepos
     *
     * @return self
     */
    public function setPrivateRepos(int $privateRepos): self
    {
        $this->initialized['privateRepos'] = true;
        $this->privateRepos = $privateRepos;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['collaborators' => ['collaborators', 'getCollaborators', 'setCollaborators'], 'name' => ['name', 'getName', 'setName'], 'space' => ['space', 'getSpace', 'setSpace'], 'privateRepos' => ['private_repos', 'getPrivateRepos', 'setPrivateRepos']];
    }
}