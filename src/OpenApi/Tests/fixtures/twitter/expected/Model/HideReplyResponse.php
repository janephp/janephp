<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class HideReplyResponse
{
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
        $this->data = $data;
        return $this;
    }
}