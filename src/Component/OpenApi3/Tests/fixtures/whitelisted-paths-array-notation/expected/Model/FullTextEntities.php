<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class FullTextEntities implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<UrlEntity>
     */
    public array $urls;
    /**
     * @var list<HashtagEntity>
     */
    public array $hashtags;
    /**
     * @var list<MentionEntity>
     */
    public array $mentions;
    /**
     * @var list<CashtagEntity>
     */
    public array $cashtags;
    /**
     * @var list<FullTextEntitiesAnnotationsItem>
     */
    public array $annotations;
    public function definedProperties(): array
    {
        return ['urls' => 'urls', 'hashtags' => 'hashtags', 'mentions' => 'mentions', 'cashtags' => 'cashtags', 'annotations' => 'annotations'];
    }
}