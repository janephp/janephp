<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiAgentFunctionVersion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Description of the function
     *
     * @var string
     */
    public string $description;
    /**
     * FaaS name of the function
     *
     * @var string
     */
    public string $faasName;
    /**
     * FaaS namespace of the function
     *
     * @var string
     */
    public string $faasNamespace;
    /**
     * Whether the function is deleted
     *
     * @var bool
     */
    public bool $isDeleted;
    /**
     * Name of the function
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['description' => 'description', 'faasName' => 'faas_name', 'faasNamespace' => 'faas_namespace', 'isDeleted' => 'is_deleted', 'name' => 'name'];
    }
}