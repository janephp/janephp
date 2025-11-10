<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FilePostBody extends \ArrayObject
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
     * @var string
     */
    protected $fichier;
    /**
     * @var bool
     */
    protected $valid;
    /**
     * @return string
     */
    public function getFichier(): string
    {
        return $this->fichier;
    }
    /**
     * @param string $fichier
     *
     * @return self
     */
    public function setFichier(string $fichier): self
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
}