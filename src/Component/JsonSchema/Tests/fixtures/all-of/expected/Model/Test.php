<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var Childtype
     */
    protected $child;
    /**
     * @var Parenttype
     */
    protected $parent;
    /**
     * @return Childtype
     */
    public function getChild(): Childtype
    {
        return $this->child;
    }
    /**
     * @param Childtype $child
     *
     * @return self
     */
    public function setChild(Childtype $child): self
    {
        $this->initialized['child'] = true;
        $this->child = $child;
        return $this;
    }
    /**
     * @return Parenttype
     */
    public function getParent(): Parenttype
    {
        return $this->parent;
    }
    /**
     * @param Parenttype $parent
     *
     * @return self
     */
    public function setParent(Parenttype $parent): self
    {
        $this->initialized['parent'] = true;
        $this->parent = $parent;
        return $this;
    }
}