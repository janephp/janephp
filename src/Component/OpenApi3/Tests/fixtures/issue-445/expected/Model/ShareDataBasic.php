<?php

namespace PicturePark\API\Model;

class ShareDataBasic extends ShareDataBase
{
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