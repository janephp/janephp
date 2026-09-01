<?php

namespace PicturePark\API\Model;

class DisplayPattern
{
    /**
     * The template engine used for parsing the display patterns.
     *
     * @var string
     */
    public string $templateEngine;
    /**
     * The display pattern type.
     *
     * @var string
     */
    public string $displayPatternType;
    /**
     * Language specific pattern templates.
     *
     * @var array<string, string>|null
     */
    public ?iterable $templates;
}