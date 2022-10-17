<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $addressConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $citizenshipConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $countryConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $dobConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $entityTypeConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $genderConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $idConflict;
    /**
     * 
     *
     * @var bool
     */
    protected $phoneConflict;
    /**
     * 
     *
     * @return bool
     */
    public function getAddressConflict() : bool
    {
        return $this->addressConflict;
    }
    /**
     * 
     *
     * @param bool $addressConflict
     *
     * @return self
     */
    public function setAddressConflict(bool $addressConflict) : self
    {
        $this->addressConflict = $addressConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCitizenshipConflict() : bool
    {
        return $this->citizenshipConflict;
    }
    /**
     * 
     *
     * @param bool $citizenshipConflict
     *
     * @return self
     */
    public function setCitizenshipConflict(bool $citizenshipConflict) : self
    {
        $this->citizenshipConflict = $citizenshipConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCountryConflict() : bool
    {
        return $this->countryConflict;
    }
    /**
     * 
     *
     * @param bool $countryConflict
     *
     * @return self
     */
    public function setCountryConflict(bool $countryConflict) : self
    {
        $this->countryConflict = $countryConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDobConflict() : bool
    {
        return $this->dobConflict;
    }
    /**
     * 
     *
     * @param bool $dobConflict
     *
     * @return self
     */
    public function setDobConflict(bool $dobConflict) : self
    {
        $this->dobConflict = $dobConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEntityTypeConflict() : bool
    {
        return $this->entityTypeConflict;
    }
    /**
     * 
     *
     * @param bool $entityTypeConflict
     *
     * @return self
     */
    public function setEntityTypeConflict(bool $entityTypeConflict) : self
    {
        $this->entityTypeConflict = $entityTypeConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGenderConflict() : bool
    {
        return $this->genderConflict;
    }
    /**
     * 
     *
     * @param bool $genderConflict
     *
     * @return self
     */
    public function setGenderConflict(bool $genderConflict) : self
    {
        $this->genderConflict = $genderConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIdConflict() : bool
    {
        return $this->idConflict;
    }
    /**
     * 
     *
     * @param bool $idConflict
     *
     * @return self
     */
    public function setIdConflict(bool $idConflict) : self
    {
        $this->idConflict = $idConflict;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPhoneConflict() : bool
    {
        return $this->phoneConflict;
    }
    /**
     * 
     *
     * @param bool $phoneConflict
     *
     * @return self
     */
    public function setPhoneConflict(bool $phoneConflict) : self
    {
        $this->phoneConflict = $phoneConflict;
        return $this;
    }
}