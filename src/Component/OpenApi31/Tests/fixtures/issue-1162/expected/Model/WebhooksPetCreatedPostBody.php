<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1162\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue1162\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue1162\Runtime\AdditionalPropertiesInterface;
class WebhooksPetCreatedPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}