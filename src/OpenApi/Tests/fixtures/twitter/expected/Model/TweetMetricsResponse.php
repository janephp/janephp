<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TweetMetricsResponse
{
    /**
     * 
     *
     * @var TweetMetrics[]
     */
    protected $data;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $errors;
    /**
     * 
     *
     * @return TweetMetrics[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param TweetMetrics[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param mixed[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}