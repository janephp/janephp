<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue869\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue869\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue869\Runtime\AdditionalPropertiesInterface;
class Message implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $subject;
    /**
     * @var string|null
     */
    public ?string $body;
    public function definedProperties(): array
    {
        return ['subject' => 'subject', 'body' => 'body'];
    }
}