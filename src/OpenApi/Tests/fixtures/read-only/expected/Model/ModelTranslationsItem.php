<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class ModelTranslationsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
}