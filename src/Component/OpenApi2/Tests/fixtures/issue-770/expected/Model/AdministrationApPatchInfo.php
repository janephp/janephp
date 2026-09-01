<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationApPatchInfo
{
    /**
     * file name of the upload file
     *
     * @var string
     */
    public string $fileName;
    /**
     * file size(Byte) of the upload file
     *
     * @var int
     */
    public int $fileSize;
    /**
     * ApFwVersion of the upload file
     *
     * @var string
     */
    public string $apVersion;
    /**
     * AP Models of the upload file
     *
     * @var list<string>
     */
    public array $apModels;
}