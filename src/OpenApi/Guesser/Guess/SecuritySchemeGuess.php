<?php

namespace Jane\OpenApi\Guesser\Guess;

use Jane\OpenApi\JsonSchema\Model\APIKeySecurityScheme;
use Jane\OpenApi\JsonSchema\Model\HTTPSecurityScheme;
use Jane\OpenApi\JsonSchema\Model\OAuth2SecurityScheme;
use Jane\OpenApi\JsonSchema\Model\OpenIdConnectSecurityScheme;

class SecuritySchemeGuess
{
    public const TYPE_API_KEY = 'apiKey';
    public const TYPE_HTTP = 'http';
    public const TYPE_OAUTH2 = 'oauth2';
    public const TYPE_OPEN_ID_CONNECT = 'openIdConnect';

    public static function getAvailableTypes(): array
    {
        return [
            self::TYPE_API_KEY,
            self::TYPE_HTTP,
            self::TYPE_OAUTH2,
            self::TYPE_OPEN_ID_CONNECT,
        ];
    }

    /** @var string */
    private $name;

    /** @var string */
    private $type;

    /** @var APIKeySecurityScheme|HTTPSecurityScheme|OAuth2SecurityScheme|OpenIdConnectSecurityScheme $object */
    private $object;

    public function __construct(string $name, string $type, object $object)
    {
        $this->name = $name;
        $this->type = $type;
        $this->object = $object;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getObject()
    {
        return $this->object;
    }
}
