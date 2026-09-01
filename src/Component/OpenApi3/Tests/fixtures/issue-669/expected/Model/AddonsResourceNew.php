<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsResourceNew implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    public string $appSlug;
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @var string
     */
    public string $planSlug;
    /**
     * The name of the addon resource.
     *
     * @var string
     */
    public string $name;
    /**
     * Metadata associated with the resource, set by the user. Metadata expected varies per app, and can be verified with a GET request to "/v2/add-ons/apps/{app_slug}/metadata"
     *
     * @var list<AddonsResourceMetadata>
     */
    public array $metadata;
    /**
     * ID of the droplet to be linked to this resource, if applicable.
     *
     * @var int
     */
    public int $linkedDropletId;
    /**
     * UUID of the fleet/project to which this resource will belong.
     *
     * @var string
     */
    public string $fleetUuid;
    public function definedProperties(): array
    {
        return ['appSlug' => 'app_slug', 'planSlug' => 'plan_slug', 'name' => 'name', 'metadata' => 'metadata', 'linkedDropletId' => 'linked_droplet_id', 'fleetUuid' => 'fleet_uuid'];
    }
}