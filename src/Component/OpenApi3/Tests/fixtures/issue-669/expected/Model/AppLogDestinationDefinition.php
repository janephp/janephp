<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppLogDestinationDefinition extends \ArrayObject
{
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
    protected $name;
    /**
     * Papertrail configuration.
     *
     * @var AppLogDestinationPapertrailSpec
     */
    protected $papertrail;
    /**
     * DataDog configuration.
     *
     * @var AppLogDestinationDatadogSpec
     */
    protected $datadog;
    /**
     * Logtail configuration.
     *
     * @var AppLogDestinationLogtailSpec
     */
    protected $logtail;
    /**
     * OpenSearch configuration.
     *
     * @var AppLogDestinationOpenSearchSpec
     */
    protected $openSearch;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Papertrail configuration.
     *
     * @return AppLogDestinationPapertrailSpec
     */
    public function getPapertrail(): AppLogDestinationPapertrailSpec
    {
        return $this->papertrail;
    }
    /**
     * Papertrail configuration.
     *
     * @param AppLogDestinationPapertrailSpec $papertrail
     *
     * @return self
     */
    public function setPapertrail(AppLogDestinationPapertrailSpec $papertrail): self
    {
        $this->initialized['papertrail'] = true;
        $this->papertrail = $papertrail;
        return $this;
    }
    /**
     * DataDog configuration.
     *
     * @return AppLogDestinationDatadogSpec
     */
    public function getDatadog(): AppLogDestinationDatadogSpec
    {
        return $this->datadog;
    }
    /**
     * DataDog configuration.
     *
     * @param AppLogDestinationDatadogSpec $datadog
     *
     * @return self
     */
    public function setDatadog(AppLogDestinationDatadogSpec $datadog): self
    {
        $this->initialized['datadog'] = true;
        $this->datadog = $datadog;
        return $this;
    }
    /**
     * Logtail configuration.
     *
     * @return AppLogDestinationLogtailSpec
     */
    public function getLogtail(): AppLogDestinationLogtailSpec
    {
        return $this->logtail;
    }
    /**
     * Logtail configuration.
     *
     * @param AppLogDestinationLogtailSpec $logtail
     *
     * @return self
     */
    public function setLogtail(AppLogDestinationLogtailSpec $logtail): self
    {
        $this->initialized['logtail'] = true;
        $this->logtail = $logtail;
        return $this;
    }
    /**
     * OpenSearch configuration.
     *
     * @return AppLogDestinationOpenSearchSpec
     */
    public function getOpenSearch(): AppLogDestinationOpenSearchSpec
    {
        return $this->openSearch;
    }
    /**
     * OpenSearch configuration.
     *
     * @param AppLogDestinationOpenSearchSpec $openSearch
     *
     * @return self
     */
    public function setOpenSearch(AppLogDestinationOpenSearchSpec $openSearch): self
    {
        $this->initialized['openSearch'] = true;
        $this->openSearch = $openSearch;
        return $this;
    }
}