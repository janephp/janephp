<?php

namespace PicturePark\API\Model;

class ShareDetail
{
    /**
     * Share ID.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of share.
     *
     * @var string
     */
    public string $name;
    /**
     * Description of share entered by user.
     *
     * @var string|null
     */
    public ?string $description;
    /**
     * Creator of share.
     *
     * @var ShareUser
     */
    public ShareUser $creator;
    /**
     * Audit information.
     *
     * @var UserAudit
     */
    public UserAudit $audit;
    /**
     * Detailed information about contents in the share.
     *
     * @var list<ShareContentDetail>
     */
    public array $contentSelections;
    /**
     * List of shared layers.
     *
     * @var list<string>|null
     */
    public ?array $layerSchemaIds;
    /**
     * Detail of share.
     *
     * @var ShareDataBase|null
     */
    public ?ShareDataBase $data;
    /**
     * Date when share expires and cannot be accessed anymore.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $expirationDate;
    /**
     * Info if share is already expired.
     *
     * @var bool
     */
    public bool $expired;
    /**
     * Defined access for contents in share.
     *
     * @var string
     */
    public string $outputAccess;
    /**
     * Type of share.
     *
     * @var string
     */
    public string $shareType;
    /**
     * Schema detail of the content and the layers.
     *
     * @var list<SchemaDetail>|null
     */
    public ?array $schemas;
}