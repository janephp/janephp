<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * 
     *
     * @var Childtype
     */
    protected $child;
    /**
     * 
     *
     * @var Parenttype
     */
    protected $parent;
    /**
     * 
     *
     * @return Childtype|null
     */
    public function getChild() : ?Childtype
    {
        return $this->child;
    }
    /**
     * 
     *
     * @param Childtype|null $child
     *
     * @return self
     */
    public function setChild(?Childtype $child) : self
    {
        $this->child = $child;
        return $this;
    }
    /**
     * 
     *
     * @return Parenttype|null
     */
    public function getParent() : ?Parenttype
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param Parenttype|null $parent
     *
     * @return self
     */
    public function setParent(?Parenttype $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
}