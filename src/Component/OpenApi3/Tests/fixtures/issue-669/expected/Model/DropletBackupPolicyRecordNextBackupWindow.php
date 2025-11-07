<?php

namespace Jane\Generated\DigitalOcean\Model;

class DropletBackupPolicyRecordNextBackupWindow extends \ArrayObject
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
     * A time value given in ISO8601 combined date and time format specifying the start of the Droplet's backup window.
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * A time value given in ISO8601 combined date and time format specifying the end of the Droplet's backup window.
     *
     * @var \DateTime
     */
    protected $end;
    /**
     * A time value given in ISO8601 combined date and time format specifying the start of the Droplet's backup window.
     *
     * @return \DateTime
     */
    public function getStart(): \DateTime
    {
        return $this->start;
    }
    /**
     * A time value given in ISO8601 combined date and time format specifying the start of the Droplet's backup window.
     *
     * @param \DateTime $start
     *
     * @return self
     */
    public function setStart(\DateTime $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format specifying the end of the Droplet's backup window.
     *
     * @return \DateTime
     */
    public function getEnd(): \DateTime
    {
        return $this->end;
    }
    /**
     * A time value given in ISO8601 combined date and time format specifying the end of the Droplet's backup window.
     *
     * @param \DateTime $end
     *
     * @return self
     */
    public function setEnd(\DateTime $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
}