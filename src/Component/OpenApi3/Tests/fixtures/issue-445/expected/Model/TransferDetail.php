<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TransferDetail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of transfer.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of transfer.
     *
     * @var string
     */
    public string $name;
    /**
     * State of transfer.
     *
     * @var string
     */
    public string $state;
    /**
     * Type of transfer.
     *
     * @var string
     */
    public string $transferType;
    /**
     * Associated business process ID.
     *
     * @var string|null
     */
    public ?string $businessProcessId;
    /**
     * Number of files in transfer.
     *
     * @var int
     */
    public int $fileTransferCount;
    /**
     * ID of collection created from transfer.
     *
     * @var string|null
     */
    public ?string $collectionId;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    public UserAudit $audit;
    /**
     * Number of items processed.
     *
     * @var int
     */
    public int $itemProgress;
    /**
     * Total number of items.
     *
     * @var int
     */
    public int $itemCount;
    /**
     * Number of items currently being uploaded.
     *
     * @var int
     */
    public int $fileUploadInProgressCount;
    /**
     * Number of items currently being processed in data extraction.
     *
     * @var int
     */
    public int $dataExtractionInProgressCount;
    /**
     * Number of items failed.
     *
     * @var int
     */
    public int $itemsFailed;
    /**
     * Number of items cancelled.
     *
     * @var int
     */
    public int $itemsCancelled;
    /**
     * Time stamp of last progress update from data extraction.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $lastDataExtractionProgressTimeStamp;
    /**
     * Time stamp of last progress update from upload.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $lastFileUploadProgressTimeStamp;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'state' => 'state', 'transferType' => 'transferType', 'businessProcessId' => 'businessProcessId', 'fileTransferCount' => 'fileTransferCount', 'collectionId' => 'collectionId', 'audit' => 'audit', 'itemProgress' => 'itemProgress', 'itemCount' => 'itemCount', 'fileUploadInProgressCount' => 'fileUploadInProgressCount', 'dataExtractionInProgressCount' => 'dataExtractionInProgressCount', 'itemsFailed' => 'itemsFailed', 'itemsCancelled' => 'itemsCancelled', 'lastDataExtractionProgressTimeStamp' => 'lastDataExtractionProgressTimeStamp', 'lastFileUploadProgressTimeStamp' => 'lastFileUploadProgressTimeStamp'];
    }
}