<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAppsValidateRollback implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates whether the app can be rolled back to the specified deployment.
     *
     * @var bool
     */
    public bool $valid;
    /**
     * @var ResponseAppsValidateRollbackError
     */
    public ResponseAppsValidateRollbackError $error;
    /**
     * Contains a list of warnings that may cause the rollback to run under unideal circumstances.
     *
     * @var list<AppRollbackValidationCondition>
     */
    public array $warnings;
    public function definedProperties(): array
    {
        return ['valid' => 'valid', 'error' => 'error', 'warnings' => 'warnings'];
    }
}