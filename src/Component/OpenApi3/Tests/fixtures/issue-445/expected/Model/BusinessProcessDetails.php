<?php

namespace PicturePark\API\Model;

class BusinessProcessDetails extends BusinessProcess
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
     * Details for the business process.
     *
     * @var BusinessProcessDetailsDataBase|null
     */
    protected $details;
    /**
     * Details for the business process.
     *
     * @return BusinessProcessDetailsDataBase|null
     */
    public function getDetails(): ?BusinessProcessDetailsDataBase
    {
        return $this->details;
    }
    /**
     * Details for the business process.
     *
     * @param BusinessProcessDetailsDataBase|null $details
     *
     * @return self
     */
    public function setDetails(?BusinessProcessDetailsDataBase $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}