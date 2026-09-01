<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppVariableDefinition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The variable name
     *
     * @var string
     */
    public string $key;
    /**
     * - RUN_TIME: Made available only at run-time
     * - BUILD_TIME: Made available only at build-time
     * - RUN_AND_BUILD_TIME: Made available at both build and run-time
     *
     * @var string
     */
    public string $scope = 'RUN_AND_BUILD_TIME';
    /**
     * - GENERAL: A plain-text environment variable
     * - SECRET: A secret encrypted environment variable
     *
     * @var string
     */
    public string $type = 'GENERAL';
    /**
     * The value. If the type is `SECRET`, the value will be encrypted on first submission. On following submissions, the encrypted value should be used.
     *
     * @var string
     */
    public string $value;
    public function definedProperties(): array
    {
        return ['key' => 'key', 'scope' => 'scope', 'type' => 'type', 'value' => 'value'];
    }
}