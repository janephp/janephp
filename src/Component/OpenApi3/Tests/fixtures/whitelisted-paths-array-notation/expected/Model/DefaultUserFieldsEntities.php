<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
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