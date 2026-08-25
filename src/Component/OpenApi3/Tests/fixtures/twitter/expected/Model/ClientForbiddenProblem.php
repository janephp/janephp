<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class ClientForbiddenProblem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var string
     */
    protected $registrationUrl;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $detail;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * @return string
     */
    public function getRegistrationUrl(): string
    {
        return $this->registrationUrl;
    }
    /**
     * @param string $registrationUrl
     *
     * @return self
     */
    public function setRegistrationUrl(string $registrationUrl): self
    {
        $this->initialized['registrationUrl'] = true;
        $this->registrationUrl = $registrationUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }
    /**
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'reason' => ['reason', 'getReason', 'setReason'], 'registrationUrl' => ['registration_url', 'getRegistrationUrl', 'setRegistrationUrl'], 'title' => ['title', 'getTitle', 'setTitle'], 'detail' => ['detail', 'getDetail', 'setDetail']];
    }
}