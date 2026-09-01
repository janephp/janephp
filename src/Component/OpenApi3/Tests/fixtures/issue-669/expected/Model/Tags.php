<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Tags implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores.
     * There is a limit of 255 characters per tag.
     * 
     * **Note:** Tag names are case stable, which means the capitalization you use when you first create a tag is canonical.
     * 
     * When working with tags in the API, you must use the tag's canonical capitalization. For example, if you create a tag named "PROD", the URL to add that tag to a resource would be `https://api.digitalocean.com/v2/tags/PROD/resources` (not `/v2/tags/prod/resources`).
     * 
     * Tagged resources in the control panel will always display the canonical capitalization. For example, if you create a tag named "PROD", you can tag resources in the control panel by entering "prod". The tag will still display with its canonical capitalization, "PROD".
     * 
     *
     * @var string
     */
    public string $name;
    /**
     * An embedded object containing key value pairs of resource type and resource statistics.
     * It also includes a count of the total number of resources tagged with the current tag as well as a `last_tagged_uri` attribute set to the last resource tagged with the current tag.
     * 
     * This will only include resources that you are authorized to see. For example, to see tagged Droplets, include the `droplet:read` scope.
     * 
     *
     * @var array<string, mixed>
     */
    public iterable $resources;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'resources' => 'resources'];
    }
}