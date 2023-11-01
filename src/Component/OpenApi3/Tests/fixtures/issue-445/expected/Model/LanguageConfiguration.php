<?php

namespace PicturePark\API\Model;

class LanguageConfiguration
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of languages serving as system languages.
     *
     * @var string[]|null
     */
    protected $systemLanguages;
    /**
     * A list of languages serving as metadata languages.
     *
     * @var string[]|null
     */
    protected $metadataLanguages;
    /**
     * The default language. Not the be confused with the metadata fallback language x-default.
     *
     * @var string|null
     */
    protected $defaultLanguage;
    /**
     * A list of languages serving as system languages.
     *
     * @return string[]|null
     */
    public function getSystemLanguages() : ?array
    {
        return $this->systemLanguages;
    }
    /**
     * A list of languages serving as system languages.
     *
     * @param string[]|null $systemLanguages
     *
     * @return self
     */
    public function setSystemLanguages(?array $systemLanguages) : self
    {
        $this->initialized['systemLanguages'] = true;
        $this->systemLanguages = $systemLanguages;
        return $this;
    }
    /**
     * A list of languages serving as metadata languages.
     *
     * @return string[]|null
     */
    public function getMetadataLanguages() : ?array
    {
        return $this->metadataLanguages;
    }
    /**
     * A list of languages serving as metadata languages.
     *
     * @param string[]|null $metadataLanguages
     *
     * @return self
     */
    public function setMetadataLanguages(?array $metadataLanguages) : self
    {
        $this->initialized['metadataLanguages'] = true;
        $this->metadataLanguages = $metadataLanguages;
        return $this;
    }
    /**
     * The default language. Not the be confused with the metadata fallback language x-default.
     *
     * @return string|null
     */
    public function getDefaultLanguage() : ?string
    {
        return $this->defaultLanguage;
    }
    /**
     * The default language. Not the be confused with the metadata fallback language x-default.
     *
     * @param string|null $defaultLanguage
     *
     * @return self
     */
    public function setDefaultLanguage(?string $defaultLanguage) : self
    {
        $this->initialized['defaultLanguage'] = true;
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
}