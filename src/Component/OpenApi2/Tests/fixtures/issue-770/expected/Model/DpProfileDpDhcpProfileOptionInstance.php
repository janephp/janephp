<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileOptionInstance
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
    protected $functionName;
    /**
     * @var string
     */
    protected $value;
    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return $this->functionName;
    }
    /**
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
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
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