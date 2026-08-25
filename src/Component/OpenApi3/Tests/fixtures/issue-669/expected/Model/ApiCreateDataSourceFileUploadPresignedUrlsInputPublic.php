<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateDataSourceFileUploadPresignedUrlsInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of files to generate presigned URLs for.
     *
     * @var list<ApiPresignedUrlFile>
     */
    protected $files;
    /**
     * A list of files to generate presigned URLs for.
     *
     * @return list<ApiPresignedUrlFile>
     */
    public function getFiles(): array
    {
        return $this->files;
    }
    /**
     * A list of files to generate presigned URLs for.
     *
     * @param list<ApiPresignedUrlFile> $files
     *
     * @return self
     */
    public function setFiles(array $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['files' => ['files', 'getFiles', 'setFiles']];
    }
}