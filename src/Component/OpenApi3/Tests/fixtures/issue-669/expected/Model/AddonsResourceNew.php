<?php

namespace Jane\Generated\DigitalOcean\Model;

class AddonsResourceNew extends \ArrayObject
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
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    protected $appSlug;
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @var string
     */
    protected $planSlug;
    /**
     * The name of the addon resource.
     *
     * @var string
     */
    protected $name;
    /**
     * Metadata associated with the resource, set by the user. Metadata expected varies per app, and can be verified with a GET request to "/v2/add-ons/apps/{app_slug}/metadata"
     *
     * @var list<AddonsResourceMetadata>
     */
    protected $metadata;
    /**
     * ID of the droplet to be linked to this resource, if applicable.
     *
     * @var int
     */
    protected $linkedDropletId;
    /**
     * UUID of the fleet/project to which this resource will belong.
     *
     * @var string
     */
    protected $fleetUuid;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @return string
     */
    public function getAppSlug(): string
    {
        return $this->appSlug;
    }
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @param string $appSlug
     *
     * @return self
     */
    public function setAppSlug(string $appSlug): self
    {
        $this->initialized['appSlug'] = true;
        $this->appSlug = $appSlug;
        return $this;
    }
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @return string
     */
    public function getPlanSlug(): string
    {
        return $this->planSlug;
    }
    /**
     * The slug identifier for the plan associated with the resource.
     *
     * @param string $planSlug
     *
     * @return self
     */
    public function setPlanSlug(string $planSlug): self
    {
        $this->initialized['planSlug'] = true;
        $this->planSlug = $planSlug;
        return $this;
    }
    /**
     * The name of the addon resource.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the addon resource.
     *
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
     * Metadata associated with the resource, set by the user. Metadata expected varies per app, and can be verified with a GET request to "/v2/add-ons/apps/{app_slug}/metadata"
     *
     * @return list<AddonsResourceMetadata>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }
    /**
     * Metadata associated with the resource, set by the user. Metadata expected varies per app, and can be verified with a GET request to "/v2/add-ons/apps/{app_slug}/metadata"
     *
     * @param list<AddonsResourceMetadata> $metadata
     *
     * @return self
     */
    public function setMetadata(array $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * ID of the droplet to be linked to this resource, if applicable.
     *
     * @return int
     */
    public function getLinkedDropletId(): int
    {
        return $this->linkedDropletId;
    }
    /**
     * ID of the droplet to be linked to this resource, if applicable.
     *
     * @param int $linkedDropletId
     *
     * @return self
     */
    public function setLinkedDropletId(int $linkedDropletId): self
    {
        $this->initialized['linkedDropletId'] = true;
        $this->linkedDropletId = $linkedDropletId;
        return $this;
    }
    /**
     * UUID of the fleet/project to which this resource will belong.
     *
     * @return string
     */
    public function getFleetUuid(): string
    {
        return $this->fleetUuid;
    }
    /**
     * UUID of the fleet/project to which this resource will belong.
     *
     * @param string $fleetUuid
     *
     * @return self
     */
    public function setFleetUuid(string $fleetUuid): self
    {
        $this->initialized['fleetUuid'] = true;
        $this->fleetUuid = $fleetUuid;
        return $this;
    }
}