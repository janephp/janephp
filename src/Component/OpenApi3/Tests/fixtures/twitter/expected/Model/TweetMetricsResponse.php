<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TweetMetricsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<TweetMetrics>
     */
    protected $data;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $errors;
    /**
     * 
     *
     * @return list<TweetMetrics>
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<TweetMetrics> $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<mixed> $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}