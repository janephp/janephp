<?php

namespace PicturePark\API\Model;

class OutputFormatDownloadFileNamePatternUpdateRequestItem
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
     * ID of the output format to set pattern for.
     *
     * @var string
     */
    protected $id;
    /**
     * The patterns to use per metadata language.
     * The customer's default language is required.
     *
     * @var array<string, string>|null
     */
    protected $patterns;
    /**
     * ID of the output format to set pattern for.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the output format to set pattern for.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The patterns to use per metadata language.
     * The customer's default language is required.
     *
     * @return array<string, string>|null
     */
    public function getPatterns(): ?iterable
    {
        return $this->patterns;
    }
    /**
    * The patterns to use per metadata language.
    The customer's default language is required.
    *
    * @param array<string, string>|null $patterns
    *
    * @return self
    */
    public function setPatterns(?iterable $patterns): self
    {
        $this->initialized['patterns'] = true;
        $this->patterns = $patterns;
        return $this;
    }
}