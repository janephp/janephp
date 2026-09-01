<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImagesDataItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $imageId;
    /**
     * @var ListCompanyImagesDataItemCompany
     */
    public ListCompanyImagesDataItemCompany $company;
    /**
     * @var ListCompanyImagesDataItemDocument
     */
    public ListCompanyImagesDataItemDocument $document;
    /**
     * @var string
     */
    public string $format;
    /**
     * @var string
     */
    public string $source;
    /**
     * @var string
     */
    public string $filingDate;
    /**
     * @var string
     */
    public string $uploadDate;
    /**
     * @var string
     */
    public string $accountingDate;
    /**
     * @var string
     */
    public string $language;
    /**
     * @var string
     */
    public string $comments;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var ListCompanyImagesDataItemLocalProperties
     */
    public ListCompanyImagesDataItemLocalProperties $localProperties;
    public function definedProperties(): array
    {
        return ['imageId' => 'imageId', 'company' => 'company', 'document' => 'document', 'format' => 'format', 'source' => 'source', 'filingDate' => 'filingDate', 'uploadDate' => 'uploadDate', 'accountingDate' => 'accountingDate', 'language' => 'language', 'comments' => 'comments', 'status' => 'status', 'localProperties' => 'localProperties'];
    }
}