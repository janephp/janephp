<?php

namespace PicturePark\API\Model;

class DocumentMetadata extends \ArrayObject
{
    /**
     * 
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileExtension;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * 
     *
     * @var int|null
     */
    protected $fileSizeInBytes;
    /**
     * 
     *
     * @var string|null
     */
    protected $sha1Hash;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $xmpMetadata;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $exifMetadata;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationName;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $author;
    /**
     * 
     *
     * @var string|null
     */
    protected $creator;
    /**
     * 
     *
     * @var string|null
     */
    protected $publisher;
    /**
     * 
     *
     * @var string|null
     */
    protected $company;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentTitle;
    /**
     * 
     *
     * @var int
     */
    protected $characterCount;
    /**
     * 
     *
     * @var int
     */
    protected $characterCountWithSpaces;
    /**
     * 
     *
     * @var int
     */
    protected $lineCount;
    /**
     * 
     *
     * @var int
     */
    protected $pageCount;
    /**
     * 
     *
     * @var int
     */
    protected $slideCount;
    /**
     * 
     *
     * @var int
     */
    protected $paragraphCount;
    /**
     * 
     *
     * @var int
     */
    protected $revisionNumber;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $titles;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $imageTitles;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $epsInfo;
    /**
     * 
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * 
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * 
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions) : self
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileExtension() : ?string
    {
        return $this->fileExtension;
    }
    /**
     * 
     *
     * @param string|null $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension) : self
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
    /**
     * 
     *
     * @param string|null $filePath
     *
     * @return self
     */
    public function setFilePath(?string $filePath) : self
    {
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFileSizeInBytes() : ?int
    {
        return $this->fileSizeInBytes;
    }
    /**
     * 
     *
     * @param int|null $fileSizeInBytes
     *
     * @return self
     */
    public function setFileSizeInBytes(?int $fileSizeInBytes) : self
    {
        $this->fileSizeInBytes = $fileSizeInBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSha1Hash() : ?string
    {
        return $this->sha1Hash;
    }
    /**
     * 
     *
     * @param string|null $sha1Hash
     *
     * @return self
     */
    public function setSha1Hash(?string $sha1Hash) : self
    {
        $this->sha1Hash = $sha1Hash;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getXmpMetadata()
    {
        return $this->xmpMetadata;
    }
    /**
     * 
     *
     * @param mixed $xmpMetadata
     *
     * @return self
     */
    public function setXmpMetadata($xmpMetadata) : self
    {
        $this->xmpMetadata = $xmpMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getExifMetadata()
    {
        return $this->exifMetadata;
    }
    /**
     * 
     *
     * @param mixed $exifMetadata
     *
     * @return self
     */
    public function setExifMetadata($exifMetadata) : self
    {
        $this->exifMetadata = $exifMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationName() : ?string
    {
        return $this->applicationName;
    }
    /**
     * 
     *
     * @param string|null $applicationName
     *
     * @return self
     */
    public function setApplicationName(?string $applicationName) : self
    {
        $this->applicationName = $applicationName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationVersion() : ?string
    {
        return $this->applicationVersion;
    }
    /**
     * 
     *
     * @param string|null $applicationVersion
     *
     * @return self
     */
    public function setApplicationVersion(?string $applicationVersion) : self
    {
        $this->applicationVersion = $applicationVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreator() : ?string
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param string|null $creator
     *
     * @return self
     */
    public function setCreator(?string $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPublisher() : ?string
    {
        return $this->publisher;
    }
    /**
     * 
     *
     * @param string|null $publisher
     *
     * @return self
     */
    public function setPublisher(?string $publisher) : self
    {
        $this->publisher = $publisher;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentTitle() : ?string
    {
        return $this->documentTitle;
    }
    /**
     * 
     *
     * @param string|null $documentTitle
     *
     * @return self
     */
    public function setDocumentTitle(?string $documentTitle) : self
    {
        $this->documentTitle = $documentTitle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterCount() : int
    {
        return $this->characterCount;
    }
    /**
     * 
     *
     * @param int $characterCount
     *
     * @return self
     */
    public function setCharacterCount(int $characterCount) : self
    {
        $this->characterCount = $characterCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterCountWithSpaces() : int
    {
        return $this->characterCountWithSpaces;
    }
    /**
     * 
     *
     * @param int $characterCountWithSpaces
     *
     * @return self
     */
    public function setCharacterCountWithSpaces(int $characterCountWithSpaces) : self
    {
        $this->characterCountWithSpaces = $characterCountWithSpaces;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLineCount() : int
    {
        return $this->lineCount;
    }
    /**
     * 
     *
     * @param int $lineCount
     *
     * @return self
     */
    public function setLineCount(int $lineCount) : self
    {
        $this->lineCount = $lineCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPageCount() : int
    {
        return $this->pageCount;
    }
    /**
     * 
     *
     * @param int $pageCount
     *
     * @return self
     */
    public function setPageCount(int $pageCount) : self
    {
        $this->pageCount = $pageCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSlideCount() : int
    {
        return $this->slideCount;
    }
    /**
     * 
     *
     * @param int $slideCount
     *
     * @return self
     */
    public function setSlideCount(int $slideCount) : self
    {
        $this->slideCount = $slideCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getParagraphCount() : int
    {
        return $this->paragraphCount;
    }
    /**
     * 
     *
     * @param int $paragraphCount
     *
     * @return self
     */
    public function setParagraphCount(int $paragraphCount) : self
    {
        $this->paragraphCount = $paragraphCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRevisionNumber() : int
    {
        return $this->revisionNumber;
    }
    /**
     * 
     *
     * @param int $revisionNumber
     *
     * @return self
     */
    public function setRevisionNumber(int $revisionNumber) : self
    {
        $this->revisionNumber = $revisionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTitles() : ?array
    {
        return $this->titles;
    }
    /**
     * 
     *
     * @param string[]|null $titles
     *
     * @return self
     */
    public function setTitles(?array $titles) : self
    {
        $this->titles = $titles;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getImageTitles() : ?array
    {
        return $this->imageTitles;
    }
    /**
     * 
     *
     * @param string[]|null $imageTitles
     *
     * @return self
     */
    public function setImageTitles(?array $imageTitles) : self
    {
        $this->imageTitles = $imageTitles;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getEpsInfo()
    {
        return $this->epsInfo;
    }
    /**
     * 
     *
     * @param mixed $epsInfo
     *
     * @return self
     */
    public function setEpsInfo($epsInfo) : self
    {
        $this->epsInfo = $epsInfo;
        return $this;
    }
}