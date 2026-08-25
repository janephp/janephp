<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class FilePostBody implements AdditionalPropertiesInterface
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
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $fichier;
    /**
     * @var bool
     */
    protected $valid;
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getFichier()
    {
        return $this->fichier;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $fichier
     *
     * @return self
     */
    public function setFichier($fichier): self
    {
        $this->initialized['fichier'] = true;
        $this->fichier = $fichier;
        return $this;
    }
    /**
     * @return bool
     */
    public function getValid(): bool
    {
        return $this->valid;
    }
    /**
     * @param bool $valid
     *
     * @return self
     */
    public function setValid(bool $valid): self
    {
        $this->initialized['valid'] = true;
        $this->valid = $valid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['fichier' => ['fichier', 'getFichier', 'setFichier'], 'valid' => ['valid', 'getValid', 'setValid']];
    }
}