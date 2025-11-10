<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationRestoreConfigurationBackup
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
     * Validation of AP firmware version
     *
     * @var bool
     */
    protected $executeWarningValidate = true;
    /**
     * Validation of AP firmware version
     *
     * @return bool
     */
    public function getExecuteWarningValidate(): bool
    {
        return $this->executeWarningValidate;
    }
    /**
     * Validation of AP firmware version
     *
     * @param bool $executeWarningValidate
     *
     * @return self
     */
    public function setExecuteWarningValidate(bool $executeWarningValidate): self
    {
        $this->initialized['executeWarningValidate'] = true;
        $this->executeWarningValidate = $executeWarningValidate;
        return $this;
    }
}