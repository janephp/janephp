<?php

namespace Github\Model;

class CommunityProfile extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $healthPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentation;
    /**
     * 
     *
     * @var CommunityProfileFiles
     */
    protected $files;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return int
     */
    public function getHealthPercentage() : int
    {
        return $this->healthPercentage;
    }
    /**
     * 
     *
     * @param int $healthPercentage
     *
     * @return self
     */
    public function setHealthPercentage(int $healthPercentage) : self
    {
        $this->healthPercentage = $healthPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentation() : ?string
    {
        return $this->documentation;
    }
    /**
     * 
     *
     * @param string|null $documentation
     *
     * @return self
     */
    public function setDocumentation(?string $documentation) : self
    {
        $this->documentation = $documentation;
        return $this;
    }
    /**
     * 
     *
     * @return CommunityProfileFiles
     */
    public function getFiles() : CommunityProfileFiles
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param CommunityProfileFiles $files
     *
     * @return self
     */
    public function setFiles(CommunityProfileFiles $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}