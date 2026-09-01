<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDomain implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $phase = 'UNKNOWN';
    /**
     * @var AppsDomainProgress
     */
    public AppsDomainProgress $progress;
    /**
     * @var AppDomainSpec
     */
    public AppDomainSpec $spec;
    /**
     * @var list<AppDomainValidation>
     */
    public array $validations;
    /**
     * @var bool
     */
    public bool $rotateValidationRecords;
    /**
     * @var \DateTime
     */
    public \DateTime $certificateExpiresAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'phase' => 'phase', 'progress' => 'progress', 'spec' => 'spec', 'validations' => 'validations', 'rotateValidationRecords' => 'rotate_validation_records', 'certificateExpiresAt' => 'certificate_expires_at'];
    }
}