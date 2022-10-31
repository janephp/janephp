<?php

namespace Github\Model;

class SearchResultTextMatchesItemMatchesItem extends \ArrayObject
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
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var int[]
     */
    protected $indices;
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getIndices() : array
    {
        return $this->indices;
    }
    /**
     * 
     *
     * @param int[] $indices
     *
     * @return self
     */
    public function setIndices(array $indices) : self
    {
        $this->initialized['indices'] = true;
        $this->indices = $indices;
        return $this;
    }
}