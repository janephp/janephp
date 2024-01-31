<?php

namespace PicturePark\API\Model;

class ShareDataBasic extends ShareDataBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['mailRecipients'] = true;
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
        $this->initialized['internalRecipients'] = true;
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
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
}