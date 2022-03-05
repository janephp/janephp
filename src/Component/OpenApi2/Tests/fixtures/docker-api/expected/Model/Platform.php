<?php

namespace Docker\Api\Model;

class Platform
{
    /**
    * Architecture represents the hardware architecture (for example,
    `x86_64`).
    
    *
    * @var string
    */
    protected $architecture;
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     *
     * @var string
     */
    protected $oS;
    /**
    * Architecture represents the hardware architecture (for example,
    `x86_64`).
    
    *
    * @return string
    */
    public function getArchitecture() : string
    {
        return $this->architecture;
    }
    /**
    * Architecture represents the hardware architecture (for example,
    `x86_64`).
    
    *
    * @param string $architecture
    *
    * @return self
    */
    public function setArchitecture(string $architecture) : self
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     *
     * @return string
     */
    public function getOS() : string
    {
        return $this->oS;
    }
    /**
     * OS represents the Operating System (for example, `linux` or `windows`).
     *
     * @param string $oS
     *
     * @return self
     */
    public function setOS(string $oS) : self
    {
        $this->oS = $oS;
        return $this;
    }
}