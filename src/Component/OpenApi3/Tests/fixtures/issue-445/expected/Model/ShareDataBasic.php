<?php

namespace PicturePark\API\Model;

class ShareDataBasic
{
    /**
     * The URL to access the share.
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * List of recipients added using email address
     *
     * @var MailRecipient[]
     */
    protected $mailRecipients;
    /**
     * List of recipients that exist in Picturepark.
     *
     * @var InternalRecipient[]
     */
    protected $internalRecipients;
    /**
     * Language of share.
     *
     * @var string|null
     */
    protected $languageCode;
    /**
     * The URL to access the share.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to access the share.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
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
     * List of recipients added using email address
     *
     * @return MailRecipient[]
     */
    public function getMailRecipients() : array
    {
        return $this->mailRecipients;
    }
    /**
     * List of recipients added using email address
     *
     * @param MailRecipient[] $mailRecipients
     *
     * @return self
     */
    public function setMailRecipients(array $mailRecipients) : self
    {
        $this->mailRecipients = $mailRecipients;
        return $this;
    }
    /**
     * List of recipients that exist in Picturepark.
     *
     * @return InternalRecipient[]
     */
    public function getInternalRecipients() : array
    {
        return $this->internalRecipients;
    }
    /**
     * List of recipients that exist in Picturepark.
     *
     * @param InternalRecipient[] $internalRecipients
     *
     * @return self
     */
    public function setInternalRecipients(array $internalRecipients) : self
    {
        $this->internalRecipients = $internalRecipients;
        return $this;
    }
    /**
     * Language of share.
     *
     * @return string|null
     */
    public function getLanguageCode() : ?string
    {
        return $this->languageCode;
    }
    /**
     * Language of share.
     *
     * @param string|null $languageCode
     *
     * @return self
     */
    public function setLanguageCode(?string $languageCode) : self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
}