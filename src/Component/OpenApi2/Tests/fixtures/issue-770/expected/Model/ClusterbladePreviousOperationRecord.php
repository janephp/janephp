<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladePreviousOperationRecord
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
     * @var string
     */
    protected $operation;
    /**
     * success of previousOperationRecord
     *
     * @var bool
     */
    protected $success;
    /**
     * errorMsg of previousOperationRecord
     *
     * @var string
     */
    protected $errorMsg;
    /**
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }
    /**
     * @param string $operation
     *
     * @return self
     */
    public function setOperation(string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
    /**
     * success of previousOperationRecord
     *
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }
    /**
     * success of previousOperationRecord
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * errorMsg of previousOperationRecord
     *
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }
    /**
     * errorMsg of previousOperationRecord
     *
     * @param string $errorMsg
     *
     * @return self
     */
    public function setErrorMsg(string $errorMsg): self
    {
        $this->initialized['errorMsg'] = true;
        $this->errorMsg = $errorMsg;
        return $this;
    }
}