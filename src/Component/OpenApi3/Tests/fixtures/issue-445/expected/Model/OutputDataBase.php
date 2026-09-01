<?php

namespace PicturePark\API\Model;

class OutputDataBase
{
    /**
     * The extension of the file.
     *
     * @var string|null
     */
    public ?string $fileExtension;
    /**
     * The path where the file is stored.
     *
     * @var string|null
     */
    public ?string $filePath;
    /**
     * The size of the file in bytes.
     *
     * @var int|null
     */
    public ?int $fileSizeInBytes;
    /**
     * The SHA-1 hash of the file.
     *
     * @var string|null
     */
    public ?string $sha1Hash;
    /**
     * The original filename of the file.
     *
     * @var string|null
     */
    public ?string $originalFileName;
    /**
     * @var string
     */
    public string $kind;
}