<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAnthropicAPIKeyInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Key creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Created by user id from DO
     *
     * @var string
     */
    public string $createdBy;
    /**
     * Key deleted date
     *
     * @var \DateTime
     */
    public \DateTime $deletedAt;
    /**
     * Name
     *
     * @var string
     */
    public string $name;
    /**
     * Key last updated date
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Uuid
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'createdBy' => 'created_by', 'deletedAt' => 'deleted_at', 'name' => 'name', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}