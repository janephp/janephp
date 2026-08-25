<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class UsageCapExceededProblem implements AdditionalPropertiesInterface
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
    protected $period;
    /**
     * @var string
     */
    protected $scope;
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
    public function getPeriod(): string
    {
        return $this->period;
    }
    /**
     * @param string $period
     *
     * @return self
     */
    public function setPeriod(string $period): self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }
    /**
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
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
        return ['type' => ['type', 'getType', 'setType'], 'period' => ['period', 'getPeriod', 'setPeriod'], 'scope' => ['scope', 'getScope', 'setScope'], 'title' => ['title', 'getTitle', 'setTitle'], 'detail' => ['detail', 'getDetail', 'setDetail']];
    }
}