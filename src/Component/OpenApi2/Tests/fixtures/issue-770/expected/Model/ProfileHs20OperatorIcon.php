<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20OperatorIcon
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
    protected $language;
    /**
     * @var string
     */
    protected $fileName;
    /**
     * @var string
     */
    protected $icon;
    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    /**
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }
    /**
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
}