<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppMaintenanceSpec implements AdditionalPropertiesInterface
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
     * Indicates whether maintenance mode should be enabled for the app.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Indicates whether the app should be archived. Setting this to true implies that enabled is set to true.
     *
     * @var bool
     */
    protected $archive;
    /**
     * A custom offline page to display when maintenance mode is enabled or the app is archived.
     *
     * @var string
     */
    protected $offlinePageUrl;
    /**
     * Indicates whether maintenance mode should be enabled for the app.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates whether maintenance mode should be enabled for the app.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Indicates whether the app should be archived. Setting this to true implies that enabled is set to true.
     *
     * @return bool
     */
    public function getArchive(): bool
    {
        return $this->archive;
    }
    /**
     * Indicates whether the app should be archived. Setting this to true implies that enabled is set to true.
     *
     * @param bool $archive
     *
     * @return self
     */
    public function setArchive(bool $archive): self
    {
        $this->initialized['archive'] = true;
        $this->archive = $archive;
        return $this;
    }
    /**
     * A custom offline page to display when maintenance mode is enabled or the app is archived.
     *
     * @return string
     */
    public function getOfflinePageUrl(): string
    {
        return $this->offlinePageUrl;
    }
    /**
     * A custom offline page to display when maintenance mode is enabled or the app is archived.
     *
     * @param string $offlinePageUrl
     *
     * @return self
     */
    public function setOfflinePageUrl(string $offlinePageUrl): self
    {
        $this->initialized['offlinePageUrl'] = true;
        $this->offlinePageUrl = $offlinePageUrl;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['enabled' => ['enabled', 'getEnabled', 'setEnabled'], 'archive' => ['archive', 'getArchive', 'setArchive'], 'offlinePageUrl' => ['offline_page_url', 'getOfflinePageUrl', 'setOfflinePageUrl']];
    }
}