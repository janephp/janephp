<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class ModelFooooooo
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
     * @var string
     */
    protected $enumString;
    /**
     * @var string
     */
    protected $enumArrayString;
    /**
     * @var mixed
     */
    protected $enumNoType;
    /**
     * @var string
     */
    protected $constString;
    /**
     * @var string
     */
    protected $minLengthString;
    /**
     * @var string
     */
    protected $maxLengthString;
    /**
     * @var string
     */
    protected $minMaxLengthString;
    /**
     * @var string
     */
    protected $patternString;
    /**
     * @var list<string>
     */
    protected $arrayMinItems;
    /**
     * @var list<string>
     */
    protected $arrayMaxItems;
    /**
     * @var list<string>
     */
    protected $arrayMinMaxItems;
    /**
     * @var list<string>
     */
    protected $arrayUnique;
    /**
     * @var int
     */
    protected $numericMultipleOf;
    /**
     * @var int
     */
    protected $numericMaximum;
    /**
     * @var int
     */
    protected $numericExclusiveMaximum;
    /**
     * @var int
     */
    protected $numericMinimum;
    /**
     * @var int
     */
    protected $numericExclusiveMinimum;
    /**
     * @var string
     */
    protected $emailFormat;
    /**
     * @var string
     */
    protected $ipv4Format;
    /**
     * @var string
     */
    protected $ipv6Format;
    /**
     * @var string
     */
    protected $uriFormat;
    /**
     * @var string
     */
    protected $iriFormat;
    /**
     * @var string
     */
    protected $uuidFormat;
    /**
     * @var FooFooFoo
     */
    protected $foo;
    /**
     * @return string
     */
    public function getEnumString(): string
    {
        return $this->enumString;
    }
    /**
     * @param string $enumString
     *
     * @return self
     */
    public function setEnumString(string $enumString): self
    {
        $this->initialized['enumString'] = true;
        $this->enumString = $enumString;
        return $this;
    }
    /**
     * @return string
     */
    public function getEnumArrayString(): string
    {
        return $this->enumArrayString;
    }
    /**
     * @param string $enumArrayString
     *
     * @return self
     */
    public function setEnumArrayString(string $enumArrayString): self
    {
        $this->initialized['enumArrayString'] = true;
        $this->enumArrayString = $enumArrayString;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getEnumNoType()
    {
        return $this->enumNoType;
    }
    /**
     * @param mixed $enumNoType
     *
     * @return self
     */
    public function setEnumNoType($enumNoType): self
    {
        $this->initialized['enumNoType'] = true;
        $this->enumNoType = $enumNoType;
        return $this;
    }
    /**
     * @return string
     */
    public function getConstString(): string
    {
        return $this->constString;
    }
    /**
     * @param string $constString
     *
     * @return self
     */
    public function setConstString(string $constString): self
    {
        $this->initialized['constString'] = true;
        $this->constString = $constString;
        return $this;
    }
    /**
     * @return string
     */
    public function getMinLengthString(): string
    {
        return $this->minLengthString;
    }
    /**
     * @param string $minLengthString
     *
     * @return self
     */
    public function setMinLengthString(string $minLengthString): self
    {
        $this->initialized['minLengthString'] = true;
        $this->minLengthString = $minLengthString;
        return $this;
    }
    /**
     * @return string
     */
    public function getMaxLengthString(): string
    {
        return $this->maxLengthString;
    }
    /**
     * @param string $maxLengthString
     *
     * @return self
     */
    public function setMaxLengthString(string $maxLengthString): self
    {
        $this->initialized['maxLengthString'] = true;
        $this->maxLengthString = $maxLengthString;
        return $this;
    }
    /**
     * @return string
     */
    public function getMinMaxLengthString(): string
    {
        return $this->minMaxLengthString;
    }
    /**
     * @param string $minMaxLengthString
     *
     * @return self
     */
    public function setMinMaxLengthString(string $minMaxLengthString): self
    {
        $this->initialized['minMaxLengthString'] = true;
        $this->minMaxLengthString = $minMaxLengthString;
        return $this;
    }
    /**
     * @return string
     */
    public function getPatternString(): string
    {
        return $this->patternString;
    }
    /**
     * @param string $patternString
     *
     * @return self
     */
    public function setPatternString(string $patternString): self
    {
        $this->initialized['patternString'] = true;
        $this->patternString = $patternString;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getArrayMinItems(): array
    {
        return $this->arrayMinItems;
    }
    /**
     * @param list<string> $arrayMinItems
     *
     * @return self
     */
    public function setArrayMinItems(array $arrayMinItems): self
    {
        $this->initialized['arrayMinItems'] = true;
        $this->arrayMinItems = $arrayMinItems;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getArrayMaxItems(): array
    {
        return $this->arrayMaxItems;
    }
    /**
     * @param list<string> $arrayMaxItems
     *
     * @return self
     */
    public function setArrayMaxItems(array $arrayMaxItems): self
    {
        $this->initialized['arrayMaxItems'] = true;
        $this->arrayMaxItems = $arrayMaxItems;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getArrayMinMaxItems(): array
    {
        return $this->arrayMinMaxItems;
    }
    /**
     * @param list<string> $arrayMinMaxItems
     *
     * @return self
     */
    public function setArrayMinMaxItems(array $arrayMinMaxItems): self
    {
        $this->initialized['arrayMinMaxItems'] = true;
        $this->arrayMinMaxItems = $arrayMinMaxItems;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getArrayUnique(): array
    {
        return $this->arrayUnique;
    }
    /**
     * @param list<string> $arrayUnique
     *
     * @return self
     */
    public function setArrayUnique(array $arrayUnique): self
    {
        $this->initialized['arrayUnique'] = true;
        $this->arrayUnique = $arrayUnique;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumericMultipleOf(): int
    {
        return $this->numericMultipleOf;
    }
    /**
     * @param int $numericMultipleOf
     *
     * @return self
     */
    public function setNumericMultipleOf(int $numericMultipleOf): self
    {
        $this->initialized['numericMultipleOf'] = true;
        $this->numericMultipleOf = $numericMultipleOf;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumericMaximum(): int
    {
        return $this->numericMaximum;
    }
    /**
     * @param int $numericMaximum
     *
     * @return self
     */
    public function setNumericMaximum(int $numericMaximum): self
    {
        $this->initialized['numericMaximum'] = true;
        $this->numericMaximum = $numericMaximum;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumericExclusiveMaximum(): int
    {
        return $this->numericExclusiveMaximum;
    }
    /**
     * @param int $numericExclusiveMaximum
     *
     * @return self
     */
    public function setNumericExclusiveMaximum(int $numericExclusiveMaximum): self
    {
        $this->initialized['numericExclusiveMaximum'] = true;
        $this->numericExclusiveMaximum = $numericExclusiveMaximum;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumericMinimum(): int
    {
        return $this->numericMinimum;
    }
    /**
     * @param int $numericMinimum
     *
     * @return self
     */
    public function setNumericMinimum(int $numericMinimum): self
    {
        $this->initialized['numericMinimum'] = true;
        $this->numericMinimum = $numericMinimum;
        return $this;
    }
    /**
     * @return int
     */
    public function getNumericExclusiveMinimum(): int
    {
        return $this->numericExclusiveMinimum;
    }
    /**
     * @param int $numericExclusiveMinimum
     *
     * @return self
     */
    public function setNumericExclusiveMinimum(int $numericExclusiveMinimum): self
    {
        $this->initialized['numericExclusiveMinimum'] = true;
        $this->numericExclusiveMinimum = $numericExclusiveMinimum;
        return $this;
    }
    /**
     * @return string
     */
    public function getEmailFormat(): string
    {
        return $this->emailFormat;
    }
    /**
     * @param string $emailFormat
     *
     * @return self
     */
    public function setEmailFormat(string $emailFormat): self
    {
        $this->initialized['emailFormat'] = true;
        $this->emailFormat = $emailFormat;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpv4Format(): string
    {
        return $this->ipv4Format;
    }
    /**
     * @param string $ipv4Format
     *
     * @return self
     */
    public function setIpv4Format(string $ipv4Format): self
    {
        $this->initialized['ipv4Format'] = true;
        $this->ipv4Format = $ipv4Format;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpv6Format(): string
    {
        return $this->ipv6Format;
    }
    /**
     * @param string $ipv6Format
     *
     * @return self
     */
    public function setIpv6Format(string $ipv6Format): self
    {
        $this->initialized['ipv6Format'] = true;
        $this->ipv6Format = $ipv6Format;
        return $this;
    }
    /**
     * @return string
     */
    public function getUriFormat(): string
    {
        return $this->uriFormat;
    }
    /**
     * @param string $uriFormat
     *
     * @return self
     */
    public function setUriFormat(string $uriFormat): self
    {
        $this->initialized['uriFormat'] = true;
        $this->uriFormat = $uriFormat;
        return $this;
    }
    /**
     * @return string
     */
    public function getIriFormat(): string
    {
        return $this->iriFormat;
    }
    /**
     * @param string $iriFormat
     *
     * @return self
     */
    public function setIriFormat(string $iriFormat): self
    {
        $this->initialized['iriFormat'] = true;
        $this->iriFormat = $iriFormat;
        return $this;
    }
    /**
     * @return string
     */
    public function getUuidFormat(): string
    {
        return $this->uuidFormat;
    }
    /**
     * @param string $uuidFormat
     *
     * @return self
     */
    public function setUuidFormat(string $uuidFormat): self
    {
        $this->initialized['uuidFormat'] = true;
        $this->uuidFormat = $uuidFormat;
        return $this;
    }
    /**
     * @return FooFooFoo
     */
    public function getFoo(): FooFooFoo
    {
        return $this->foo;
    }
    /**
     * @param FooFooFoo $foo
     *
     * @return self
     */
    public function setFoo(FooFooFoo $foo): self
    {
        $this->initialized['foo'] = true;
        $this->foo = $foo;
        return $this;
    }
}