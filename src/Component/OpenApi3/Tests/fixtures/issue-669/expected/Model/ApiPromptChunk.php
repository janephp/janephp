<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiPromptChunk extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The usage percentage of the chunk.
     *
     * @var float
     */
    protected $chunkUsagePct;
    /**
     * Indicates if the chunk was used in the prompt.
     *
     * @var bool
     */
    protected $chunkUsed;
    /**
     * The index uuid (Knowledge Base) of the chunk.
     *
     * @var string
     */
    protected $indexUuid;
    /**
     * The source name for the chunk, e.g., the file name or document title.
     *
     * @var string
     */
    protected $sourceName;
    /**
     * Text content of the chunk.
     *
     * @var string
     */
    protected $text;
    /**
     * The usage percentage of the chunk.
     *
     * @return float
     */
    public function getChunkUsagePct(): float
    {
        return $this->chunkUsagePct;
    }
    /**
     * The usage percentage of the chunk.
     *
     * @param float $chunkUsagePct
     *
     * @return self
     */
    public function setChunkUsagePct(float $chunkUsagePct): self
    {
        $this->initialized['chunkUsagePct'] = true;
        $this->chunkUsagePct = $chunkUsagePct;
        return $this;
    }
    /**
     * Indicates if the chunk was used in the prompt.
     *
     * @return bool
     */
    public function getChunkUsed(): bool
    {
        return $this->chunkUsed;
    }
    /**
     * Indicates if the chunk was used in the prompt.
     *
     * @param bool $chunkUsed
     *
     * @return self
     */
    public function setChunkUsed(bool $chunkUsed): self
    {
        $this->initialized['chunkUsed'] = true;
        $this->chunkUsed = $chunkUsed;
        return $this;
    }
    /**
     * The index uuid (Knowledge Base) of the chunk.
     *
     * @return string
     */
    public function getIndexUuid(): string
    {
        return $this->indexUuid;
    }
    /**
     * The index uuid (Knowledge Base) of the chunk.
     *
     * @param string $indexUuid
     *
     * @return self
     */
    public function setIndexUuid(string $indexUuid): self
    {
        $this->initialized['indexUuid'] = true;
        $this->indexUuid = $indexUuid;
        return $this;
    }
    /**
     * The source name for the chunk, e.g., the file name or document title.
     *
     * @return string
     */
    public function getSourceName(): string
    {
        return $this->sourceName;
    }
    /**
     * The source name for the chunk, e.g., the file name or document title.
     *
     * @param string $sourceName
     *
     * @return self
     */
    public function setSourceName(string $sourceName): self
    {
        $this->initialized['sourceName'] = true;
        $this->sourceName = $sourceName;
        return $this;
    }
    /**
     * Text content of the chunk.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Text content of the chunk.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}