<?php

namespace PicturePark\API\Model;

class BusinessRule
{
    /**
     * User defined ID of the rule.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * Trigger point.
     *
     * @var BusinessRuleTriggerPoint|null
     */
    public ?BusinessRuleTriggerPoint $triggerPoint;
    /**
     * Enable.
     *
     * @var bool
     */
    public bool $isEnabled;
    /**
     * Language specific rule names.
     *
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * Language specific rule description.
     *
     * @var array<string, string>|null
     */
    public ?iterable $description;
    /**
     * Enable trace logs for this rule.
     *
     * @var bool
     */
    public bool $enableTracing;
    /**
     * @var string
     */
    public string $kind;
}