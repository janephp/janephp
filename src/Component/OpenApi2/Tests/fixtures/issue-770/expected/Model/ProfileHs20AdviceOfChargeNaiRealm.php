<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20AdviceOfChargeNaiRealm
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
     * @var list<string>
     */
    protected $names;
    /**
     * @var string
     */
    protected $encoding;
    /**
     * @return list<string>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<string> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }
    /**
     * @param string $encoding
     *
     * @return self
     */
    public function setEncoding(string $encoding): self
    {
        $this->initialized['encoding'] = true;
        $this->encoding = $encoding;
        return $this;
    }
}