<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['commentaryText'] = true;
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
        $this->initialized['positiveNegative'] = true;
        $this->positiveNegative = $positiveNegative;
        return $this;
    }
}