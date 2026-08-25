<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Project implements AdditionalPropertiesInterface
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
     * The unique universal identifier of this project.
     *
     * @var string
     */
    protected $id;
    /**
     * The unique universal identifier of the project owner.
     *
     * @var string
     */
    protected $ownerUuid;
    /**
     * The integer id of the project owner.
     *
     * @var int
     */
    protected $ownerId;
    /**
     * The human-readable name for the project. The maximum length is 175 characters and the name must be unique.
     *
     * @var string
     */
    protected $name;
    /**
     * The description of the project. The maximum length is 255 characters.
     *
     * @var string
     */
    protected $description;
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
    protected $purpose;
    /**
     * The environment of the project's resources.
     *
     * @var string
     */
    protected $environment;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * If true, all resources will be added to this project if no project is specified.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * The unique universal identifier of this project.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The unique universal identifier of this project.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The unique universal identifier of the project owner.
     *
     * @return string
     */
    public function getOwnerUuid(): string
    {
        return $this->ownerUuid;
    }
    /**
     * The unique universal identifier of the project owner.
     *
     * @param string $ownerUuid
     *
     * @return self
     */
    public function setOwnerUuid(string $ownerUuid): self
    {
        $this->initialized['ownerUuid'] = true;
        $this->ownerUuid = $ownerUuid;
        return $this;
    }
    /**
     * The integer id of the project owner.
     *
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }
    /**
     * The integer id of the project owner.
     *
     * @param int $ownerId
     *
     * @return self
     */
    public function setOwnerId(int $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * The human-readable name for the project. The maximum length is 175 characters and the name must be unique.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name for the project. The maximum length is 175 characters and the name must be unique.
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
     * The description of the project. The maximum length is 255 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * The description of the project. The maximum length is 255 characters.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
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
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }
    /**
    * The purpose of the project. The maximum length is 255 characters. It can
    have one of the following values:
    
    - Just trying out DigitalOcean
    - Class project / Educational purposes
    - Website or blog
    - Web Application
    - Service or API
    - Mobile Application
    - Machine learning / AI / Data processing
    - IoT
    - Operational / Developer tooling
    
    If another value for purpose is specified, for example, "your custom purpose",
    your purpose will be stored as `Other: your custom purpose`.
    
    *
    * @param string $purpose
    *
    * @return self
    */
    public function setPurpose(string $purpose): self
    {
        $this->initialized['purpose'] = true;
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * The environment of the project's resources.
     *
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }
    /**
     * The environment of the project's resources.
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment): self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * If true, all resources will be added to this project if no project is specified.
     *
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * If true, all resources will be added to this project if no project is specified.
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'ownerUuid' => ['owner_uuid', 'getOwnerUuid', 'setOwnerUuid'], 'ownerId' => ['owner_id', 'getOwnerId', 'setOwnerId'], 'name' => ['name', 'getName', 'setName'], 'description' => ['description', 'getDescription', 'setDescription'], 'purpose' => ['purpose', 'getPurpose', 'setPurpose'], 'environment' => ['environment', 'getEnvironment', 'setEnvironment'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'isDefault' => ['is_default', 'getIsDefault', 'setIsDefault']];
    }
}