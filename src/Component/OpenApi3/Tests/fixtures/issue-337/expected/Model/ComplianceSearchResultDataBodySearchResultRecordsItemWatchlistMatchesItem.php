<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem extends \ArrayObject
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
     * @var int
     */
    protected $acceptListID;
    /**
     * 
     *
     * @var bool
     */
    protected $addedToAcceptList;
    /**
     * 
     *
     * @var bool
     */
    protected $addressName;
    /**
     * 
     *
     * @var bool
     */
    protected $autoFalsePositive;
    /**
     * 
     *
     * @var bool
     */
    protected $bestAddressIsPartial;
    /**
     * 
     *
     * @var int
     */
    protected $bestCountryScore;
    /**
     * 
     *
     * @var string
     */
    protected $bestCountryType;
    /**
     * 
     *
     * @var bool
     */
    protected $bestDOBIsPartial;
    /**
     * 
     *
     * @var string
     */
    protected $bestName;
    /**
     * 
     *
     * @var int
     */
    protected $bestNameScore;
    /**
     * 
     *
     * @var int
     */
    protected $checkSum;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts
     */
    protected $conflicts;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails
     */
    protected $entityDetails;
    /**
     * 
     *
     * @var string
     */
    protected $entityName;
    /**
     * 
     *
     * @var int
     */
    protected $entityScore;
    /**
     * 
     *
     * @var string
     */
    protected $entityUniqueID;
    /**
     * 
     *
     * @var bool
     */
    protected $falsePositive;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile
     */
    protected $file;
    /**
     * 
     *
     * @var bool
     */
    protected $gatewayOFACScreeningIndicatorMatch;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $matchReAlert;
    /**
     * 
     *
     * @var int
     */
    protected $previousResultID;
    /**
     * 
     *
     * @var string
     */
    protected $reasonListed;
    /**
     * 
     *
     * @var string
     */
    protected $resultDate;
    /**
     * 
     *
     * @var bool
     */
    protected $secondaryOFACScreeningIndicatorMatch;
    /**
     * 
     *
     * @var bool
     */
    protected $trueMatch;
    /**
     * 
     *
     * @return int
     */
    public function getAcceptListID() : int
    {
        return $this->acceptListID;
    }
    /**
     * 
     *
     * @param int $acceptListID
     *
     * @return self
     */
    public function setAcceptListID(int $acceptListID) : self
    {
        $this->initialized['acceptListID'] = true;
        $this->acceptListID = $acceptListID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAddedToAcceptList() : bool
    {
        return $this->addedToAcceptList;
    }
    /**
     * 
     *
     * @param bool $addedToAcceptList
     *
     * @return self
     */
    public function setAddedToAcceptList(bool $addedToAcceptList) : self
    {
        $this->initialized['addedToAcceptList'] = true;
        $this->addedToAcceptList = $addedToAcceptList;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAddressName() : bool
    {
        return $this->addressName;
    }
    /**
     * 
     *
     * @param bool $addressName
     *
     * @return self
     */
    public function setAddressName(bool $addressName) : self
    {
        $this->initialized['addressName'] = true;
        $this->addressName = $addressName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutoFalsePositive() : bool
    {
        return $this->autoFalsePositive;
    }
    /**
     * 
     *
     * @param bool $autoFalsePositive
     *
     * @return self
     */
    public function setAutoFalsePositive(bool $autoFalsePositive) : self
    {
        $this->initialized['autoFalsePositive'] = true;
        $this->autoFalsePositive = $autoFalsePositive;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBestAddressIsPartial() : bool
    {
        return $this->bestAddressIsPartial;
    }
    /**
     * 
     *
     * @param bool $bestAddressIsPartial
     *
     * @return self
     */
    public function setBestAddressIsPartial(bool $bestAddressIsPartial) : self
    {
        $this->initialized['bestAddressIsPartial'] = true;
        $this->bestAddressIsPartial = $bestAddressIsPartial;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBestCountryScore() : int
    {
        return $this->bestCountryScore;
    }
    /**
     * 
     *
     * @param int $bestCountryScore
     *
     * @return self
     */
    public function setBestCountryScore(int $bestCountryScore) : self
    {
        $this->initialized['bestCountryScore'] = true;
        $this->bestCountryScore = $bestCountryScore;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBestCountryType() : string
    {
        return $this->bestCountryType;
    }
    /**
     * 
     *
     * @param string $bestCountryType
     *
     * @return self
     */
    public function setBestCountryType(string $bestCountryType) : self
    {
        $this->initialized['bestCountryType'] = true;
        $this->bestCountryType = $bestCountryType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBestDOBIsPartial() : bool
    {
        return $this->bestDOBIsPartial;
    }
    /**
     * 
     *
     * @param bool $bestDOBIsPartial
     *
     * @return self
     */
    public function setBestDOBIsPartial(bool $bestDOBIsPartial) : self
    {
        $this->initialized['bestDOBIsPartial'] = true;
        $this->bestDOBIsPartial = $bestDOBIsPartial;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBestName() : string
    {
        return $this->bestName;
    }
    /**
     * 
     *
     * @param string $bestName
     *
     * @return self
     */
    public function setBestName(string $bestName) : self
    {
        $this->initialized['bestName'] = true;
        $this->bestName = $bestName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBestNameScore() : int
    {
        return $this->bestNameScore;
    }
    /**
     * 
     *
     * @param int $bestNameScore
     *
     * @return self
     */
    public function setBestNameScore(int $bestNameScore) : self
    {
        $this->initialized['bestNameScore'] = true;
        $this->bestNameScore = $bestNameScore;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCheckSum() : int
    {
        return $this->checkSum;
    }
    /**
     * 
     *
     * @param int $checkSum
     *
     * @return self
     */
    public function setCheckSum(int $checkSum) : self
    {
        $this->initialized['checkSum'] = true;
        $this->checkSum = $checkSum;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts
     */
    public function getConflicts() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts
    {
        return $this->conflicts;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts $conflicts
     *
     * @return self
     */
    public function setConflicts(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts $conflicts) : self
    {
        $this->initialized['conflicts'] = true;
        $this->conflicts = $conflicts;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails
     */
    public function getEntityDetails() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails
    {
        return $this->entityDetails;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails $entityDetails
     *
     * @return self
     */
    public function setEntityDetails(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails $entityDetails) : self
    {
        $this->initialized['entityDetails'] = true;
        $this->entityDetails = $entityDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityName() : string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string $entityName
     *
     * @return self
     */
    public function setEntityName(string $entityName) : self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getEntityScore() : int
    {
        return $this->entityScore;
    }
    /**
     * 
     *
     * @param int $entityScore
     *
     * @return self
     */
    public function setEntityScore(int $entityScore) : self
    {
        $this->initialized['entityScore'] = true;
        $this->entityScore = $entityScore;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityUniqueID() : string
    {
        return $this->entityUniqueID;
    }
    /**
     * 
     *
     * @param string $entityUniqueID
     *
     * @return self
     */
    public function setEntityUniqueID(string $entityUniqueID) : self
    {
        $this->initialized['entityUniqueID'] = true;
        $this->entityUniqueID = $entityUniqueID;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFalsePositive() : bool
    {
        return $this->falsePositive;
    }
    /**
     * 
     *
     * @param bool $falsePositive
     *
     * @return self
     */
    public function setFalsePositive(bool $falsePositive) : self
    {
        $this->initialized['falsePositive'] = true;
        $this->falsePositive = $falsePositive;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile
     */
    public function getFile() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile $file
     *
     * @return self
     */
    public function setFile(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGatewayOFACScreeningIndicatorMatch() : bool
    {
        return $this->gatewayOFACScreeningIndicatorMatch;
    }
    /**
     * 
     *
     * @param bool $gatewayOFACScreeningIndicatorMatch
     *
     * @return self
     */
    public function setGatewayOFACScreeningIndicatorMatch(bool $gatewayOFACScreeningIndicatorMatch) : self
    {
        $this->initialized['gatewayOFACScreeningIndicatorMatch'] = true;
        $this->gatewayOFACScreeningIndicatorMatch = $gatewayOFACScreeningIndicatorMatch;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMatchReAlert() : bool
    {
        return $this->matchReAlert;
    }
    /**
     * 
     *
     * @param bool $matchReAlert
     *
     * @return self
     */
    public function setMatchReAlert(bool $matchReAlert) : self
    {
        $this->initialized['matchReAlert'] = true;
        $this->matchReAlert = $matchReAlert;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPreviousResultID() : int
    {
        return $this->previousResultID;
    }
    /**
     * 
     *
     * @param int $previousResultID
     *
     * @return self
     */
    public function setPreviousResultID(int $previousResultID) : self
    {
        $this->initialized['previousResultID'] = true;
        $this->previousResultID = $previousResultID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReasonListed() : string
    {
        return $this->reasonListed;
    }
    /**
     * 
     *
     * @param string $reasonListed
     *
     * @return self
     */
    public function setReasonListed(string $reasonListed) : self
    {
        $this->initialized['reasonListed'] = true;
        $this->reasonListed = $reasonListed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResultDate() : string
    {
        return $this->resultDate;
    }
    /**
     * 
     *
     * @param string $resultDate
     *
     * @return self
     */
    public function setResultDate(string $resultDate) : self
    {
        $this->initialized['resultDate'] = true;
        $this->resultDate = $resultDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSecondaryOFACScreeningIndicatorMatch() : bool
    {
        return $this->secondaryOFACScreeningIndicatorMatch;
    }
    /**
     * 
     *
     * @param bool $secondaryOFACScreeningIndicatorMatch
     *
     * @return self
     */
    public function setSecondaryOFACScreeningIndicatorMatch(bool $secondaryOFACScreeningIndicatorMatch) : self
    {
        $this->initialized['secondaryOFACScreeningIndicatorMatch'] = true;
        $this->secondaryOFACScreeningIndicatorMatch = $secondaryOFACScreeningIndicatorMatch;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTrueMatch() : bool
    {
        return $this->trueMatch;
    }
    /**
     * 
     *
     * @param bool $trueMatch
     *
     * @return self
     */
    public function setTrueMatch(bool $trueMatch) : self
    {
        $this->initialized['trueMatch'] = true;
        $this->trueMatch = $trueMatch;
        return $this;
    }
}