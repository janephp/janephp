<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareOutputEmbed extends ShareOutputBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Share token for the shared output.
     *
     * @var string|null
     */
    public ?string $token;
    public function definedProperties(): array
    {
        return ['token' => 'token'];
    }
}