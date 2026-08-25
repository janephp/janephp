<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputFormatDetail implements AdditionalPropertiesInterface
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
     * Which output format should be used as a source of data.
     *
     * @var SourceOutputFormats|null
     */
    protected $sourceOutputFormats;
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @var FormatBase|null
     */
    protected $format;
    /**
     * Language specific names.
     *
     * @var array<string, string>
     */
    protected $names;
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @var string
     */
    protected $retentionTime;
    /**
     * Optional patterns (liquid syntax) that produce the filename for item of this output format.
     * If set, the customer's default language is required.
     *
     * @var array<string, string>|null
     */
    protected $downloadFileNamePatterns;
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @var bool
     */
    protected $enableXmpWriteback;
    /**
     * Output format ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Marks if this is a system output format.
     *
     * @var bool
     */
    protected $system;
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @var bool
     */
    protected $dynamic;
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @var bool
     */
    protected $dataExtraction;
    /**
     * Temporary outputs will not be backed up.
     *
     * @var bool
     */
    protected $temporary;
    /**
     * Audit information.
     *
     * @var UserAuditDetail|null
     */
    protected $audit;
    /**
     * Which output format should be used as a source of data.
     *
     * @return SourceOutputFormats|null
     */
    public function getSourceOutputFormats(): ?SourceOutputFormats
    {
        return $this->sourceOutputFormats;
    }
    /**
     * Which output format should be used as a source of data.
     *
     * @param SourceOutputFormats|null $sourceOutputFormats
     *
     * @return self
     */
    public function setSourceOutputFormats(?SourceOutputFormats $sourceOutputFormats): self
    {
        $this->initialized['sourceOutputFormats'] = true;
        $this->sourceOutputFormats = $sourceOutputFormats;
        return $this;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @return FormatBase|null
     */
    public function getFormat(): ?FormatBase
    {
        return $this->format;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @param FormatBase|null $format
     *
     * @return self
     */
    public function setFormat(?FormatBase $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * Language specific names.
     *
     * @return array<string, string>
     */
    public function getNames(): iterable
    {
        return $this->names;
    }
    /**
     * Language specific names.
     *
     * @param array<string, string> $names
     *
     * @return self
     */
    public function setNames(iterable $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @return string
     */
    public function getRetentionTime(): string
    {
        return $this->retentionTime;
    }
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @param string $retentionTime
     *
     * @return self
     */
    public function setRetentionTime(string $retentionTime): self
    {
        $this->initialized['retentionTime'] = true;
        $this->retentionTime = $retentionTime;
        return $this;
    }
    /**
     * Optional patterns (liquid syntax) that produce the filename for item of this output format.
     * If set, the customer's default language is required.
     *
     * @return array<string, string>|null
     */
    public function getDownloadFileNamePatterns(): ?iterable
    {
        return $this->downloadFileNamePatterns;
    }
    /**
    * Optional patterns (liquid syntax) that produce the filename for item of this output format.
    If set, the customer's default language is required.
    *
    * @param array<string, string>|null $downloadFileNamePatterns
    *
    * @return self
    */
    public function setDownloadFileNamePatterns(?iterable $downloadFileNamePatterns): self
    {
        $this->initialized['downloadFileNamePatterns'] = true;
        $this->downloadFileNamePatterns = $downloadFileNamePatterns;
        return $this;
    }
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @return bool
     */
    public function getViewForAll(): bool
    {
        return $this->viewForAll;
    }
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @param bool $viewForAll
     *
     * @return self
     */
    public function setViewForAll(bool $viewForAll): self
    {
        $this->initialized['viewForAll'] = true;
        $this->viewForAll = $viewForAll;
        return $this;
    }
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @return bool
     */
    public function getEnableXmpWriteback(): bool
    {
        return $this->enableXmpWriteback;
    }
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @param bool $enableXmpWriteback
     *
     * @return self
     */
    public function setEnableXmpWriteback(bool $enableXmpWriteback): self
    {
        $this->initialized['enableXmpWriteback'] = true;
        $this->enableXmpWriteback = $enableXmpWriteback;
        return $this;
    }
    /**
     * Output format ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Output format ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Marks if this is a system output format.
     *
     * @return bool
     */
    public function getSystem(): bool
    {
        return $this->system;
    }
    /**
     * Marks if this is a system output format.
     *
     * @param bool $system
     *
     * @return self
     */
    public function setSystem(bool $system): self
    {
        $this->initialized['system'] = true;
        $this->system = $system;
        return $this;
    }
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @return bool
     */
    public function getDynamic(): bool
    {
        return $this->dynamic;
    }
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @param bool $dynamic
     *
     * @return self
     */
    public function setDynamic(bool $dynamic): self
    {
        $this->initialized['dynamic'] = true;
        $this->dynamic = $dynamic;
        return $this;
    }
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @return bool
     */
    public function getDataExtraction(): bool
    {
        return $this->dataExtraction;
    }
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @param bool $dataExtraction
     *
     * @return self
     */
    public function setDataExtraction(bool $dataExtraction): self
    {
        $this->initialized['dataExtraction'] = true;
        $this->dataExtraction = $dataExtraction;
        return $this;
    }
    /**
     * Temporary outputs will not be backed up.
     *
     * @return bool
     */
    public function getTemporary(): bool
    {
        return $this->temporary;
    }
    /**
     * Temporary outputs will not be backed up.
     *
     * @param bool $temporary
     *
     * @return self
     */
    public function setTemporary(bool $temporary): self
    {
        $this->initialized['temporary'] = true;
        $this->temporary = $temporary;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return UserAuditDetail|null
     */
    public function getAudit(): ?UserAuditDetail
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param UserAuditDetail|null $audit
     *
     * @return self
     */
    public function setAudit(?UserAuditDetail $audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['sourceOutputFormats' => ['sourceOutputFormats', 'getSourceOutputFormats', 'setSourceOutputFormats'], 'format' => ['format', 'getFormat', 'setFormat'], 'names' => ['names', 'getNames', 'setNames'], 'retentionTime' => ['retentionTime', 'getRetentionTime', 'setRetentionTime'], 'downloadFileNamePatterns' => ['downloadFileNamePatterns', 'getDownloadFileNamePatterns', 'setDownloadFileNamePatterns'], 'viewForAll' => ['viewForAll', 'getViewForAll', 'setViewForAll'], 'enableXmpWriteback' => ['enableXmpWriteback', 'getEnableXmpWriteback', 'setEnableXmpWriteback'], 'id' => ['id', 'getId', 'setId'], 'system' => ['system', 'getSystem', 'setSystem'], 'dynamic' => ['dynamic', 'getDynamic', 'setDynamic'], 'dataExtraction' => ['dataExtraction', 'getDataExtraction', 'setDataExtraction'], 'temporary' => ['temporary', 'getTemporary', 'setTemporary'], 'audit' => ['audit', 'getAudit', 'setAudit']];
    }
}