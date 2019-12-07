<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Schema
{
    /**
     * 
     *
     * @var string
     */
    protected $stringProperty;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $dateProperty;
    /**
     * 
     *
     * @var int
     */
    protected $integerProperty;
    /**
     * 
     *
     * @var float
     */
    protected $floatProperty;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $arrayProperty;
    /**
     * 
     *
     * @var string[]
     */
    protected $mapProperty;
    /**
     * 
     *
     * @var SchemaObjectProperty
     */
    protected $objectProperty;
    /**
     * 
     *
     * @var Schema
     */
    protected $objectRefProperty;
    /**
     * 
     *
     * @return string
     */
    public function getStringProperty() : string
    {
        return $this->stringProperty;
    }
    /**
     * 
     *
     * @param string $stringProperty
     *
     * @return self
     */
    public function setStringProperty(string $stringProperty) : self
    {
        $this->stringProperty = $stringProperty;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDateProperty() : \DateTime
    {
        return $this->dateProperty;
    }
    /**
     * 
     *
     * @param \DateTime $dateProperty
     *
     * @return self
     */
    public function setDateProperty(\DateTime $dateProperty) : self
    {
        $this->dateProperty = $dateProperty;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIntegerProperty() : int
    {
        return $this->integerProperty;
    }
    /**
     * 
     *
     * @param int $integerProperty
     *
     * @return self
     */
    public function setIntegerProperty(int $integerProperty) : self
    {
        $this->integerProperty = $integerProperty;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getFloatProperty() : float
    {
        return $this->floatProperty;
    }
    /**
     * 
     *
     * @param float $floatProperty
     *
     * @return self
     */
    public function setFloatProperty(float $floatProperty) : self
    {
        $this->floatProperty = $floatProperty;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getArrayProperty() : array
    {
        return $this->arrayProperty;
    }
    /**
     * 
     *
     * @param mixed[] $arrayProperty
     *
     * @return self
     */
    public function setArrayProperty(array $arrayProperty) : self
    {
        $this->arrayProperty = $arrayProperty;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getMapProperty() : \ArrayObject
    {
        return $this->mapProperty;
    }
    /**
     * 
     *
     * @param string[] $mapProperty
     *
     * @return self
     */
    public function setMapProperty(\ArrayObject $mapProperty) : self
    {
        $this->mapProperty = $mapProperty;
        return $this;
    }
    /**
     * 
     *
     * @return SchemaObjectProperty
     */
    public function getObjectProperty() : SchemaObjectProperty
    {
        return $this->objectProperty;
    }
    /**
     * 
     *
     * @param SchemaObjectProperty $objectProperty
     *
     * @return self
     */
    public function setObjectProperty(SchemaObjectProperty $objectProperty) : self
    {
        $this->objectProperty = $objectProperty;
        return $this;
    }
    /**
     * 
     *
     * @return Schema
     */
    public function getObjectRefProperty() : Schema
    {
        return $this->objectRefProperty;
    }
    /**
     * 
     *
     * @param Schema $objectRefProperty
     *
     * @return self
     */
    public function setObjectRefProperty(Schema $objectRefProperty) : self
    {
        $this->objectRefProperty = $objectRefProperty;
        return $this;
    }
}