<?php

namespace PicturePark\API\Model;

class VersionInfo
{
    /**
     * The manual file version of Picturepark.Contract.dll.
     *
     * @var string|null
     */
    public ?string $fileVersion;
    /**
     * The GitVersionTask generated file product version of Picturepark.Configuration.dll.
     *
     * @var string|null
     */
    public ?string $fileProductVersion;
    /**
     * The current contract version stored in CustomerDoc / EnvironmentDoc.
     *
     * @var string|null
     */
    public ?string $contractVersion;
    /**
     * The bamboo release version. Only provided on bamboo deployments.
     *
     * @var string|null
     */
    public ?string $release;
}