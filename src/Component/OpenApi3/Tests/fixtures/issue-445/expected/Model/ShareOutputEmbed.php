<?php

namespace PicturePark\API\Model;

class ShareOutputEmbed extends ShareOutputBase
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
     * Share token for the shared output.
     *
     * @var string|null
     */
    protected $token;
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
     *
     * @return self
     */
    public function setContentId(string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
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
     *
     * @return self
     */
    public function setOutputFormatId(string $outputFormatId) : self
    {
        $this->outputFormatId = $outputFormatId;
        return $this;
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
     *
     * @return self
     */
    public function setViewUrl(?string $viewUrl) : self
    {
        $this->viewUrl = $viewUrl;
        return $this;
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
     *
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl) : self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
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
     *
     * @return self
     */
    public function setDetail($detail) : self
    {
        $this->detail = $detail;
        return $this;
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
     *
     * @return self
     */
    public function setDynamicRendering(bool $dynamicRendering) : self
    {
        $this->dynamicRendering = $dynamicRendering;
        return $this;
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
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * Share token for the shared output.
     *
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * Share token for the shared output.
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token) : self
    {
        $this->token = $token;
        return $this;
    }
}