<?php

namespace Github\Model;

class InteractionLimit extends \ArrayObject
{
    /**
     * The interaction limit to enable.
     *
     * @var string
     */
    protected $limit;
    /**
     * 
     *
     * @var string
     */
    protected $origin;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * The interaction limit to enable.
     *
     * @return string
     */
    public function getLimit() : string
    {
        return $this->limit;
    }
    /**
     * The interaction limit to enable.
     *
     * @param string $limit
     *
     * @return self
     */
    public function setLimit(string $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrigin() : string
    {
        return $this->origin;
    }
    /**
     * 
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin) : self
    {
        $this->origin = $origin;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiresAt() : \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
}