<?php

namespace Github\Model;

class SearchResultTextMatchesItemMatchesItem extends \ArrayObject
{
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
        $this->indices = $indices;
        return $this;
    }
}