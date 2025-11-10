<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileOptionBO
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
     * functionName
     *
     * @var string
     */
    protected $functionName;
    /**
     * type
     *
     * @var string
     */
    protected $type;
    /**
     * codeNumber
     *
     * @var int
     */
    protected $codeNumber;
    /**
     * value
     *
     * @var string
     */
    protected $value;
    /**
     * functionName
     *
     * @return string
     */
    public function getFunctionName(): string
    {
        return $this->functionName;
    }
    /**
     * functionName
     *
     * @param string $functionName
     *
     * @return self
     */
    public function setFunctionName(string $functionName): self
    {
        $this->initialized['functionName'] = true;
        $this->functionName = $functionName;
        return $this;
    }
    /**
     * type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * codeNumber
     *
     * @return int
     */
    public function getCodeNumber(): int
    {
        return $this->codeNumber;
    }
    /**
     * codeNumber
     *
     * @param int $codeNumber
     *
     * @return self
     */
    public function setCodeNumber(int $codeNumber): self
    {
        $this->initialized['codeNumber'] = true;
        $this->codeNumber = $codeNumber;
        return $this;
    }
    /**
     * value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}