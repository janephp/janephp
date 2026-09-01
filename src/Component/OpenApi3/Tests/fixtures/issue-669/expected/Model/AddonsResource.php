<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the addon resource.
     *
     * @var string
     */
    public string $uuid;
    /**
     * The name of the addon resource.
     *
     * @var string
     */
    public string $name;
    /**
     * The state the resource is currently in.
     *
     * @var string
     */
    public string $state;
    /**
     * The name of the application associated with the resource.
     *
     * @var string
     */
    public string $appName;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    public string $appSlug;
    /**
     * The name of the plan associated with the resource.
     *
     * @var string
     */
    public string $planName;
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @var string
     */
    public string $planSlug;
    /**
     * The price of the plan per month in US dollars.
     *
     * @var int
     */
    public int $planPricePerMonth;
    /**
     * Indicates if the resource has configuration values set by the vendor.
     *
     * @var bool
     */
    public bool $hasConfig;
    /**
     * Metadata associated with the resource, set by the user.
     *
     * @var list<AddonsResourceMetadata>
     */
    public array $metadata;
    /**
     * The Single Sign-On URL for the resource, if applicable.
     *
     * @var string
     */
    public string $ssoUrl;
    /**
     * A message related to the resource, if applicable.
     *
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'name' => 'name', 'state' => 'state', 'appName' => 'app_name', 'appSlug' => 'app_slug', 'planName' => 'plan_name', 'planSlug' => 'plan_slug', 'planPricePerMonth' => 'plan_price_per_month', 'hasConfig' => 'has_config', 'metadata' => 'metadata', 'ssoUrl' => 'sso_url', 'message' => 'message'];
    }
}