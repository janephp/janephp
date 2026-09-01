<?php

namespace PicturePark\API\Model;

class CreateTransferRequest
{
    /**
     * Name of transfer.
     *
     * @var string
     */
    public string $name;
    /**
     * Type of transfer.
     *
     * @var string
     */
    public string $transferType;
    /**
     * Files uploaded in transfer.
     * The client is responsible for uploading files to backend.
     * Required when TransferType is FileUpload or FileUploadAutoImport.
     *
     * @var list<TransferUploadFile>|null
     */
    public ?array $files;
    /**
     * Weblinks downloaded in transfer.
     * The backend will download files using HTTP, therefore public access to files is needed.
     * Required when TransferType is WebDownload.
     *
     * @var list<TransferWebLink>|null
     */
    public ?array $webLinks;
    /**
     * Name of collection created after transfer.
     *
     * @var string|null
     */
    public ?string $collectionName;
    /**
     * A value indicating whether to create a collection after importing the transfer.
     *
     * @var bool
     */
    public bool $createCollection;
}