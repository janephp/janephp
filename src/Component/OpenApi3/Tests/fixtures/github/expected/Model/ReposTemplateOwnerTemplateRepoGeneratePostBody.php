<?php

namespace Github\Model;

class ReposTemplateOwnerTemplateRepoGeneratePostBody extends \ArrayObject
{
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     *
     * @var string
     */
    protected $owner;
    /**
     * The name of the new repository.
     *
     * @var string
     */
    protected $name;
    /**
     * A short description of the new repository.
     *
     * @var string
     */
    protected $description;
    /**
     * Either `true` to create a new private repository or `false` to create a new public one.
     *
     * @var bool
     */
    protected $private = false;
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     *
     * @return string
     */
    public function getOwner() : string
    {
        return $this->owner;
    }
    /**
     * The organization or person who will own the new repository. To create a new repository in an organization, the authenticated user must be a member of the specified organization.
     *
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner) : self
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * The name of the new repository.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the new repository.
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
     * A short description of the new repository.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of the new repository.
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
     * Either `true` to create a new private repository or `false` to create a new public one.
     *
     * @return bool
     */
    public function getPrivate() : bool
    {
        return $this->private;
    }
    /**
     * Either `true` to create a new private repository or `false` to create a new public one.
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