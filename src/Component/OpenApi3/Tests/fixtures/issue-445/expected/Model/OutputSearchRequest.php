<?php

namespace PicturePark\API\Model;

class OutputSearchRequest
{
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * List of Content ids you want to use to fetch the outputs.
     *
     * @var string[]|null
     */
    protected $contentIds;
    /**
     * The allowed rendering states of the outputs you want to fetch.
     *
     * @var string[]|null
     */
    protected $renderingStates;
    /**
     * The file extension of the outputs you want to fetch.
     *
     * @var string[]|null
     */
    protected $fileExtensions;
    /**
     * The output format id of the outputs you want to fetch.
     *
     * @var string[]|null
     */
    protected $outputFormatIds;
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @return string|null
     */
    public function getPageToken() : ?string
    {
        return $this->pageToken;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @param string|null $pageToken
     *
     * @return self
     */
    public function setPageToken(?string $pageToken) : self
    {
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * List of Content ids you want to use to fetch the outputs.
     *
     * @return string[]|null
     */
    public function getContentIds() : ?array
    {
        return $this->contentIds;
    }
    /**
     * List of Content ids you want to use to fetch the outputs.
     *
     * @param string[]|null $contentIds
     *
     * @return self
     */
    public function setContentIds(?array $contentIds) : self
    {
        $this->contentIds = $contentIds;
        return $this;
    }
    /**
     * The allowed rendering states of the outputs you want to fetch.
     *
     * @return string[]|null
     */
    public function getRenderingStates() : ?array
    {
        return $this->renderingStates;
    }
    /**
     * The allowed rendering states of the outputs you want to fetch.
     *
     * @param string[]|null $renderingStates
     *
     * @return self
     */
    public function setRenderingStates(?array $renderingStates) : self
    {
        $this->renderingStates = $renderingStates;
        return $this;
    }
    /**
     * The file extension of the outputs you want to fetch.
     *
     * @return string[]|null
     */
    public function getFileExtensions() : ?array
    {
        return $this->fileExtensions;
    }
    /**
     * The file extension of the outputs you want to fetch.
     *
     * @param string[]|null $fileExtensions
     *
     * @return self
     */
    public function setFileExtensions(?array $fileExtensions) : self
    {
        $this->fileExtensions = $fileExtensions;
        return $this;
    }
    /**
     * The output format id of the outputs you want to fetch.
     *
     * @return string[]|null
     */
    public function getOutputFormatIds() : ?array
    {
        return $this->outputFormatIds;
    }
    /**
     * The output format id of the outputs you want to fetch.
     *
     * @param string[]|null $outputFormatIds
     *
     * @return self
     */
    public function setOutputFormatIds(?array $outputFormatIds) : self
    {
        $this->outputFormatIds = $outputFormatIds;
        return $this;
    }
}