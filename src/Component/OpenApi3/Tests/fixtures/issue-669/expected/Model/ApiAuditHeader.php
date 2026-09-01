<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAuditHeader implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $actorId;
    /**
     * @var string
     */
    public string $actorIp;
    /**
     * @var string
     */
    public string $actorUuid;
    /**
     * @var string
     */
    public string $contextUrn;
    /**
     * @var string
     */
    public string $originApplication;
    /**
     * @var string
     */
    public string $userId;
    /**
     * @var string
     */
    public string $userUuid;
    public function definedProperties(): array
    {
        return ['actorId' => 'actor_id', 'actorIp' => 'actor_ip', 'actorUuid' => 'actor_uuid', 'contextUrn' => 'context_urn', 'originApplication' => 'origin_application', 'userId' => 'user_id', 'userUuid' => 'user_uuid'];
    }
}