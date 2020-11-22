<?php

namespace PicturePark\API\Model;

class CreateTransferRequest
{
    /**
     * Name of transfer.
     *
     * @var string
     */
    protected $name;
    /**
     * Type of transfer.
     *
     * @var mixed
     */
    protected $transferType;
    /**
    * Files uploaded in transfer.
    The client is responsible for uploading files to backend.
    Required when TransferType is FileUpload or FileUploadAutoImport.
    *
    * @var TransferUploadFile[]|null
    */
    protected $files;
    /**
    * Weblinks downloaded in transfer.
    The backend will download files using HTTP, therefore public access to files is needed.
    Required when TransferType is WebDownload.
    *
    * @var TransferWebLink[]|null
    */
    protected $webLinks;
    /**
     * Name of collection created after transfer.
     *
     * @var string|null
     */
    protected $collectionName;
    /**
     * A value indicating whether to create a collection after importing the transfer.
     *
     * @var bool
     */
    protected $createCollection;
    /**
     * Name of transfer.
     *
     * @return string
     */
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->name = $name;
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
    public function setTransferType($transferType) : self
    {
        $this->transferType = $transferType;
        return $this;
    }
    /**
    * Files uploaded in transfer.
    The client is responsible for uploading files to backend.
    Required when TransferType is FileUpload or FileUploadAutoImport.
    *
    * @return TransferUploadFile[]|null
    */
    public function getFiles() : ?array
    {
        return $this->files;
    }
    /**
    * Files uploaded in transfer.
    The client is responsible for uploading files to backend.
    Required when TransferType is FileUpload or FileUploadAutoImport.
    *
    * @param TransferUploadFile[]|null $files
    *
    * @return self
    */
    public function setFiles(?array $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
    * Weblinks downloaded in transfer.
    The backend will download files using HTTP, therefore public access to files is needed.
    Required when TransferType is WebDownload.
    *
    * @return TransferWebLink[]|null
    */
    public function getWebLinks() : ?array
    {
        return $this->webLinks;
    }
    /**
    * Weblinks downloaded in transfer.
    The backend will download files using HTTP, therefore public access to files is needed.
    Required when TransferType is WebDownload.
    *
    * @param TransferWebLink[]|null $webLinks
    *
    * @return self
    */
    public function setWebLinks(?array $webLinks) : self
    {
        $this->webLinks = $webLinks;
        return $this;
    }
    /**
     * Name of collection created after transfer.
     *
     * @return string|null
     */
    public function getCollectionName() : ?string
    {
        return $this->collectionName;
    }
    /**
     * Name of collection created after transfer.
     *
     * @param string|null $collectionName
     *
     * @return self
     */
    public function setCollectionName(?string $collectionName) : self
    {
        $this->collectionName = $collectionName;
        return $this;
    }
    /**
     * A value indicating whether to create a collection after importing the transfer.
     *
     * @return bool
     */
    public function getCreateCollection() : bool
    {
        return $this->createCollection;
    }
    /**
     * A value indicating whether to create a collection after importing the transfer.
     *
     * @param bool $createCollection
     *
     * @return self
     */
    public function setCreateCollection(bool $createCollection) : self
    {
        $this->createCollection = $createCollection;
        return $this;
    }
}