<?php

namespace PicturePark\API\Model;

class BusinessRuleConfigurationUpdateRequest
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
     * Disables the rule engine completely.
     *
     * @var bool
     */
    protected $disableRuleEngine;
    /**
     * Rules.
     *
     * @var list<BusinessRule>|null
     */
    protected $rules;
    /**
     * Named caches.
     *
     * @var list<NamedCacheConfigurationBase>|null
     */
    protected $caches;
    /**
     * Disables the rule engine completely.
     *
     * @return bool
     */
    public function getDisableRuleEngine() : bool
    {
        return $this->disableRuleEngine;
    }
    /**
     * Disables the rule engine completely.
     *
     * @param bool $disableRuleEngine
     *
     * @return self
     */
    public function setDisableRuleEngine(bool $disableRuleEngine) : self
    {
        $this->initialized['disableRuleEngine'] = true;
        $this->disableRuleEngine = $disableRuleEngine;
        return $this;
    }
    /**
     * Rules.
     *
     * @return list<BusinessRule>|null
     */
    public function getRules() : ?array
    {
        return $this->rules;
    }
    /**
     * Rules.
     *
     * @param list<BusinessRule>|null $rules
     *
     * @return self
     */
    public function setRules(?array $rules) : self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;
        return $this;
    }
    /**
     * Named caches.
     *
     * @return list<NamedCacheConfigurationBase>|null
     */
    public function getCaches() : ?array
    {
        return $this->caches;
    }
    /**
     * Named caches.
     *
     * @param list<NamedCacheConfigurationBase>|null $caches
     *
     * @return self
     */
    public function setCaches(?array $caches) : self
    {
        $this->initialized['caches'] = true;
        $this->caches = $caches;
        return $this;
    }
}