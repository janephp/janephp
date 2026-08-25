<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDomain implements AdditionalPropertiesInterface
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
    protected $id;
    /**
     * @var string
     */
    protected $phase = 'UNKNOWN';
    /**
     * @var AppsDomainProgress
     */
    protected $progress;
    /**
     * @var AppDomainSpec
     */
    protected $spec;
    /**
     * @var list<AppDomainValidation>
     */
    protected $validations;
    /**
     * @var bool
     */
    protected $rotateValidationRecords;
    /**
     * @var \DateTime
     */
    protected $certificateExpiresAt;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getPhase(): string
    {
        return $this->phase;
    }
    /**
     * @param string $phase
     *
     * @return self
     */
    public function setPhase(string $phase): self
    {
        $this->initialized['phase'] = true;
        $this->phase = $phase;
        return $this;
    }
    /**
     * @return AppsDomainProgress
     */
    public function getProgress(): AppsDomainProgress
    {
        return $this->progress;
    }
    /**
     * @param AppsDomainProgress $progress
     *
     * @return self
     */
    public function setProgress(AppsDomainProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    /**
     * @return AppDomainSpec
     */
    public function getSpec(): AppDomainSpec
    {
        return $this->spec;
    }
    /**
     * @param AppDomainSpec $spec
     *
     * @return self
     */
    public function setSpec(AppDomainSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * @return list<AppDomainValidation>
     */
    public function getValidations(): array
    {
        return $this->validations;
    }
    /**
     * @param list<AppDomainValidation> $validations
     *
     * @return self
     */
    public function setValidations(array $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
    /**
     * @return bool
     */
    public function getRotateValidationRecords(): bool
    {
        return $this->rotateValidationRecords;
    }
    /**
     * @param bool $rotateValidationRecords
     *
     * @return self
     */
    public function setRotateValidationRecords(bool $rotateValidationRecords): self
    {
        $this->initialized['rotateValidationRecords'] = true;
        $this->rotateValidationRecords = $rotateValidationRecords;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCertificateExpiresAt(): \DateTime
    {
        return $this->certificateExpiresAt;
    }
    /**
     * @param \DateTime $certificateExpiresAt
     *
     * @return self
     */
    public function setCertificateExpiresAt(\DateTime $certificateExpiresAt): self
    {
        $this->initialized['certificateExpiresAt'] = true;
        $this->certificateExpiresAt = $certificateExpiresAt;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'phase' => ['phase', 'getPhase', 'setPhase'], 'progress' => ['progress', 'getProgress', 'setProgress'], 'spec' => ['spec', 'getSpec', 'setSpec'], 'validations' => ['validations', 'getValidations', 'setValidations'], 'rotateValidationRecords' => ['rotate_validation_records', 'getRotateValidationRecords', 'setRotateValidationRecords'], 'certificateExpiresAt' => ['certificate_expires_at', 'getCertificateExpiresAt', 'setCertificateExpiresAt']];
    }
}