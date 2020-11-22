<?php

namespace Github\Model;

class ProjectsProjectIdPatchBody
{
    /**
     * Name of the project
     *
     * @var string
     */
    protected $name;
    /**
     * Body of the project
     *
     * @var string|null
     */
    protected $body;
    /**
     * State of the project; either 'open' or 'closed'
     *
     * @var string
     */
    protected $state;
    /**
     * The baseline permission that all organization members have on this project
     *
     * @var string
     */
    protected $organizationPermission;
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @var bool
     */
    protected $private;
    /**
     * Name of the project
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the project
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Body of the project
     *
     * @return string|null
     */
    public function getBody() : ?string
    {
        return $this->body;
    }
    /**
     * Body of the project
     *
     * @param string|null $body
     *
     * @return self
     */
    public function setBody(?string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * State of the project; either 'open' or 'closed'
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of the project; either 'open' or 'closed'
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The baseline permission that all organization members have on this project
     *
     * @return string
     */
    public function getOrganizationPermission() : string
    {
        return $this->organizationPermission;
    }
    /**
     * The baseline permission that all organization members have on this project
     *
     * @param string $organizationPermission
     *
     * @return self
     */
    public function setOrganizationPermission(string $organizationPermission) : self
    {
        $this->organizationPermission = $organizationPermission;
        return $this;
    }
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Whether or not this project can be seen by everyone.
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private) : self
    {
        $this->private = $private;
        return $this;
    }
}