<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\OpenApiRuntime\Client\FetchMode;

/**
 * Resolves the "x-fetch-mode" vendor extension of an operation.
 *
 * Only GET and HEAD operations may declare the attribute (other verbs are
 * always eager and must not carry it — this is enforced at generation time by
 * the FetchModeValidator of each component). Resolution precedence: the
 * operation's own attribute, then the `default-fetch-mode` generation option,
 * then lazy.
 */
class FetchModeResolver
{
    public const ATTRIBUTE_NAME = 'x-fetch-mode';

    /**
     * Plain string literals rather than `FetchMode::Xxx->value`: an enum
     * property fetch is not a valid constant expression on PHP 8.1 (the
     * supported floor). Kept in sync with the FetchMode enum.
     */
    private const VALID_MODES = ['lazy', 'eager', 'preload'];

    public function __construct(private readonly ?string $defaultFetchMode = null)
    {
    }

    /**
     * Reads the extension from a parsed specification object. Parsed OpenAPI
     * models keep specification extensions (keys matching "^x-") in their array
     * access storage (the extensions runtime trait).
     *
     * Invalid attribute values are rejected by FetchModeValidator during schema
     * validation; this resolver only acts as a safety net and falls back to the
     * configured default, then to lazy.
     */
    public function resolveFromObject(object $operation): string
    {
        if ($operation instanceof \ArrayAccess) {
            $value = $operation[self::ATTRIBUTE_NAME] ?? null;

            if (\is_string($value) && \in_array($value, self::VALID_MODES, true)) {
                return $value;
            }
        }

        if (null !== $this->defaultFetchMode && \in_array($this->defaultFetchMode, self::VALID_MODES, true)) {
            return $this->defaultFetchMode;
        }

        return FetchMode::Lazy->value;
    }
}
