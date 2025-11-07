<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsDeploymentFunctions extends \ArrayObject
{
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
    protected $name;
    /**
     * The commit hash of the repository that was used to build this functions component.
     *
     * @var string
     */
    protected $sourceCommitHash;
    /**
     * The namespace where the functions are deployed.
     *
     * @var string
     */
    protected $namespace;
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
     * The commit hash of the repository that was used to build this functions component.
     *
     * @return string
     */
    public function getSourceCommitHash(): string
    {
        return $this->sourceCommitHash;
    }
    /**
     * The commit hash of the repository that was used to build this functions component.
     *
     * @param string $sourceCommitHash
     *
     * @return self
     */
    public function setSourceCommitHash(string $sourceCommitHash): self
    {
        $this->initialized['sourceCommitHash'] = true;
        $this->sourceCommitHash = $sourceCommitHash;
        return $this;
    }
    /**
     * The namespace where the functions are deployed.
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }
    /**
     * The namespace where the functions are deployed.
     *
     * @param string $namespace
     *
     * @return self
     */
    public function setNamespace(string $namespace): self
    {
        $this->initialized['namespace'] = true;
        $this->namespace = $namespace;
        return $this;
    }
}