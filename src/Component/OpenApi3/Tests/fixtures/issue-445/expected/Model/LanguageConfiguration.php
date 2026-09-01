<?php

namespace PicturePark\API\Model;

class LanguageConfiguration
{
    /**
     * A list of languages serving as system languages.
     *
     * @var list<string>|null
     */
    public ?array $systemLanguages;
    /**
     * A list of languages serving as metadata languages.
     *
     * @var list<string>|null
     */
    public ?array $metadataLanguages;
    /**
     * The default language. Not the be confused with the metadata fallback language x-default.
     *
     * @var string|null
     */
    public ?string $defaultLanguage;
}