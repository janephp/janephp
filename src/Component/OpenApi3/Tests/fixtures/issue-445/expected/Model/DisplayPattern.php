<?php

namespace PicturePark\API\Model;

class DisplayPattern
{
    /**
     * The template engine used for parsing the display patterns.
     *
     * @var mixed
     */
    protected $templateEngine;
    /**
     * The display pattern type.
     *
     * @var mixed
     */
    protected $displayPatternType;
    /**
     * Language specific pattern templates.
     *
     * @var mixed|null
     */
    protected $templates;
    /**
     * The template engine used for parsing the display patterns.
     *
     * @return mixed
     */
    public function getTemplateEngine()
    {
        return $this->templateEngine;
    }
    /**
     * The template engine used for parsing the display patterns.
     *
     * @param mixed $templateEngine
     *
     * @return self
     */
    public function setTemplateEngine($templateEngine) : self
    {
        $this->templateEngine = $templateEngine;
        return $this;
    }
    /**
     * The display pattern type.
     *
     * @return mixed
     */
    public function getDisplayPatternType()
    {
        return $this->displayPatternType;
    }
    /**
     * The display pattern type.
     *
     * @param mixed $displayPatternType
     *
     * @return self
     */
    public function setDisplayPatternType($displayPatternType) : self
    {
        $this->displayPatternType = $displayPatternType;
        return $this;
    }
    /**
     * Language specific pattern templates.
     *
     * @return mixed
     */
    public function getTemplates()
    {
        return $this->templates;
    }
    /**
     * Language specific pattern templates.
     *
     * @param mixed $templates
     *
     * @return self
     */
    public function setTemplates($templates) : self
    {
        $this->templates = $templates;
        return $this;
    }
}