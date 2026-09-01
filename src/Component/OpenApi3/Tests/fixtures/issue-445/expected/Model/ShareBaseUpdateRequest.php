<?php

namespace PicturePark\API\Model;

class ShareBaseUpdateRequest
{
    /**
     * Name of share.
     *
     * @var string
     */
    public string $name;
    /**
     * Optional date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $expirationDate;
    /**
     * Optional description of share.
     *
     * @var string|null
     */
    public ?string $description;
    /**
     * List of contents including outputs. Existing items needs to be sent again, otherwise they will be removed.
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