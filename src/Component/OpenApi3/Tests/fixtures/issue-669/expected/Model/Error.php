<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Error implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A short identifier corresponding to the HTTP status code returned. For  example, the ID for a response returning a 404 status code would be "not_found."
     *
     * @var string
     */
    public string $id;
    /**
     * A message providing additional information about the error, including  details to help resolve it when possible.
     *
     * @var string
     */
    public string $message;
    /**
     * Optionally, some endpoints may include a request ID that should be provided when reporting bugs or opening support tickets to help identify the issue.
     *
     * @var string
     */
    public string $requestId;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'message' => 'message', 'requestId' => 'request_id'];
    }
}