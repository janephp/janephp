<?php

namespace PicturePark\API\Model;

class OutputFormatDownloadFileNamePatternUpdateRequestItem
{
    /**
     * ID of the output format to set pattern for.
     *
     * @var string
     */
    public string $id;
    /**
     * The patterns to use per metadata language.
     * The customer's default language is required.
     *
     * @var array<string, string>|null
     */
    public ?iterable $patterns;
}