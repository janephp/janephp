<?php

namespace Jane\Component\OpenApi2\SchemaParser;

/**
 * Detects `securityDefinitions` entries that cannot be denormalized into a
 * Security Scheme model by this component.
 *
 * `securityDefinitions` is a map of name => Security Scheme Object: feeding it
 * a bare scheme definition directly under `securityDefinitions` used to be
 * silently ignored, generating no authentication classes and leaving the user
 * without any explanation.
 */
final class SecuritySchemeValidator
{
    /** @var array<string> */
    private const API_KEY_LOCATIONS = ['header', 'query'];

    /**
     * Returns one human readable error per unusable security definition entry,
     * each pointing at the offending location as a JSON pointer (RFC 6901).
     *
     * @param array<mixed> $document
     *
     * @return array<string>
     */
    public static function validate(array $document): array
    {
        $errors = [];

        if (!isset($document['securityDefinitions']) || !\is_array($document['securityDefinitions'])) {
            return $errors;
        }

        foreach ($document['securityDefinitions'] as $name => $scheme) {
            self::validateScheme($scheme, '/securityDefinitions/' . self::escapePointerToken((string) $name), $errors);
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
                'Security scheme entry is not a valid Security Scheme Object (%s given) at "%s". `securityDefinitions` must be a map of name => scheme definition, e.g. {"myAuth": {"type": "basic"}}.',
                get_debug_type($scheme),
                $pointer
            );

            return;
        }

        $type = $scheme['type'] ?? null;

        if (!\is_string($type)) {
            $errors[] = \sprintf(
                'Missing `type` for security scheme at "%s", expected one of "basic", "apiKey" or "oauth2".',
                $pointer . '/type'
            );

            return;
        }

        switch ($type) {
            case 'basic':
                break;
            case 'apiKey':
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
                        '`in` must be one of "header" or "query" for "apiKey" security schemes at "%s/in".',
                        $pointer
                    );
                }
                break;
            case 'oauth2':
                self::validateOauth2Flow($scheme, $pointer, $errors);
                break;
            default:
                $errors[] = \sprintf(
                    '`type` "%s" is not a valid security scheme type at "%s/type", expected one of "basic", "apiKey" or "oauth2".',
                    $type,
                    $pointer
                );
        }
    }

    /**
     * @param array<mixed>  $scheme
     * @param array<string> $errors
     */
    private static function validateOauth2Flow(array $scheme, string $pointer, array &$errors): void
    {
        $flow = $scheme['flow'] ?? null;

        if (!\is_string($flow)) {
            $errors[] = \sprintf(
                'Missing `flow` for "oauth2" security scheme at "%s/flow", expected one of "implicit", "password", "application" or "accessCode".',
                $pointer
            );

            return;
        }

        $requiredFields = match ($flow) {
            'implicit' => ['authorizationUrl'],
            'password', 'application' => ['tokenUrl'],
            'accessCode' => ['authorizationUrl', 'tokenUrl'],
            default => null,
        };

        if (null === $requiredFields) {
            $errors[] = \sprintf(
                '`flow` "%s" is not a valid oauth2 flow at "%s/flow", expected one of "implicit", "password", "application" or "accessCode".',
                $flow,
                $pointer
            );

            return;
        }

        $missingFields = [];
        foreach ($requiredFields as $field) {
            if (!isset($scheme[$field])) {
                $missingFields[] = \sprintf('`%s`', $field);
            }
        }

        if ([] !== $missingFields) {
            $errors[] = \sprintf(
                'Missing %s for "%s" flow security scheme at "%s".',
                implode(' and ', $missingFields),
                $flow,
                $pointer
            );
        }
    }

    private static function escapePointerToken(string $token): string
    {
        return str_replace(['~', '/'], ['~0', '~1'], $token);
    }
}
