<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Country extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $iso;
    /**
     * 
     *
     * @var string
     */
    protected $printableName;
    /**
     * 
     *
     * @return string
     */
    public function getIso() : string
    {
        return $this->iso;
    }
    /**
     * 
     *
     * @param string $iso
     *
     * @return self
     */
    public function setIso(string $iso) : self
    {
        $this->iso = $iso;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrintableName() : string
    {
        return $this->printableName;
    }
    /**
     * 
     *
     * @param string $printableName
     *
     * @return self
     */
    public function setPrintableName(string $printableName) : self
    {
        $this->printableName = $printableName;
        return $this;
    }
}