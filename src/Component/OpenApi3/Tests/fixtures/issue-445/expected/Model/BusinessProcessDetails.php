<?php

namespace PicturePark\API\Model;

class BusinessProcessDetails extends BusinessProcess
{
    /**
     * Details for the business process.
     *
     * @var mixed|null
     */
    protected $details;
    /**
     * Details for the business process.
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Details for the business process.
     *
     * @param mixed $details
     *
     * @return self
     */
    public function setDetails($details) : self
    {
        $this->details = $details;
        return $this;
    }
}