<?php

namespace PicturePark\API\Model;

class TransferDetail extends \ArrayObject
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
     * ID of transfer.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of transfer.
     *
     * @var string
     */
    protected $name;
    /**
     * State of transfer.
     *
     * @var mixed
     */
    protected $state;
    /**
     * Type of transfer.
     *
     * @var mixed
     */
    protected $transferType;
    /**
     * Associated business process ID.
     *
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * Number of files in transfer.
     *
     * @var int
     */
    protected $fileTransferCount;
    /**
     * ID of collection created from transfer.
     *
     * @var string|null
     */
    protected $collectionId;
    /**
     * Audit information.
     *
     * @var mixed
     */
    protected $audit;
    /**
     * Number of items processed.
     *
     * @var int
     */
    protected $itemProgress;
    /**
     * Total number of items.
     *
     * @var int
     */
    protected $itemCount;
    /**
     * Number of items currently being uploaded.
     *
     * @var int
     */
    protected $fileUploadInProgressCount;
    /**
     * Number of items currently being processed in data extraction.
     *
     * @var int
     */
    protected $dataExtractionInProgressCount;
    /**
     * Number of items failed.
     *
     * @var int
     */
    protected $itemsFailed;
    /**
     * Number of items cancelled.
     *
     * @var int
     */
    protected $itemsCancelled;
    /**
     * Time stamp of last progress update from data extraction.
     *
     * @var \DateTime|null
     */
    protected $lastDataExtractionProgressTimeStamp;
    /**
     * Time stamp of last progress update from upload.
     *
     * @var \DateTime|null
     */
    protected $lastFileUploadProgressTimeStamp;
    /**
     * ID of transfer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of transfer.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of transfer.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of transfer.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * State of transfer.
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * State of transfer.
     *
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Type of transfer.
     *
     * @return mixed
     */
    public function getTransferType()
    {
        return $this->transferType;
    }
    /**
     * Type of transfer.
     *
     * @param mixed $transferType
     *
     * @return self
     */
    public function setTransferType($transferType): self
    {
        $this->initialized['transferType'] = true;
        $this->transferType = $transferType;
        return $this;
    }
    /**
     * Associated business process ID.
     *
     * @return string|null
     */
    public function getBusinessProcessId(): ?string
    {
        return $this->businessProcessId;
    }
    /**
     * Associated business process ID.
     *
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId): self
    {
        $this->initialized['businessProcessId'] = true;
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    /**
     * Number of files in transfer.
     *
     * @return int
     */
    public function getFileTransferCount(): int
    {
        return $this->fileTransferCount;
    }
    /**
     * Number of files in transfer.
     *
     * @param int $fileTransferCount
     *
     * @return self
     */
    public function setFileTransferCount(int $fileTransferCount): self
    {
        $this->initialized['fileTransferCount'] = true;
        $this->fileTransferCount = $fileTransferCount;
        return $this;
    }
    /**
     * ID of collection created from transfer.
     *
     * @return string|null
     */
    public function getCollectionId(): ?string
    {
        return $this->collectionId;
    }
    /**
     * ID of collection created from transfer.
     *
     * @param string|null $collectionId
     *
     * @return self
     */
    public function setCollectionId(?string $collectionId): self
    {
        $this->initialized['collectionId'] = true;
        $this->collectionId = $collectionId;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * Number of items processed.
     *
     * @return int
     */
    public function getItemProgress(): int
    {
        return $this->itemProgress;
    }
    /**
     * Number of items processed.
     *
     * @param int $itemProgress
     *
     * @return self
     */
    public function setItemProgress(int $itemProgress): self
    {
        $this->initialized['itemProgress'] = true;
        $this->itemProgress = $itemProgress;
        return $this;
    }
    /**
     * Total number of items.
     *
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->itemCount;
    }
    /**
     * Total number of items.
     *
     * @param int $itemCount
     *
     * @return self
     */
    public function setItemCount(int $itemCount): self
    {
        $this->initialized['itemCount'] = true;
        $this->itemCount = $itemCount;
        return $this;
    }
    /**
     * Number of items currently being uploaded.
     *
     * @return int
     */
    public function getFileUploadInProgressCount(): int
    {
        return $this->fileUploadInProgressCount;
    }
    /**
     * Number of items currently being uploaded.
     *
     * @param int $fileUploadInProgressCount
     *
     * @return self
     */
    public function setFileUploadInProgressCount(int $fileUploadInProgressCount): self
    {
        $this->initialized['fileUploadInProgressCount'] = true;
        $this->fileUploadInProgressCount = $fileUploadInProgressCount;
        return $this;
    }
    /**
     * Number of items currently being processed in data extraction.
     *
     * @return int
     */
    public function getDataExtractionInProgressCount(): int
    {
        return $this->dataExtractionInProgressCount;
    }
    /**
     * Number of items currently being processed in data extraction.
     *
     * @param int $dataExtractionInProgressCount
     *
     * @return self
     */
    public function setDataExtractionInProgressCount(int $dataExtractionInProgressCount): self
    {
        $this->initialized['dataExtractionInProgressCount'] = true;
        $this->dataExtractionInProgressCount = $dataExtractionInProgressCount;
        return $this;
    }
    /**
     * Number of items failed.
     *
     * @return int
     */
    public function getItemsFailed(): int
    {
        return $this->itemsFailed;
    }
    /**
     * Number of items failed.
     *
     * @param int $itemsFailed
     *
     * @return self
     */
    public function setItemsFailed(int $itemsFailed): self
    {
        $this->initialized['itemsFailed'] = true;
        $this->itemsFailed = $itemsFailed;
        return $this;
    }
    /**
     * Number of items cancelled.
     *
     * @return int
     */
    public function getItemsCancelled(): int
    {
        return $this->itemsCancelled;
    }
    /**
     * Number of items cancelled.
     *
     * @param int $itemsCancelled
     *
     * @return self
     */
    public function setItemsCancelled(int $itemsCancelled): self
    {
        $this->initialized['itemsCancelled'] = true;
        $this->itemsCancelled = $itemsCancelled;
        return $this;
    }
    /**
     * Time stamp of last progress update from data extraction.
     *
     * @return \DateTime|null
     */
    public function getLastDataExtractionProgressTimeStamp(): ?\DateTime
    {
        return $this->lastDataExtractionProgressTimeStamp;
    }
    /**
     * Time stamp of last progress update from data extraction.
     *
     * @param \DateTime|null $lastDataExtractionProgressTimeStamp
     *
     * @return self
     */
    public function setLastDataExtractionProgressTimeStamp(?\DateTime $lastDataExtractionProgressTimeStamp): self
    {
        $this->initialized['lastDataExtractionProgressTimeStamp'] = true;
        $this->lastDataExtractionProgressTimeStamp = $lastDataExtractionProgressTimeStamp;
        return $this;
    }
    /**
     * Time stamp of last progress update from upload.
     *
     * @return \DateTime|null
     */
    public function getLastFileUploadProgressTimeStamp(): ?\DateTime
    {
        return $this->lastFileUploadProgressTimeStamp;
    }
    /**
     * Time stamp of last progress update from upload.
     *
     * @param \DateTime|null $lastFileUploadProgressTimeStamp
     *
     * @return self
     */
    public function setLastFileUploadProgressTimeStamp(?\DateTime $lastFileUploadProgressTimeStamp): self
    {
        $this->initialized['lastFileUploadProgressTimeStamp'] = true;
        $this->lastFileUploadProgressTimeStamp = $lastFileUploadProgressTimeStamp;
        return $this;
    }
}