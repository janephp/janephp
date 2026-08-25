<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class RunnerApplication implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $os;
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $downloadUrl;
    /**
     * @var string
     */
    protected $filename;
    /**
     * @return string
     */
    public function getOs(): string
    {
        return $this->os;
    }
    /**
     * @param string $os
     *
     * @return self
     */
    public function setOs(string $os): self
    {
        $this->initialized['os'] = true;
        $this->os = $os;
        return $this;
    }
    /**
     * @return string
     */
    public function getArchitecture(): string
    {
        return $this->architecture;
    }
    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(string $architecture): self
    {
        $this->initialized['architecture'] = true;
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * @return string
     */
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }
    /**
     * @param string $downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl(string $downloadUrl): self
    {
        $this->initialized['downloadUrl'] = true;
        $this->downloadUrl = $downloadUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
    /**
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['os' => ['os', 'getOs', 'setOs'], 'architecture' => ['architecture', 'getArchitecture', 'setArchitecture'], 'downloadUrl' => ['download_url', 'getDownloadUrl', 'setDownloadUrl'], 'filename' => ['filename', 'getFilename', 'setFilename']];
    }
}