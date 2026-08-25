<?php

namespace PicturePark\API\Model;

class DisplayPattern
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
     * The template engine used for parsing the display patterns.
     *
     * @var string
     */
    protected $templateEngine;
    /**
     * The display pattern type.
     *
     * @var string
     */
    protected $displayPatternType;
    /**
     * Language specific pattern templates.
     *
     * @var array<string, string>|null
     */
    protected $templates;
    /**
     * The template engine used for parsing the display patterns.
     *
     * @return string
     */
    public function getTemplateEngine(): string
    {
        return $this->templateEngine;
    }
    /**
     * The template engine used for parsing the display patterns.
     *
     * @param string $templateEngine
     *
     * @return self
     */
    public function setTemplateEngine(string $templateEngine): self
    {
        $this->initialized['templateEngine'] = true;
        $this->templateEngine = $templateEngine;
        return $this;
    }
    /**
     * The display pattern type.
     *
     * @return string
     */
    public function getDisplayPatternType(): string
    {
        return $this->displayPatternType;
    }
    /**
     * The display pattern type.
     *
     * @param string $displayPatternType
     *
     * @return self
     */
    public function setDisplayPatternType(string $displayPatternType): self
    {
        $this->initialized['displayPatternType'] = true;
        $this->displayPatternType = $displayPatternType;
        return $this;
    }
    /**
     * Language specific pattern templates.
     *
     * @return array<string, string>|null
     */
    public function getTemplates(): ?iterable
    {
        return $this->templates;
    }
    /**
     * Language specific pattern templates.
     *
     * @param array<string, string>|null $templates
     *
     * @return self
     */
    public function setTemplates(?iterable $templates): self
    {
        $this->initialized['templates'] = true;
        $this->templates = $templates;
        return $this;
    }
}