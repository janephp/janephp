<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingProject implements AdditionalPropertiesInterface
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
     * @var Project
     */
    protected $project;
    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }
    /**
     * @param Project $project
     *
     * @return self
     */
    public function setProject(Project $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['project' => ['project', 'getProject', 'setProject']];
    }
}