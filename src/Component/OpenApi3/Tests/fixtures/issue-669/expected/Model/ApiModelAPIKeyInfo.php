<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiModelAPIKeyInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Creation date
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Created by
     *
     * @var string
     */
    public string $createdBy;
    /**
     * Deleted date
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
     * @var string
     */
    public string $secretKey;
    /**
     * Uuid
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'createdBy' => 'created_by', 'deletedAt' => 'deleted_at', 'name' => 'name', 'secretKey' => 'secret_key', 'uuid' => 'uuid'];
    }
}