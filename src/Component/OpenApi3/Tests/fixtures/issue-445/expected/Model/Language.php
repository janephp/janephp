<?php

namespace PicturePark\API\Model;

class Language
{
    /**
     * Language translations.
     *
     * @var array<string, string>
     */
    public iterable $name;
    /**
     * IETF language tag. E.g en, en-US, de.
     *
     * @var string
     */
    public string $ietf;
    /**
     * Two letter ISO language code. E.g. en, de.
     *
     * @var string|null
     */
    public ?string $twoLetterISOLanguageName;
    /**
     * Three letter ISO language code. E.g. eng, deu.
     *
     * @var string|null
     */
    public ?string $threeLetterISOLanguageName;
    /**
     * Region code of the language. E.g. US, DE, CH.
     *
     * @var string|null
     */
    public ?string $regionCode;
}