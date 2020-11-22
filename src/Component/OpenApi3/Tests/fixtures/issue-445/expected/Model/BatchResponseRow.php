<?php

namespace PicturePark\API\Model;

class BatchResponseRow
{
    /**
     * Id of the item.
     *
     * @var string
     */
    protected $id;
    /**
     * Indicates if the operation succeeded.
     *
     * @var bool
     */
    protected $succeeded;
    /**
     * Status code of the operation.
     *
     * @var int
     */
    protected $status;
    /**
     * New version of the item.
     *
     * @var int
     */
    protected $version;
    /**
     * If the operation did not succeed, this contains error information.
     *
     * @var mixed|null
     */
    protected $error;
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * Id of the item.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Id of the item.
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
     * Indicates if the operation succeeded.
     *
     * @return bool
     */
    public function getSucceeded() : bool
    {
        return $this->succeeded;
    }
    /**
     * Indicates if the operation succeeded.
     *
     * @param bool $succeeded
     *
     * @return self
     */
    public function setSucceeded(bool $succeeded) : self
    {
        $this->succeeded = $succeeded;
        return $this;
    }
    /**
     * Status code of the operation.
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * Status code of the operation.
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * New version of the item.
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * New version of the item.
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * If the operation did not succeed, this contains error information.
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * If the operation did not succeed, this contains error information.
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @return string|null
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @param string|null $requestId
     *
     * @return self
     */
    public function setRequestId(?string $requestId) : self
    {
        $this->requestId = $requestId;
        return $this;
    }
}