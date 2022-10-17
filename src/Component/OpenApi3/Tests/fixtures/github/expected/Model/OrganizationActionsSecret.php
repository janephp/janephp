<?php

namespace Github\Model;

class OrganizationActionsSecret extends \ArrayObject
{
    /**
     * The name of the secret.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Visibility of a secret
     *
     * @var string
     */
    protected $visibility;
    /**
     * 
     *
     * @var string
     */
    protected $selectedRepositoriesUrl;
    /**
     * The name of the secret.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the secret.
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
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Visibility of a secret
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * Visibility of a secret
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSelectedRepositoriesUrl() : string
    {
        return $this->selectedRepositoriesUrl;
    }
    /**
     * 
     *
     * @param string $selectedRepositoriesUrl
     *
     * @return self
     */
    public function setSelectedRepositoriesUrl(string $selectedRepositoriesUrl) : self
    {
        $this->selectedRepositoriesUrl = $selectedRepositoriesUrl;
        return $this;
    }
}