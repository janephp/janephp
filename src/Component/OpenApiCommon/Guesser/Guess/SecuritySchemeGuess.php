<?php

namespace Jane\Component\OpenApiCommon\Guesser\Guess;

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

    public const SCHEME_BEARER = 'Bearer';
    public const SCHEME_BASIC = 'Basic';

    /** @var string */
    private $name;

    /** @var string */
    private $type;

    /** @var string */
    private $variable;

    /** @var string|null */
    private $scheme;

    /** @var string|null */
    private $in;

    private $object;

    public function __construct(string $name, object $object, string $variable, string $type)
    {
        $this->name = $name;
        $this->object = $object;
        $this->variable = $variable;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getObject(): object
    {
        return $this->object;
    }

    public function getVariable(): string
    {
        return $this->variable;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    public function setScheme(?string $scheme): void
    {
        $this->scheme = $scheme;
    }

    public function getIn(): ?string
    {
        return $this->in;
    }

    public function setIn(?string $in): void
    {
        $this->in = $in;
    }
}
