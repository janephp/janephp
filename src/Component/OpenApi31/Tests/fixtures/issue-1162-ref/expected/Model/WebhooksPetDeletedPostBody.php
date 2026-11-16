<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1162Ref\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue1162Ref\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue1162Ref\Runtime\AdditionalPropertiesInterface;
class WebhooksPetDeletedPostBody implements AdditionalPropertiesInterface
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