<?php

namespace Github\Model;

class MarkdownPostBody extends \ArrayObject
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
     * The Markdown text to render in HTML.
     *
     * @var string
     */
    protected $text;
    /**
     * The rendering mode.
     *
     * @var string
     */
    protected $mode = 'markdown';
    /**
     * The repository context to use when creating references in `gfm` mode.
     *
     * @var string
     */
    protected $context;
    /**
     * The Markdown text to render in HTML.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The Markdown text to render in HTML.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * The rendering mode.
     *
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    /**
     * The rendering mode.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * The repository context to use when creating references in `gfm` mode.
     *
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    /**
     * The repository context to use when creating references in `gfm` mode.
     *
     * @param string $context
     *
     * @return self
     */
    public function setContext(string $context) : self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
}