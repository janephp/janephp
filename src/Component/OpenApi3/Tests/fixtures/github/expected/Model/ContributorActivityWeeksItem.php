<?php

namespace Github\Model;

class ContributorActivityWeeksItem
{
    /**
     * 
     *
     * @var string
     */
    protected $w;
    /**
     * 
     *
     * @var int
     */
    protected $a;
    /**
     * 
     *
     * @var int
     */
    protected $d;
    /**
     * 
     *
     * @var int
     */
    protected $c;
    /**
     * 
     *
     * @return string
     */
    public function getW() : string
    {
        return $this->w;
    }
    /**
     * 
     *
     * @param string $w
     *
     * @return self
     */
    public function setW(string $w) : self
    {
        $this->w = $w;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getA() : int
    {
        return $this->a;
    }
    /**
     * 
     *
     * @param int $a
     *
     * @return self
     */
    public function setA(int $a) : self
    {
        $this->a = $a;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getD() : int
    {
        return $this->d;
    }
    /**
     * 
     *
     * @param int $d
     *
     * @return self
     */
    public function setD(int $d) : self
    {
        $this->d = $d;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getC() : int
    {
        return $this->c;
    }
    /**
     * 
     *
     * @param int $c
     *
     * @return self
     */
    public function setC(int $c) : self
    {
        $this->c = $c;
        return $this;
    }
}