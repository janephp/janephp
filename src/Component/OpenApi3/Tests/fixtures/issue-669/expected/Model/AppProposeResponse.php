<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppProposeResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the app is a static app.
     *
     * @var bool
     */
    public bool $appIsStatic;
    /**
     * Indicates whether the app name is available.
     *
     * @var bool
     */
    public bool $appNameAvailable;
    /**
     * The suggested name if the proposed app name is unavailable.
     *
     * @var string
     */
    public string $appNameSuggestion;
    /**
     * The maximum number of free static apps the account can have. We will charge you for any additional static apps.
     *
     * @var string
     */
    public string $existingStaticApps;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * The monthly cost of the proposed app in USD.
     *
     * @var int
     */
    public int $appCost;
    /**
     * The monthly cost of the proposed app in USD using the previous pricing plan tier. For example, if you propose an app that uses the Professional tier, the `app_tier_downgrade_cost` field displays the monthly cost of the app if it were to use the Basic tier. If the proposed app already uses the lest expensive tier, the field is empty.
     *
     * @deprecated
     *
     * @var int
     */
    public int $appTierDowngradeCost;
    public function definedProperties(): array
    {
        return ['appIsStatic' => 'app_is_static', 'appNameAvailable' => 'app_name_available', 'appNameSuggestion' => 'app_name_suggestion', 'existingStaticApps' => 'existing_static_apps', 'spec' => 'spec', 'appCost' => 'app_cost', 'appTierDowngradeCost' => 'app_tier_downgrade_cost'];
    }
}