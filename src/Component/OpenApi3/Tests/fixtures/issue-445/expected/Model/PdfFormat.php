<?php

namespace PicturePark\API\Model;

class PdfFormat extends FormatBase
{
    /**
     * Specifies compression quality used for ReduceFileSize.
     *
     * @var int
     */
    protected $jpegQuality;
    /**
     * Whether to linearize the output for fast web viewing.
     *
     * @var bool
     */
    protected $fastWebView;
    /**
     * Whether to apply measures to decrease output size or not.
     *
     * @var bool
     */
    protected $reduceFileSize;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Whether to extract document full text from this output.
     *
     * @var bool
     */
    protected $extractFullText;
    /**
     * Specifies compression quality used for ReduceFileSize.
     *
     * @return int
     */
    public function getJpegQuality() : int
    {
        return $this->jpegQuality;
    }
    /**
     * Specifies compression quality used for ReduceFileSize.
     *
     * @param int $jpegQuality
     *
     * @return self
     */
    public function setJpegQuality(int $jpegQuality) : self
    {
        $this->jpegQuality = $jpegQuality;
        return $this;
    }
    /**
     * Whether to linearize the output for fast web viewing.
     *
     * @return bool
     */
    public function getFastWebView() : bool
    {
        return $this->fastWebView;
    }
    /**
     * Whether to linearize the output for fast web viewing.
     *
     * @param bool $fastWebView
     *
     * @return self
     */
    public function setFastWebView(bool $fastWebView) : self
    {
        $this->fastWebView = $fastWebView;
        return $this;
    }
    /**
     * Whether to apply measures to decrease output size or not.
     *
     * @return bool
     */
    public function getReduceFileSize() : bool
    {
        return $this->reduceFileSize;
    }
    /**
     * Whether to apply measures to decrease output size or not.
     *
     * @param bool $reduceFileSize
     *
     * @return self
     */
    public function setReduceFileSize(bool $reduceFileSize) : self
    {
        $this->reduceFileSize = $reduceFileSize;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;
        return $this;
    }
    /**
     * Whether to extract document full text from this output.
     *
     * @return bool
     */
    public function getExtractFullText() : bool
    {
        return $this->extractFullText;
    }
    /**
     * Whether to extract document full text from this output.
     *
     * @param bool $extractFullText
     *
     * @return self
     */
    public function setExtractFullText(bool $extractFullText) : self
    {
        $this->extractFullText = $extractFullText;
        return $this;
    }
}