<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class FileTransferDetail implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of file transfer.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of file transfer.
     *
     * @var string
     */
    public string $name;
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $identifier;
    /**
     * Client provided identifier.
     *
     * @var string
     */
    public string $requestId;
    /**
     * ID of transfer.
     *
     * @var string
     */
    public string $transferId;
    /**
     * State of file transfer.
     *
     * @var string
     */
    public string $state;
    /**
     * ID of Content created for file.
     *
     * @var string|null
     */
    public ?string $contentId;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    public UserAudit $audit;
    /**
     * Metadata extracted for file.
     *
     * @var FileMetadata|null
     */
    public ?FileMetadata $fileMetadata;
    /**
     * Outputs rendered during data extraction phase.
     *
     * @var list<FileTransferOutput>|null
     */
    public ?array $outputItems;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'identifier' => 'identifier', 'requestId' => 'requestId', 'transferId' => 'transferId', 'state' => 'state', 'contentId' => 'contentId', 'audit' => 'audit', 'fileMetadata' => 'fileMetadata', 'outputItems' => 'outputItems'];
    }
}