<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiPromptChunk implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The usage percentage of the chunk.
     *
     * @var float
     */
    public float $chunkUsagePct;
    /**
     * Indicates if the chunk was used in the prompt.
     *
     * @var bool
     */
    public bool $chunkUsed;
    /**
     * The index uuid (Knowledge Base) of the chunk.
     *
     * @var string
     */
    public string $indexUuid;
    /**
     * The source name for the chunk, e.g., the file name or document title.
     *
     * @var string
     */
    public string $sourceName;
    /**
     * Text content of the chunk.
     *
     * @var string
     */
    public string $text;
    public function definedProperties(): array
    {
        return ['chunkUsagePct' => 'chunk_usage_pct', 'chunkUsed' => 'chunk_used', 'indexUuid' => 'index_uuid', 'sourceName' => 'source_name', 'text' => 'text'];
    }
}