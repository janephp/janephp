<?php

namespace CreditSafe\API\Model;

class ListCompanyImagesDataItem extends \ArrayObject
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
    protected $imageId;
    /**
     * 
     *
     * @var ListCompanyImagesDataItemCompany
     */
    protected $company;
    /**
     * 
     *
     * @var ListCompanyImagesDataItemDocument
     */
    protected $document;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $filingDate;
    /**
     * 
     *
     * @var string
     */
    protected $uploadDate;
    /**
     * 
     *
     * @var string
     */
    protected $accountingDate;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var ListCompanyImagesDataItemLocalProperties
     */
    protected $localProperties;
    /**
     * 
     *
     * @return string
     */
    public function getImageId() : string
    {
        return $this->imageId;
    }
    /**
     * 
     *
     * @param string $imageId
     *
     * @return self
     */
    public function setImageId(string $imageId) : self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;
        return $this;
    }
    /**
     * 
     *
     * @return ListCompanyImagesDataItemCompany
     */
    public function getCompany() : ListCompanyImagesDataItemCompany
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param ListCompanyImagesDataItemCompany $company
     *
     * @return self
     */
    public function setCompany(ListCompanyImagesDataItemCompany $company) : self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return ListCompanyImagesDataItemDocument
     */
    public function getDocument() : ListCompanyImagesDataItemDocument
    {
        return $this->document;
    }
    /**
     * 
     *
     * @param ListCompanyImagesDataItemDocument $document
     *
     * @return self
     */
    public function setDocument(ListCompanyImagesDataItemDocument $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFilingDate() : string
    {
        return $this->filingDate;
    }
    /**
     * 
     *
     * @param string $filingDate
     *
     * @return self
     */
    public function setFilingDate(string $filingDate) : self
    {
        $this->initialized['filingDate'] = true;
        $this->filingDate = $filingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUploadDate() : string
    {
        return $this->uploadDate;
    }
    /**
     * 
     *
     * @param string $uploadDate
     *
     * @return self
     */
    public function setUploadDate(string $uploadDate) : self
    {
        $this->initialized['uploadDate'] = true;
        $this->uploadDate = $uploadDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountingDate() : string
    {
        return $this->accountingDate;
    }
    /**
     * 
     *
     * @param string $accountingDate
     *
     * @return self
     */
    public function setAccountingDate(string $accountingDate) : self
    {
        $this->initialized['accountingDate'] = true;
        $this->accountingDate = $accountingDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return ListCompanyImagesDataItemLocalProperties
     */
    public function getLocalProperties() : ListCompanyImagesDataItemLocalProperties
    {
        return $this->localProperties;
    }
    /**
     * 
     *
     * @param ListCompanyImagesDataItemLocalProperties $localProperties
     *
     * @return self
     */
    public function setLocalProperties(ListCompanyImagesDataItemLocalProperties $localProperties) : self
    {
        $this->initialized['localProperties'] = true;
        $this->localProperties = $localProperties;
        return $this;
    }
}