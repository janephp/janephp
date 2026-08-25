<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SimulatedTaggingOptions extends TaggingOptionsBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Number of keywords to assign.
     *
     * @var string|null
     */
    protected $numberOfKeywords;
    /**
     * Number of keywords to assign.
     *
     * @return string|null
     */
    public function getNumberOfKeywords(): ?string
    {
        return $this->numberOfKeywords;
    }
    /**
     * Number of keywords to assign.
     *
     * @param string|null $numberOfKeywords
     *
     * @return self
     */
    public function setNumberOfKeywords(?string $numberOfKeywords): self
    {
        $this->initialized['numberOfKeywords'] = true;
        $this->numberOfKeywords = $numberOfKeywords;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['numberOfKeywords' => ['numberOfKeywords', 'getNumberOfKeywords', 'setNumberOfKeywords']];
    }
}