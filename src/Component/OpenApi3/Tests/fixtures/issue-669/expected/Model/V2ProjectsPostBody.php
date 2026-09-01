<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2ProjectsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique universal identifier of this project.
     *
     * @var string
     */
    public string $id;
    /**
     * The unique universal identifier of the project owner.
     *
     * @var string
     */
    public string $ownerUuid;
    /**
     * The integer id of the project owner.
     *
     * @var int
     */
    public int $ownerId;
    /**
     * The human-readable name for the project. The maximum length is 175 characters and the name must be unique.
     *
     * @var string
     */
    public string $name;
    /**
     * The description of the project. The maximum length is 255 characters.
     *
     * @var string
     */
    public string $description;
    /**
     * The purpose of the project. The maximum length is 255 characters. It can
     * have one of the following values:
     * 
     * - Just trying out DigitalOcean
     * - Class project / Educational purposes
     * - Website or blog
     * - Web Application
     * - Service or API
     * - Mobile Application
     * - Machine learning / AI / Data processing
     * - IoT
     * - Operational / Developer tooling
     * 
     * If another value for purpose is specified, for example, "your custom purpose",
     * your purpose will be stored as `Other: your custom purpose`.
     * 
     *
     * @var string
     */
    public string $purpose;
    /**
     * The environment of the project's resources.
     *
     * @var string
     */
    public string $environment;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'ownerUuid' => 'owner_uuid', 'ownerId' => 'owner_id', 'name' => 'name', 'description' => 'description', 'purpose' => 'purpose', 'environment' => 'environment', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}