<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem
{
    /**
     * 
     *
     * @var string
     */
    protected $commentaryText;
    /**
     * 
     *
     * @var string
     */
    protected $positiveNegative;
    /**
     * 
     *
     * @return string
     */
    public function getCommentaryText() : string
    {
        return $this->commentaryText;
    }
    /**
     * 
     *
     * @param string $commentaryText
     *
     * @return self
     */
    public function setCommentaryText(string $commentaryText) : self
    {
        $this->commentaryText = $commentaryText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPositiveNegative() : string
    {
        return $this->positiveNegative;
    }
    /**
     * 
     *
     * @param string $positiveNegative
     *
     * @return self
     */
    public function setPositiveNegative(string $positiveNegative) : self
    {
        $this->positiveNegative = $positiveNegative;
        return $this;
    }
}