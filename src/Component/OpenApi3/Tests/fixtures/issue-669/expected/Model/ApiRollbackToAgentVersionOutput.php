<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiRollbackToAgentVersionOutput extends \ArrayObject
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
     * An alternative way to provide auth information. for internal use only.
     *
     * @var ApiAuditHeader
     */
    protected $auditHeader;
    /**
     * Unique identifier
     *
     * @var string
     */
    protected $versionHash;
    /**
     * An alternative way to provide auth information. for internal use only.
     *
     * @return ApiAuditHeader
     */
    public function getAuditHeader(): ApiAuditHeader
    {
        return $this->auditHeader;
    }
    /**
     * An alternative way to provide auth information. for internal use only.
     *
     * @param ApiAuditHeader $auditHeader
     *
     * @return self
     */
    public function setAuditHeader(ApiAuditHeader $auditHeader): self
    {
        $this->initialized['auditHeader'] = true;
        $this->auditHeader = $auditHeader;
        return $this;
    }
    /**
     * Unique identifier
     *
     * @return string
     */
    public function getVersionHash(): string
    {
        return $this->versionHash;
    }
    /**
     * Unique identifier
     *
     * @param string $versionHash
     *
     * @return self
     */
    public function setVersionHash(string $versionHash): self
    {
        $this->initialized['versionHash'] = true;
        $this->versionHash = $versionHash;
        return $this;
    }
}