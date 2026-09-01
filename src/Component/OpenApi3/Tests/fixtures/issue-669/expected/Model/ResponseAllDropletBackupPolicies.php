<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAllDropletBackupPolicies implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A map where the keys are the Droplet IDs and the values are
     * objects containing the backup policy information for each Droplet.
     * 
     *
     * @var array<string, DropletBackupPolicyRecord>
     */
    public iterable $policies;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    /**
     * @var MetaMeta
     */
    public MetaMeta $meta;
    public function definedProperties(): array
    {
        return ['policies' => 'policies', 'links' => 'links', 'meta' => 'meta'];
    }
}