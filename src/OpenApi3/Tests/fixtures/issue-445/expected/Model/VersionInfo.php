<?php

namespace PicturePark\API\Model;

class VersionInfo
{
    /**
     * The manual file version of Picturepark.Contract.dll.
     *
     * @var string|null
     */
    protected $fileVersion;
    /**
     * The GitVersionTask generated file product version of Picturepark.Configuration.dll.
     *
     * @var string|null
     */
    protected $fileProductVersion;
    /**
     * The current contract version stored in CustomerDoc / EnvironmentDoc.
     *
     * @var string|null
     */
    protected $contractVersion;
    /**
     * The bamboo release version. Only provided on bamboo deployments.
     *
     * @var string|null
     */
    protected $release;
    /**
     * The manual file version of Picturepark.Contract.dll.
     *
     * @return string|null
     */
    public function getFileVersion() : ?string
    {
        return $this->fileVersion;
    }
    /**
     * The manual file version of Picturepark.Contract.dll.
     *
     * @param string|null $fileVersion
     *
     * @return self
     */
    public function setFileVersion(?string $fileVersion) : self
    {
        $this->fileVersion = $fileVersion;
        return $this;
    }
    /**
     * The GitVersionTask generated file product version of Picturepark.Configuration.dll.
     *
     * @return string|null
     */
    public function getFileProductVersion() : ?string
    {
        return $this->fileProductVersion;
    }
    /**
     * The GitVersionTask generated file product version of Picturepark.Configuration.dll.
     *
     * @param string|null $fileProductVersion
     *
     * @return self
     */
    public function setFileProductVersion(?string $fileProductVersion) : self
    {
        $this->fileProductVersion = $fileProductVersion;
        return $this;
    }
    /**
     * The current contract version stored in CustomerDoc / EnvironmentDoc.
     *
     * @return string|null
     */
    public function getContractVersion() : ?string
    {
        return $this->contractVersion;
    }
    /**
     * The current contract version stored in CustomerDoc / EnvironmentDoc.
     *
     * @param string|null $contractVersion
     *
     * @return self
     */
    public function setContractVersion(?string $contractVersion) : self
    {
        $this->contractVersion = $contractVersion;
        return $this;
    }
    /**
     * The bamboo release version. Only provided on bamboo deployments.
     *
     * @return string|null
     */
    public function getRelease() : ?string
    {
        return $this->release;
    }
    /**
     * The bamboo release version. Only provided on bamboo deployments.
     *
     * @param string|null $release
     *
     * @return self
     */
    public function setRelease(?string $release) : self
    {
        $this->release = $release;
        return $this;
    }
}