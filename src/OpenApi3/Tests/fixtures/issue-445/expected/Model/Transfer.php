<?php

namespace PicturePark\API\Model;

class Transfer
{
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
     * ID of transfer.
     *
     * @return string
     */
    public function getId() : string
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
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
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
    public function setState($state) : self
    {
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
    public function setTransferType($transferType) : self
    {
        $this->transferType = $transferType;
        return $this;
    }
    /**
     * Associated business process ID.
     *
     * @return string|null
     */
    public function getBusinessProcessId() : ?string
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
    public function setBusinessProcessId(?string $businessProcessId) : self
    {
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    /**
     * Number of files in transfer.
     *
     * @return int
     */
    public function getFileTransferCount() : int
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
    public function setFileTransferCount(int $fileTransferCount) : self
    {
        $this->fileTransferCount = $fileTransferCount;
        return $this;
    }
    /**
     * ID of collection created from transfer.
     *
     * @return string|null
     */
    public function getCollectionId() : ?string
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
    public function setCollectionId(?string $collectionId) : self
    {
        $this->collectionId = $collectionId;
        return $this;
    }
}