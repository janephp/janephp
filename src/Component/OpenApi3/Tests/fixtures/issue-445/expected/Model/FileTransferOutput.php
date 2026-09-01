<?php

namespace PicturePark\API\Model;

class FileTransferOutput
{
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * @var string|null
     */
    public ?string $filePath;
    /**
     * @var string
     */
    public string $outputSource;
}