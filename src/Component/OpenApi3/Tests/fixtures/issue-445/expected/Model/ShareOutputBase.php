<?php

namespace PicturePark\API\Model;

class ShareOutputBase
{
    /**
     * Content ID.
     *
     * @var string
     */
    public string $contentId;
    /**
     * Output format ID.
     *
     * @var string
     */
    public string $outputFormatId;
    /**
     * Url to directly view output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @var string|null
     */
    public ?string $viewUrl;
    /**
     * Url to directly download output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @var string|null
     */
    public ?string $downloadUrl;
    /**
     * Output details.
     *
     * @var OutputDataBase|null
     */
    public ?OutputDataBase $detail;
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @var bool
     */
    public bool $dynamicRendering;
    /**
     * @var string
     */
    public string $kind;
}