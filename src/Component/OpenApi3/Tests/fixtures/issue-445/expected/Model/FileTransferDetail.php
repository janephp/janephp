<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FileTransferDetail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * ID of file transfer.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of file transfer.
     *
     * @var string
     */
    protected $name;
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * Client provided identifier.
     *
     * @var string
     */
    protected $requestId;
    /**
     * ID of transfer.
     *
     * @var string
     */
    protected $transferId;
    /**
     * State of file transfer.
     *
     * @var string
     */
    protected $state;
    /**
     * ID of Content created for file.
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    protected $audit;
    /**
     * Metadata extracted for file.
     *
     * @var FileMetadata|null
     */
    protected $fileMetadata;
    /**
     * Outputs rendered during data extraction phase.
     *
     * @var list<FileTransferOutput>|null
     */
    protected $outputItems;
    /**
     * ID of file transfer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of file transfer.
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
     * Name of file transfer.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of file transfer.
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
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @param string|null $identifier
     *
     * @deprecated
     *
     * @return self
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Client provided identifier.
     *
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
    /**
     * Client provided identifier.
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * ID of transfer.
     *
     * @return string
     */
    public function getTransferId(): string
    {
        return $this->transferId;
    }
    /**
     * ID of transfer.
     *
     * @param string $transferId
     *
     * @return self
     */
    public function setTransferId(string $transferId): self
    {
        $this->initialized['transferId'] = true;
        $this->transferId = $transferId;
        return $this;
    }
    /**
     * State of file transfer.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State of file transfer.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * ID of Content created for file.
     *
     * @return string|null
     */
    public function getContentId(): ?string
    {
        return $this->contentId;
    }
    /**
     * ID of Content created for file.
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId): self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return UserAudit
     */
    public function getAudit(): UserAudit
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param UserAudit $audit
     *
     * @return self
     */
    public function setAudit(UserAudit $audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * Metadata extracted for file.
     *
     * @return FileMetadata|null
     */
    public function getFileMetadata(): ?FileMetadata
    {
        return $this->fileMetadata;
    }
    /**
     * Metadata extracted for file.
     *
     * @param FileMetadata|null $fileMetadata
     *
     * @return self
     */
    public function setFileMetadata(?FileMetadata $fileMetadata): self
    {
        $this->initialized['fileMetadata'] = true;
        $this->fileMetadata = $fileMetadata;
        return $this;
    }
    /**
     * Outputs rendered during data extraction phase.
     *
     * @return list<FileTransferOutput>|null
     */
    public function getOutputItems(): ?array
    {
        return $this->outputItems;
    }
    /**
     * Outputs rendered during data extraction phase.
     *
     * @param list<FileTransferOutput>|null $outputItems
     *
     * @return self
     */
    public function setOutputItems(?array $outputItems): self
    {
        $this->initialized['outputItems'] = true;
        $this->outputItems = $outputItems;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'identifier' => ['identifier', 'getIdentifier', 'setIdentifier'], 'requestId' => ['requestId', 'getRequestId', 'setRequestId'], 'transferId' => ['transferId', 'getTransferId', 'setTransferId'], 'state' => ['state', 'getState', 'setState'], 'contentId' => ['contentId', 'getContentId', 'setContentId'], 'audit' => ['audit', 'getAudit', 'setAudit'], 'fileMetadata' => ['fileMetadata', 'getFileMetadata', 'setFileMetadata'], 'outputItems' => ['outputItems', 'getOutputItems', 'setOutputItems']];
    }
}