<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppJobSpecTermination extends \ArrayObject
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
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @var int
     */
    protected $gracePeriodSeconds;
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @return int
     */
    public function getGracePeriodSeconds(): int
    {
        return $this->gracePeriodSeconds;
    }
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @param int $gracePeriodSeconds
     *
     * @return self
     */
    public function setGracePeriodSeconds(int $gracePeriodSeconds): self
    {
        $this->initialized['gracePeriodSeconds'] = true;
        $this->gracePeriodSeconds = $gracePeriodSeconds;
        return $this;
    }
}