<?php

namespace PicturePark\API\Model;

class BusinessRuleConfiguration
{
    /**
     * Disables the rule completely.
     *
     * @var bool
     */
    protected $disableRuleEngine;
    /**
     * Rules
     *
     * @var BusinessRule[]|null
     */
    protected $rules;
    /**
     * Named caches.
     *
     * @var NamedCacheConfigurationBase[]|null
     */
    protected $caches;
    /**
     * Disables the rule completely.
     *
     * @return bool
     */
    public function getDisableRuleEngine() : bool
    {
        return $this->disableRuleEngine;
    }
    /**
     * Disables the rule completely.
     *
     * @param bool $disableRuleEngine
     *
     * @return self
     */
    public function setDisableRuleEngine(bool $disableRuleEngine) : self
    {
        $this->disableRuleEngine = $disableRuleEngine;
        return $this;
    }
    /**
     * Rules
     *
     * @return BusinessRule[]|null
     */
    public function getRules() : ?array
    {
        return $this->rules;
    }
    /**
     * Rules
     *
     * @param BusinessRule[]|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules) : self
    {
        $this->rules = $rules;
        return $this;
    }
    /**
     * Named caches.
     *
     * @return NamedCacheConfigurationBase[]|null
     */
    public function getCaches() : ?array
    {
        return $this->caches;
    }
    /**
     * Named caches.
     *
     * @param NamedCacheConfigurationBase[]|null $caches
     *
     * @return self
     */
    public function setCaches(?array $caches) : self
    {
        $this->caches = $caches;
        return $this;
    }
}