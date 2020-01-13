<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class TweetSearchResponse
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $data;
    /**
     * 
     *
     * @var Expansions
     */
    protected $includes;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $errors;
    /**
     * 
     *
     * @var TweetSearchResponseMeta
     */
    protected $meta;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed[] $data
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
     * @return Expansions
     */
    public function getIncludes() : Expansions
    {
        return $this->includes;
    }
    /**
     * 
     *
     * @param Expansions $includes
     *
     * @return self
     */
    public function setIncludes(Expansions $includes) : self
    {
        $this->includes = $includes;
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
    /**
     * 
     *
     * @return TweetSearchResponseMeta
     */
    public function getMeta() : TweetSearchResponseMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param TweetSearchResponseMeta $meta
     *
     * @return self
     */
    public function setMeta(TweetSearchResponseMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}