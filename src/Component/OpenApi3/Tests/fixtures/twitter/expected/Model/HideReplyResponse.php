<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class HideReplyResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var HideReplyResponseData
     */
    protected $data;
    /**
     * @return HideReplyResponseData
     */
    public function getData(): HideReplyResponseData
    {
        return $this->data;
    }
    /**
     * @param HideReplyResponseData $data
     *
     * @return self
     */
    public function setData(HideReplyResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData']];
    }
}