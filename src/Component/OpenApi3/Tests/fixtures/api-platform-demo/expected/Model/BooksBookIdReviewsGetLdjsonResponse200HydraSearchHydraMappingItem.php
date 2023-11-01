<?php

namespace ApiPlatform\Demo\Model;

class BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem extends \ArrayObject
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
     * @var string|null
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
        $this->initialized['type'] = true;
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
        $this->initialized['variable'] = true;
        $this->variable = $variable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProperty() : ?string
    {
        return $this->property;
    }
    /**
     * 
     *
     * @param string|null $property
     *
     * @return self
     */
    public function setProperty(?string $property) : self
    {
        $this->initialized['property'] = true;
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
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
}