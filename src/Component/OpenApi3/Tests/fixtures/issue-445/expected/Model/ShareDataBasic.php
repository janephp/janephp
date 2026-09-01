<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareDataBasic extends ShareDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of recipients added using email address
     *
     * @var list<MailRecipient>
     */
    public array $mailRecipients;
    /**
     * List of recipients that exist in Picturepark.
     *
     * @var list<InternalRecipient>
     */
    public array $internalRecipients;
    /**
     * Language of share.
     *
     * @var string|null
     */
    public ?string $languageCode;
    public function definedProperties(): array
    {
        return ['mailRecipients' => 'mailRecipients', 'internalRecipients' => 'internalRecipients', 'languageCode' => 'languageCode'];
    }
}