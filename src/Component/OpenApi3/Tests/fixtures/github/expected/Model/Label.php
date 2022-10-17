<?php

namespace Github\Model;

class Label extends \ArrayObject
{
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
    protected $nodeId;
    /**
     * URL for the label
     *
     * @var string
     */
    protected $url;
    /**
     * The name of the label.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 6-character hex code, without the leading #, identifying the color
     *
     * @var string
     */
    protected $color;
    /**
     * 
     *
     * @var bool
     */
    protected $default;
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
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * URL for the label
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the label
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * The name of the label.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the label.
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
     * 6-character hex code, without the leading #, identifying the color
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * 6-character hex code, without the leading #, identifying the color
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->color = $color;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefault() : bool
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default) : self
    {
        $this->default = $default;
        return $this;
    }
}