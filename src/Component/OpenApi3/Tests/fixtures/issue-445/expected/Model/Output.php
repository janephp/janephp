<?php

namespace PicturePark\API\Model;

class Output
{
    /**
     * The ID of the output. Can be null for dynamic outputs which are not rendered yet.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * The ID of the output format this output represents.
     *
     * @var string
     */
    public string $outputFormatId;
    /**
     * The ID of the content for which this output has been created.
     *
     * @var string
     */
    public string $contentId;
    /**
     * The rendering state of the output file.
     *
     * @var string
     */
    public string $renderingState;
    /**
     * Detail of the output that are format dependent.
     *
     * @var OutputDataBase|null
     */
    public ?OutputDataBase $detail;
    /**
     * Date and time of the backup of the output file.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $backupTimestamp;
    /**
     * Number of rendering retry attempts left.
     *
     * @var int
     */
    public int $attemptsLeft;
    /**
     * Version counter incremented every time this output is rendered (or in case of Original when new original is uploaded).
     *
     * @var int
     */
    public int $fileVersion;
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