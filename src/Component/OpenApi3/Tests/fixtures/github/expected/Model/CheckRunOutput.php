<?php

namespace Github\Model;

class CheckRunOutput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $summary;
    /**
     * 
     *
     * @var string|null
     */
    protected $text;
    /**
     * 
     *
     * @var int
     */
    protected $annotationsCount;
    /**
     * 
     *
     * @var string
     */
    protected $annotationsUrl;
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string|null $summary
     *
     * @return self
     */
    public function setSummary(?string $summary) : self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAnnotationsCount() : int
    {
        return $this->annotationsCount;
    }
    /**
     * 
     *
     * @param int $annotationsCount
     *
     * @return self
     */
    public function setAnnotationsCount(int $annotationsCount) : self
    {
        $this->initialized['annotationsCount'] = true;
        $this->annotationsCount = $annotationsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAnnotationsUrl() : string
    {
        return $this->annotationsUrl;
    }
    /**
     * 
     *
     * @param string $annotationsUrl
     *
     * @return self
     */
    public function setAnnotationsUrl(string $annotationsUrl) : self
    {
        $this->initialized['annotationsUrl'] = true;
        $this->annotationsUrl = $annotationsUrl;
        return $this;
    }
}