<?php

namespace Jane\Component\OpenApi31\SchemaParser;

/**
 * Detects `components.securitySchemes` entries that cannot be denormalized
 * into a Security Scheme model by this component.
 *
 * `securitySchemes` is a map of name => Security Scheme Object: feeding it a
 * bare scheme definition (e.g. `{"type": "http", "scheme": "basic"}` directly
 * under `securitySchemes`) used to be silently ignored, generating no
 * authentication classes and leaving the user without any explanation.
 */
final class SecuritySchemeValidator
{
    /** @var array<string> */
    private const VALID_TYPES = ['apiKey', 'http', 'mutualTLS', 'oauth2', 'openIdConnect'];

    /** @var array<string> */
    private const API_KEY_LOCATIONS = ['header', 'query', 'cookie'];

    /**
     * Returns one human readable error per unusable security scheme entry,
     * each pointing at the offending location as a JSON pointer (RFC 6901).
     *
     * @param array<mixed> $document
     *
     * @return array<string>
     */
    public static function validate(array $document): array
    {
        $errors = [];

        if (!isset($document['components']['securitySchemes']) || !\is_array($document['components']['securitySchemes'])) {
            return $errors;
        }

        foreach ($document['components']['securitySchemes'] as $name => $scheme) {
            self::validateScheme($scheme, '/components/securitySchemes/' . self::escapePointerToken((string) $name), $errors);
        }

        return $errors;
    }

    /**
     * @param array<string> $errors
     */
    private static function validateScheme(mixed $scheme, string $pointer, array &$errors): void
    {
        if (\is_array($scheme) && isset($scheme['$ref'])) {
            return;
        }

        if (!\is_array($scheme)) {
            $errors[] = \sprintf(
                'Security scheme entry is not a valid Security Scheme Object (%s given) at "%s". `securitySchemes` must be a map of name => scheme definition, e.g. {"myAuth": {"type": "http", "scheme": "basic"}}.',
                get_debug_type($scheme),
                $pointer
            );

            return;
        }

        $type = $scheme['type'] ?? null;

        if (!\is_string($type)) {
            $errors[] = \sprintf(
                'Missing `type` for security scheme at "%s", expected one of "apiKey", "http", "mutualTLS", "oauth2" or "openIdConnect".',
                $pointer . '/type'
            );

            return;
        }

        if (!\in_array($type, self::VALID_TYPES, true)) {
            $errors[] = \sprintf(
                '`type` "%s" is not a valid security scheme type at "%s/type", expected one of "apiKey", "http", "mutualTLS", "oauth2" or "openIdConnect".',
                $type,
                $pointer
            );

            return;
        }

        if ('apiKey' === $type) {
            $missingFields = [];
            foreach (['name', 'in'] as $field) {
                if (!isset($scheme[$field])) {
                    $missingFields[] = \sprintf('`%s`', $field);
                }
            }

            if ([] !== $missingFields) {
                $errors[] = \sprintf(
                    'Missing %s for security scheme at "%s".',
                    implode(' and ', $missingFields),
                    $pointer
                );
            } elseif (!\in_array($scheme['in'], self::API_KEY_LOCATIONS, true)) {
                $errors[] = \sprintf(
                    '`in` must be one of "header", "query" or "cookie" for "apiKey" security schemes at "%s/in".',
                    $pointer
                );
            }
        }
    }

    private static function escapePointerToken(string $token): string
    {
        return str_replace(['~', '/'], ['~0', '~1'], $token);
    }
}
