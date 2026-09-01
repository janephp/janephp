<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Planet
{
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string|null
     */
    public ?string $description;
    /**
     * @var string
     */
    public string $type;
    /**
     * A score from 0 to 1 indicating potential habitability
     *
     * @var float
     */
    public float $habitabilityIndex;
    /**
     * @var PlanetPhysicalProperties
     */
    public PlanetPhysicalProperties $physicalProperties;
    /**
     * Atmospheric composition
     *
     * @var list<PlanetAtmosphereItem>
     */
    public array $atmosphere;
    /**
     * @var \DateTime
     */
    public \DateTime $discoveredAt;
    /**
     * @var string|null
     */
    public ?string $image;
    /**
     * @var list<Satellite>
     */
    public array $satellites;
    /**
     * A user
     *
     * @var User
     */
    public User $creator;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var \DateTime
     */
    public \DateTime $lastUpdated;
    /**
     * URL which gets invoked upon a successful operation
     *
     * @var string
     */
    public string $successCallbackUrl;
    /**
     * URL which gets invoked upon a failed operation
     *
     * @var string
     */
    public string $failureCallbackUrl;
}