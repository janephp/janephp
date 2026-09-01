<?php

namespace PicturePark\API\Model;

class InternalRecipient
{
    /**
     * User information of recipient.
     *
     * @var User
     */
    public User $recipient;
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