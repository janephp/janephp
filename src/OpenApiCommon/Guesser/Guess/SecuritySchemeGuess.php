<?php

namespace Jane\OpenApiCommon\Guesser\Guess;

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

    public function getType(): string
    {
        return $this->type;
    }

    public function getObject(): object
    {
        return $this->object;
    }
}
