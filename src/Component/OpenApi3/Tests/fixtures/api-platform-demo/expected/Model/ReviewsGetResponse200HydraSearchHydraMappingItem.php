<?php

namespace ApiPlatform\Demo\Model;

class ReviewsGetResponse200HydraSearchHydraMappingItem
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $variable;
    /**
     * 
     *
     * @var string
     */
    protected $property;
    /**
     * 
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVariable() : string
    {
        return $this->variable;
    }
    /**
     * 
     *
     * @param string $variable
     *
     * @return self
     */
    public function setVariable(string $variable) : self
    {
        $this->variable = $variable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProperty() : string
    {
        return $this->property;
    }
    /**
     * 
     *
     * @param string $property
     *
     * @return self
     */
    public function setProperty(string $property) : self
    {
        $this->property = $property;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
}