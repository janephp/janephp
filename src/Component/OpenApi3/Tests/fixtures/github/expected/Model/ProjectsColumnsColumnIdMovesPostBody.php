<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ProjectsColumnsColumnIdMovesPostBody implements AdditionalPropertiesInterface
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
     * The position of the column in a project
     *
     * @var string
     */
    protected $position;
    /**
     * The position of the column in a project
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
    /**
     * The position of the column in a project
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['position' => ['position', 'getPosition', 'setPosition']];
    }
}