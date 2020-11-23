<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorDetailsAdditionalData
{
    /**
     * 
     *
     * @var bool
     */
    protected $disqualified;
    /**
     * 
     *
     * @var bool
     */
    protected $disqualifiedException;
    /**
     * 
     *
     * @return bool
     */
    public function getDisqualified() : bool
    {
        return $this->disqualified;
    }
    /**
     * 
     *
     * @param bool $disqualified
     *
     * @return self
     */
    public function setDisqualified(bool $disqualified) : self
    {
        $this->disqualified = $disqualified;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisqualifiedException() : bool
    {
        return $this->disqualifiedException;
    }
    /**
     * 
     *
     * @param bool $disqualifiedException
     *
     * @return self
     */
    public function setDisqualifiedException(bool $disqualifiedException) : self
    {
        $this->disqualifiedException = $disqualifiedException;
        return $this;
    }
}