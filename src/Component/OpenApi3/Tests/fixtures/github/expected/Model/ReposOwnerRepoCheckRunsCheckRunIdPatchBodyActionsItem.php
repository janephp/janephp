<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem extends \ArrayObject
{
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     *
     * @var string
     */
    protected $label;
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     *
     * @var string
     */
    protected $description;
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     *
     * @var string
     */
    protected $identifier;
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * The text to be displayed on a button in the web UI. The maximum size is 20 characters.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short explanation of what this action would do. The maximum size is 40 characters.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     *
     * @return string
     */
    public function getIdentifier() : string
    {
        return $this->identifier;
    }
    /**
     * A reference for the action on the integrator's system. The maximum size is 20 characters.
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier(string $identifier) : self
    {
        $this->identifier = $identifier;
        return $this;
    }
}