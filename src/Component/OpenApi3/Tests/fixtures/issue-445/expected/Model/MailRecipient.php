<?php

namespace PicturePark\API\Model;

class MailRecipient
{
    /**
     * User information including email.
     *
     * @var UserEmail
     */
    public UserEmail $userEmail;
    /**
     * Recipient specific token.
     *
     * @var string|null
     */
    public ?string $token;
    /**
     * URL to access the share for this recipient.
     *
     * @var string|null
     */
    public ?string $url;
}