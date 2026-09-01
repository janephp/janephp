<?php

namespace PicturePark\API\Model;

class ShareBaseCreateRequest
{
    /**
     * Name of share.
     *
     * @var string
     */
    public string $name;
    /**
     * Optional description of share.
     *
     * @var string|null
     */
    public ?string $description;
    /**
     * Optional date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $expirationDate;
    /**
     * List of contents including outputs to share.
     *
     * @var list<ShareContent>
     */
    public array $contents;
    /**
     * List of content layers to share.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * Access for content outputs in share.
     *
     * @var string
     */
    public string $outputAccess;
    /**
     * @var string
     */
    public string $kind;
}