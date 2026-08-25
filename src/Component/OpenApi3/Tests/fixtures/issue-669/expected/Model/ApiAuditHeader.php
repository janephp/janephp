<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAuditHeader implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $actorId;
    /**
     * @var string
     */
    protected $actorIp;
    /**
     * @var string
     */
    protected $actorUuid;
    /**
     * @var string
     */
    protected $contextUrn;
    /**
     * @var string
     */
    protected $originApplication;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userUuid;
    /**
     * @return string
     */
    public function getActorId(): string
    {
        return $this->actorId;
    }
    /**
     * @param string $actorId
     *
     * @return self
     */
    public function setActorId(string $actorId): self
    {
        $this->initialized['actorId'] = true;
        $this->actorId = $actorId;
        return $this;
    }
    /**
     * @return string
     */
    public function getActorIp(): string
    {
        return $this->actorIp;
    }
    /**
     * @param string $actorIp
     *
     * @return self
     */
    public function setActorIp(string $actorIp): self
    {
        $this->initialized['actorIp'] = true;
        $this->actorIp = $actorIp;
        return $this;
    }
    /**
     * @return string
     */
    public function getActorUuid(): string
    {
        return $this->actorUuid;
    }
    /**
     * @param string $actorUuid
     *
     * @return self
     */
    public function setActorUuid(string $actorUuid): self
    {
        $this->initialized['actorUuid'] = true;
        $this->actorUuid = $actorUuid;
        return $this;
    }
    /**
     * @return string
     */
    public function getContextUrn(): string
    {
        return $this->contextUrn;
    }
    /**
     * @param string $contextUrn
     *
     * @return self
     */
    public function setContextUrn(string $contextUrn): self
    {
        $this->initialized['contextUrn'] = true;
        $this->contextUrn = $contextUrn;
        return $this;
    }
    /**
     * @return string
     */
    public function getOriginApplication(): string
    {
        return $this->originApplication;
    }
    /**
     * @param string $originApplication
     *
     * @return self
     */
    public function setOriginApplication(string $originApplication): self
    {
        $this->initialized['originApplication'] = true;
        $this->originApplication = $originApplication;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * @return string
     */
    public function getUserUuid(): string
    {
        return $this->userUuid;
    }
    /**
     * @param string $userUuid
     *
     * @return self
     */
    public function setUserUuid(string $userUuid): self
    {
        $this->initialized['userUuid'] = true;
        $this->userUuid = $userUuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['actorId' => ['actor_id', 'getActorId', 'setActorId'], 'actorIp' => ['actor_ip', 'getActorIp', 'setActorIp'], 'actorUuid' => ['actor_uuid', 'getActorUuid', 'setActorUuid'], 'contextUrn' => ['context_urn', 'getContextUrn', 'setContextUrn'], 'originApplication' => ['origin_application', 'getOriginApplication', 'setOriginApplication'], 'userId' => ['user_id', 'getUserId', 'setUserId'], 'userUuid' => ['user_uuid', 'getUserUuid', 'setUserUuid']];
    }
}