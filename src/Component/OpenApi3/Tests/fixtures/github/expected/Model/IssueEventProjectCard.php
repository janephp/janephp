<?php

namespace Github\Model;

class IssueEventProjectCard extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $projectUrl;
    /**
     * 
     *
     * @var int
     */
    protected $projectId;
    /**
     * 
     *
     * @var string
     */
    protected $columnName;
    /**
     * 
     *
     * @var string
     */
    protected $previousColumnName;
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectUrl() : string
    {
        return $this->projectUrl;
    }
    /**
     * 
     *
     * @param string $projectUrl
     *
     * @return self
     */
    public function setProjectUrl(string $projectUrl) : self
    {
        $this->initialized['projectUrl'] = true;
        $this->projectUrl = $projectUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getColumnName() : string
    {
        return $this->columnName;
    }
    /**
     * 
     *
     * @param string $columnName
     *
     * @return self
     */
    public function setColumnName(string $columnName) : self
    {
        $this->initialized['columnName'] = true;
        $this->columnName = $columnName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreviousColumnName() : string
    {
        return $this->previousColumnName;
    }
    /**
     * 
     *
     * @param string $previousColumnName
     *
     * @return self
     */
    public function setPreviousColumnName(string $previousColumnName) : self
    {
        $this->initialized['previousColumnName'] = true;
        $this->previousColumnName = $previousColumnName;
        return $this;
    }
}