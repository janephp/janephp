<?php

namespace Github\Model;

class ImportProjectChoicesItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $vcs;
    /**
     * 
     *
     * @var string
     */
    protected $tfvcProject;
    /**
     * 
     *
     * @var string
     */
    protected $humanName;
    /**
     * 
     *
     * @return string
     */
    public function getVcs() : string
    {
        return $this->vcs;
    }
    /**
     * 
     *
     * @param string $vcs
     *
     * @return self
     */
    public function setVcs(string $vcs) : self
    {
        $this->vcs = $vcs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTfvcProject() : string
    {
        return $this->tfvcProject;
    }
    /**
     * 
     *
     * @param string $tfvcProject
     *
     * @return self
     */
    public function setTfvcProject(string $tfvcProject) : self
    {
        $this->tfvcProject = $tfvcProject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHumanName() : string
    {
        return $this->humanName;
    }
    /**
     * 
     *
     * @param string $humanName
     *
     * @return self
     */
    public function setHumanName(string $humanName) : self
    {
        $this->humanName = $humanName;
        return $this;
    }
}