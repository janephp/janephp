<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ResponseProblemDetailsResponse500 extends \ArrayObject
{
    /**
     * http or custom status code corresponding to this operation
     *
     * @var int
     */
    protected $status;
    /**
     * http or custom status message corresponding to this operation
     *
     * @var string
     */
    protected $title;
    /**
     * Explanation for the status.
     *
     * @var string
     */
    protected $type;
    /**
     * More details about the error.
     *
     * @var string
     */
    protected $detail;
    /**
     * http or custom status code corresponding to this operation
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * http or custom status code corresponding to this operation
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
     * http or custom status message corresponding to this operation
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * http or custom status message corresponding to this operation
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Explanation for the status.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Explanation for the status.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * More details about the error.
     *
     * @return string
     */
    public function getDetail() : string
    {
        return $this->detail;
    }
    /**
     * More details about the error.
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
}