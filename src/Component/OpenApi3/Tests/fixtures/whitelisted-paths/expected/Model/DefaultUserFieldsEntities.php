<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class DefaultUserFieldsEntities implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Expanded details for the URL specified in the user's profile, with start and end indices.
     *
     * @var DefaultUserFieldsEntitiesUrl
     */
    public DefaultUserFieldsEntitiesUrl $url;
    /**
     * @var FullTextEntities
     */
    public FullTextEntities $description;
    public function definedProperties(): array
    {
        return ['url' => 'url', 'description' => 'description'];
    }
}