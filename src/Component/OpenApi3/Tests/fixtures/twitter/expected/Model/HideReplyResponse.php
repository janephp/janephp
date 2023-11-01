<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class HideReplyResponse extends \ArrayObject
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
     * @var HideReplyResponseData
     */
    protected $data;
    /**
     * 
     *
     * @return HideReplyResponseData
     */
    public function getData() : HideReplyResponseData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param HideReplyResponseData $data
     *
     * @return self
     */
    public function setData(HideReplyResponseData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}