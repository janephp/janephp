<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRollbackToAgentVersionOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An alternative way to provide auth information. for internal use only.
     *
     * @var ApiAuditHeader
     */
    public ApiAuditHeader $auditHeader;
    /**
     * Unique identifier
     *
     * @var string
     */
    public string $versionHash;
    public function definedProperties(): array
    {
        return ['auditHeader' => 'audit_header', 'versionHash' => 'version_hash'];
    }
}