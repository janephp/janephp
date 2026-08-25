<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorDetailsAdditionalData implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $disqualified;
    /**
     * @var bool
     */
    protected $disqualifiedException;
    /**
     * @return bool
     */
    public function getDisqualified(): bool
    {
        return $this->disqualified;
    }
    /**
     * @param bool $disqualified
     *
     * @return self
     */
    public function setDisqualified(bool $disqualified): self
    {
        $this->initialized['disqualified'] = true;
        $this->disqualified = $disqualified;
        return $this;
    }
    /**
     * @return bool
     */
    public function getDisqualifiedException(): bool
    {
        return $this->disqualifiedException;
    }
    /**
     * @param bool $disqualifiedException
     *
     * @return self
     */
    public function setDisqualifiedException(bool $disqualifiedException): self
    {
        $this->initialized['disqualifiedException'] = true;
        $this->disqualifiedException = $disqualifiedException;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['disqualified' => ['disqualified', 'getDisqualified', 'setDisqualified'], 'disqualifiedException' => ['disqualifiedException', 'getDisqualifiedException', 'setDisqualifiedException']];
    }
}