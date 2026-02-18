<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAppsValidateRollback extends \ArrayObject
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
     * Indicates whether the app can be rolled back to the specified deployment.
     *
     * @var bool
     */
    protected $valid;
    /**
     * @var ResponseAppsValidateRollbackError
     */
    protected $error;
    /**
     * Contains a list of warnings that may cause the rollback to run under unideal circumstances.
     *
     * @var list<AppRollbackValidationCondition>
     */
    protected $warnings;
    /**
     * Indicates whether the app can be rolled back to the specified deployment.
     *
     * @return bool
     */
    public function getValid(): bool
    {
        return $this->valid;
    }
    /**
     * Indicates whether the app can be rolled back to the specified deployment.
     *
     * @param bool $valid
     *
     * @return self
     */
    public function setValid(bool $valid): self
    {
        $this->initialized['valid'] = true;
        $this->valid = $valid;
        return $this;
    }
    /**
     * @return ResponseAppsValidateRollbackError
     */
    public function getError(): ResponseAppsValidateRollbackError
    {
        return $this->error;
    }
    /**
     * @param ResponseAppsValidateRollbackError $error
     *
     * @return self
     */
    public function setError(ResponseAppsValidateRollbackError $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * Contains a list of warnings that may cause the rollback to run under unideal circumstances.
     *
     * @return list<AppRollbackValidationCondition>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * Contains a list of warnings that may cause the rollback to run under unideal circumstances.
     *
     * @param list<AppRollbackValidationCondition> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}