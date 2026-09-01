<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ErrorWithRootCauses implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A message providing information about the error.
     *
     * @var string
     */
    public string $error;
    /**
     * A list of error messages.
     *
     * @var list<string>|null
     */
    public ?array $messages;
    /**
     * A list of underlying causes for the error, including details to help  resolve it when possible.
     *
     * @var list<string>
     */
    public array $rootCauses;
    public function definedProperties(): array
    {
        return ['error' => 'error', 'messages' => 'messages', 'rootCauses' => 'root_causes'];
    }
}