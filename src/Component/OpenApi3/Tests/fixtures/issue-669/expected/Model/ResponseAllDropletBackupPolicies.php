<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllDropletBackupPolicies implements AdditionalPropertiesInterface
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
     * A map where the keys are the Droplet IDs and the values are
     * objects containing the backup policy information for each Droplet.
     * 
     *
     * @var array<string, DropletBackupPolicyRecord>
     */
    protected $policies;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * A map where the keys are the Droplet IDs and the values are
     * objects containing the backup policy information for each Droplet.
     * 
     *
     * @return array<string, DropletBackupPolicyRecord>
     */
    public function getPolicies(): iterable
    {
        return $this->policies;
    }
    /**
    * A map where the keys are the Droplet IDs and the values are
    objects containing the backup policy information for each Droplet.
    
    *
    * @param array<string, DropletBackupPolicyRecord> $policies
    *
    * @return self
    */
    public function setPolicies(iterable $policies): self
    {
        $this->initialized['policies'] = true;
        $this->policies = $policies;
        return $this;
    }
    /**
     * @return PageLinks
     */
    public function getLinks(): PageLinks
    {
        return $this->links;
    }
    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return MetaMeta
     */
    public function getMeta(): MetaMeta
    {
        return $this->meta;
    }
    /**
     * @param MetaMeta $meta
     *
     * @return self
     */
    public function setMeta(MetaMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['policies' => ['policies', 'getPolicies', 'setPolicies'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}