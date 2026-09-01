<?php

namespace PicturePark\API\Model;

class BusinessRuleConfigurationUpdateRequest
{
    /**
     * Disables the rule engine completely.
     *
     * @var bool
     */
    public bool $disableRuleEngine;
    /**
     * Rules.
     *
     * @var list<BusinessRule>|null
     */
    public ?array $rules;
    /**
     * Named caches.
     *
     * @var list<NamedCacheConfigurationBase>|null
     */
    public ?array $caches;
}