<?php

namespace PicturePark\API\Model;

class SourceOutputFormats
{
    /**
     * The source to be used for content of type Image
     *
     * @var string|null
     */
    public ?string $image;
    /**
     * The source to be used for content of type Video
     *
     * @var string|null
     */
    public ?string $video;
    /**
     * The source to be used for content of type Document
     *
     * @var string|null
     */
    public ?string $document;
    /**
     * The source to be used for content of type Audio
     *
     * @var string|null
     */
    public ?string $audio;
    /**
     * The source to be used for content of type Vector
     *
     * @var string|null
     */
    public ?string $vector;
}