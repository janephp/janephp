<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMaintenanceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether maintenance mode should be enabled for the app.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * Indicates whether the app should be archived. Setting this to true implies that enabled is set to true.
     *
     * @var bool
     */
    public bool $archive;
    /**
     * A custom offline page to display when maintenance mode is enabled or the app is archived.
     *
     * @var string
     */
    public string $offlinePageUrl;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled', 'archive' => 'archive', 'offlinePageUrl' => 'offline_page_url'];
    }
}