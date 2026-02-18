<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsStringMatch extends \ArrayObject
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
     * Exact string match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @var string
     */
    protected $exact;
    /**
     * Prefix-based match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @deprecated
     *
     * @var string
     */
    protected $prefix;
    /**
     * RE2 style regex-based match. Only 1 of `exact`, `prefix`, or `regex` must be set. For more information about RE2 syntax, see: https://github.com/google/re2/wiki/Syntax
     *
     * @var string
     */
    protected $regex;
    /**
     * Exact string match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @return string
     */
    public function getExact(): string
    {
        return $this->exact;
    }
    /**
     * Exact string match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @param string $exact
     *
     * @return self
     */
    public function setExact(string $exact): self
    {
        $this->initialized['exact'] = true;
        $this->exact = $exact;
        return $this;
    }
    /**
     * Prefix-based match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @deprecated
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * Prefix-based match. Only 1 of `exact`, `prefix`, or `regex` must be set.
     *
     * @param string $prefix
     *
     * @deprecated
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * RE2 style regex-based match. Only 1 of `exact`, `prefix`, or `regex` must be set. For more information about RE2 syntax, see: https://github.com/google/re2/wiki/Syntax
     *
     * @return string
     */
    public function getRegex(): string
    {
        return $this->regex;
    }
    /**
     * RE2 style regex-based match. Only 1 of `exact`, `prefix`, or `regex` must be set. For more information about RE2 syntax, see: https://github.com/google/re2/wiki/Syntax
     *
     * @param string $regex
     *
     * @return self
     */
    public function setRegex(string $regex): self
    {
        $this->initialized['regex'] = true;
        $this->regex = $regex;
        return $this;
    }
}