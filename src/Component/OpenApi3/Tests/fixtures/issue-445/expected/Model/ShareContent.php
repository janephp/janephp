<?php

namespace PicturePark\API\Model;

class ShareContent
{
    /**
     * Content ID to share.
     *
     * @var string
     */
    public string $contentId;
    /**
     * List of output formats for this content to share. If not specified outer OutputAccess is used.
     *
     * @var list<string>|null
     */
    public ?array $outputFormatIds;
}