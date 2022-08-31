<?php

namespace PicturePark\API\Model;

class ShareOutputBase
{
    /**
     * Content ID.
     *
     * @var string
     */
    protected $contentId;
    /**
     * Output format ID.
     *
     * @var string
     */
    protected $outputFormatId;
    /**
     * Url to directly view output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @var string|null
     */
    protected $viewUrl;
    /**
     * Url to directly download output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @var string|null
     */
    protected $downloadUrl;
    /**
     * Output details.
     *
     * @var mixed|null
     */
    protected $detail;
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @var bool
     */
    protected $dynamicRendering;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Content ID.
     *
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }
    /**
     * Content ID.
     *
     * @param string $contentId
     */
    public function setContentId(string $contentId)
    {
        $this->contentId = $contentId;
    }
    /**
     * Output format ID.
     *
     * @return string
     */
    public function getOutputFormatId() : string
    {
        return $this->outputFormatId;
    }
    /**
     * Output format ID.
     *
     * @param string $outputFormatId
     */
    public function setOutputFormatId(string $outputFormatId)
    {
        $this->outputFormatId = $outputFormatId;
    }
    /**
     * Url to directly view output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @return string|null
     */
    public function getViewUrl() : ?string
    {
        return $this->viewUrl;
    }
    /**
     * Url to directly view output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @param string|null $viewUrl
     */
    public function setViewUrl(?string $viewUrl)
    {
        $this->viewUrl = $viewUrl;
    }
    /**
     * Url to directly download output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @return string|null
     */
    public function getDownloadUrl() : ?string
    {
        return $this->downloadUrl;
    }
    /**
     * Url to directly download output. In case of BasicShare if not fetched using a token, a placeholder {token} is included which needs to be replaced with the recipient's token
     *
     * @param string|null $downloadUrl
     */
    public function setDownloadUrl(?string $downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
    /**
     * Output details.
     *
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }
    /**
     * Output details.
     *
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @return bool
     */
    public function getDynamicRendering() : bool
    {
        return $this->dynamicRendering;
    }
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @param bool $dynamicRendering
     */
    public function setDynamicRendering(bool $dynamicRendering)
    {
        $this->dynamicRendering = $dynamicRendering;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }
}