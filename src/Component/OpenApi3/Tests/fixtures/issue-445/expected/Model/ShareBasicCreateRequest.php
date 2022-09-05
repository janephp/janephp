<?php

namespace PicturePark\API\Model;

class ShareBasicCreateRequest extends ShareBaseCreateRequest
{
    /**
     * List of external mail recipients which are no Picturepark users.
     *
     * @var UserEmail[]|null
     */
    protected $recipientEmails;
    /**
     * System language used for share (mail and detail page). en or de.
     *
     * @var string
     */
    protected $languageCode;
    /**
     * Set to true to disable the creation of notifications and emails to recipients.
     *
     * @var bool
     */
    protected $suppressNotifications;
    /**
     * List of external mail recipients which are no Picturepark users.
     *
     * @return UserEmail[]|null
     */
    public function getRecipientEmails() : ?array
    {
        return $this->recipientEmails;
    }
    /**
     * List of external mail recipients which are no Picturepark users.
     *
     * @param UserEmail[]|null $recipientEmails
     *
     * @return self
     */
    public function setRecipientEmails(?array $recipientEmails) : self
    {
        $this->recipientEmails = $recipientEmails;
        return $this;
    }
    /**
     * System language used for share (mail and detail page). en or de.
     *
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
     * System language used for share (mail and detail page). en or de.
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * Set to true to disable the creation of notifications and emails to recipients.
     *
     * @return bool
     */
    public function getSuppressNotifications() : bool
    {
        return $this->suppressNotifications;
    }
    /**
     * Set to true to disable the creation of notifications and emails to recipients.
     *
     * @param bool $suppressNotifications
     *
     * @return self
     */
    public function setSuppressNotifications(bool $suppressNotifications) : self
    {
        $this->suppressNotifications = $suppressNotifications;
        return $this;
    }
}