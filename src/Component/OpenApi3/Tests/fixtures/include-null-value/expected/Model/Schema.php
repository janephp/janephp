<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Schema extends \ArrayObject
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
    protected $attribute1;
    /**
     * 
     *
     * @var string|null
     */
    protected $attribute2;
    /**
     * 
     *
     * @var string
     */
    protected $attribute3;
    /**
     * 
     *
     * @var string|null
     */
    protected $attribute4;
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
     * @var list<mixed>
     */
    protected $arrayProperty;
    /**
     * 
     *
     * @var array<string, string>
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
    public function getAttribute1() : string
    {
        return $this->attribute1;
    }
    /**
     * 
     *
     * @param string $attribute1
     *
     * @return self
     */
    public function setAttribute1(string $attribute1) : self
    {
        $this->initialized['attribute1'] = true;
        $this->attribute1 = $attribute1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttribute2() : ?string
    {
        return $this->attribute2;
    }
    /**
     * 
     *
     * @param string|null $attribute2
     *
     * @return self
     */
    public function setAttribute2(?string $attribute2) : self
    {
        $this->initialized['attribute2'] = true;
        $this->attribute2 = $attribute2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttribute3() : string
    {
        return $this->attribute3;
    }
    /**
     * 
     *
     * @param string $attribute3
     *
     * @return self
     */
    public function setAttribute3(string $attribute3) : self
    {
        $this->initialized['attribute3'] = true;
        $this->attribute3 = $attribute3;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttribute4() : ?string
    {
        return $this->attribute4;
    }
    /**
     * 
     *
     * @param string|null $attribute4
     *
     * @return self
     */
    public function setAttribute4(?string $attribute4) : self
    {
        $this->initialized['attribute4'] = true;
        $this->attribute4 = $attribute4;
        return $this;
    }
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
        $this->initialized['stringProperty'] = true;
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
        $this->initialized['dateProperty'] = true;
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
        $this->initialized['integerProperty'] = true;
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
        $this->initialized['floatProperty'] = true;
        $this->floatProperty = $floatProperty;
        return $this;
    }
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getArrayProperty() : array
    {
        return $this->arrayProperty;
    }
    /**
     * 
     *
     * @param list<mixed> $arrayProperty
     *
     * @return self
     */
    public function setArrayProperty(array $arrayProperty) : self
    {
        $this->initialized['arrayProperty'] = true;
        $this->arrayProperty = $arrayProperty;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getMapProperty() : iterable
    {
        return $this->mapProperty;
    }
    /**
     * 
     *
     * @param array<string, string> $mapProperty
     *
     * @return self
     */
    public function setMapProperty(iterable $mapProperty) : self
    {
        $this->initialized['mapProperty'] = true;
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
        $this->initialized['objectProperty'] = true;
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
        $this->initialized['objectRefProperty'] = true;
        $this->objectRefProperty = $objectRefProperty;
        return $this;
    }
}