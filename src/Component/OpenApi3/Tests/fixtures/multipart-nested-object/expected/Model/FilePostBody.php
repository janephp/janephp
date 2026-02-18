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
     * @var FilePostBodyItem
     */
    protected $item;
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
     * @return FilePostBodyItem
     */
    public function getItem(): FilePostBodyItem
    {
        return $this->item;
    }
    /**
     * @param FilePostBodyItem $item
     *
     * @return self
     */
    public function setItem(FilePostBodyItem $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
}