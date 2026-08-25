<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListAgentVersionsOutput implements AdditionalPropertiesInterface
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
     * Agents
     *
     * @var list<ApiAgentVersion>
     */
    protected $agentVersions;
    /**
     * Links to other pages
     *
     * @var ApiLinks
     */
    protected $links;
    /**
     * Meta information about the data set
     *
     * @var ApiMeta
     */
    protected $meta;
    /**
     * Agents
     *
     * @return list<ApiAgentVersion>
     */
    public function getAgentVersions(): array
    {
        return $this->agentVersions;
    }
    /**
     * Agents
     *
     * @param list<ApiAgentVersion> $agentVersions
     *
     * @return self
     */
    public function setAgentVersions(array $agentVersions): self
    {
        $this->initialized['agentVersions'] = true;
        $this->agentVersions = $agentVersions;
        return $this;
    }
    /**
     * Links to other pages
     *
     * @return ApiLinks
     */
    public function getLinks(): ApiLinks
    {
        return $this->links;
    }
    /**
     * Links to other pages
     *
     * @param ApiLinks $links
     *
     * @return self
     */
    public function setLinks(ApiLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * Meta information about the data set
     *
     * @return ApiMeta
     */
    public function getMeta(): ApiMeta
    {
        return $this->meta;
    }
    /**
     * Meta information about the data set
     *
     * @param ApiMeta $meta
     *
     * @return self
     */
    public function setMeta(ApiMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agentVersions' => ['agent_versions', 'getAgentVersions', 'setAgentVersions'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}