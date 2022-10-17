<?php

namespace Github\Model;

class ProjectsColumnsColumnIdMovesPostBody extends \ArrayObject
{
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
    public function getPosition() : string
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
    public function setPosition(string $position) : self
    {
        $this->position = $position;
        return $this;
    }
}