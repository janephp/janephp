<?php

namespace PicturePark\API\Model;

class ShareBasicCreateRequest extends ShareBaseCreateRequest
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
        $this->initialized['recipientEmails'] = true;
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
        $this->initialized['languageCode'] = true;
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
        $this->initialized['suppressNotifications'] = true;
        $this->suppressNotifications = $suppressNotifications;
        return $this;
    }
}