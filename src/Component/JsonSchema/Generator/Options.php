<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Generator;

/**
 * Frozen value object describing the generation options understood by the
 * JsonSchema and OpenAPI components.
 *
 * It is the single source of defaults for every option family: the
 * JsonSchema/OAI3/OAI31 `build()` entry points, the guesser factories and the
 * console configuration all hydrate from {@see self::fromArray()}, so a new
 * option only needs a default declared in one place.
 *
 * Public entry points keep accepting plain arrays as before; the DTO is
 * hydrated from them and its frozen values are consumed internally.
 */
final class Options
{
    public function __construct(
        public readonly bool $reference = false,
        public readonly bool $strict = true,
        public readonly string $fullDateFormat = 'Y-m-d',
        public readonly string $dateFormat = \DateTimeInterface::RFC3339,
        public readonly ?string $dateInputFormat = null,
        public readonly ?bool $datePreferInterface = null,
        public readonly bool $useFixer = false,
        public readonly ?string $fixerConfigFile = null,
        public readonly bool $cleanGenerated = true,
        public readonly ?bool $useCacheableSupportsMethod = null,
        public readonly bool $skipNullValues = true,
        public readonly bool $skipRequiredFields = false,
        /** @var array<string, string> */
        public readonly array $customStringFormatMapping = [],
        public readonly bool $validation = false,
        /** @var list<\Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface> */
        public readonly array $validators = [],
        public readonly bool $includeNullValue = true,
        public readonly bool $enumsAsObjects = false,
        public readonly ?bool $defaultAdditionalProperties = null,
        /** Default fetch mode applied to GET/HEAD operations without an explicit `x-fetch-mode`; one of lazy, eager or preload */
        public readonly ?string $defaultFetchMode = null,
        public readonly bool $allowExternalRefs = false,
        /** @var array<string> */
        public readonly array $externalRefAllowedHosts = [],
        public readonly bool $externalRefFollowRedirects = false,
        /** @var array<string> */
        public readonly array $allowedLocalRefRoots = [],
        public readonly ?array $whitelistedPaths = null,
        public readonly ?string $endpointGenerator = null,
        /** @var list<object> */
        public readonly array $operationNamings = [],
        /** @var array<string, array<string, array<string, string>>> */
        public readonly array $customQueryResolver = [],
        public readonly bool $throwUnexpectedStatusCode = false,
        public readonly bool $generateErrorExceptions = true,
    ) {
    }

    public static function defaults(): self
    {
        return new self();
    }

    /**
     * Hydrate the DTO from a raw options array, applying the canonical
     * defaults for any key that was not provided.
     *
     * @param array<string, mixed> $options
     */
    public static function fromArray(array $options): self
    {
        return new self(
            reference: $options['reference'] ?? false,
            strict: $options['strict'] ?? true,
            fullDateFormat: $options['full-date-format'] ?? 'Y-m-d',
            dateFormat: $options['date-format'] ?? \DateTimeInterface::RFC3339,
            dateInputFormat: $options['date-input-format'] ?? null,
            datePreferInterface: $options['date-prefer-interface'] ?? null,
            useFixer: $options['use-fixer'] ?? false,
            fixerConfigFile: $options['fixer-config-file'] ?? null,
            cleanGenerated: $options['clean-generated'] ?? true,
            useCacheableSupportsMethod: $options['use-cacheable-supports-method'] ?? null,
            skipNullValues: $options['skip-null-values'] ?? true,
            skipRequiredFields: $options['skip-required-fields'] ?? false,
            customStringFormatMapping: $options['custom-string-format-mapping'] ?? [],
            validation: $options['validation'] ?? false,
            validators: $options['validators'] ?? [],
            includeNullValue: $options['include-null-value'] ?? true,
            enumsAsObjects: $options['enums-as-objects'] ?? false,
            defaultAdditionalProperties: $options['default-additional-properties'] ?? null,
            defaultFetchMode: $options['default-fetch-mode'] ?? null,
            allowExternalRefs: $options['allow-external-refs'] ?? false,
            externalRefAllowedHosts: $options['external-ref-allowed-hosts'] ?? [],
            externalRefFollowRedirects: $options['external-ref-follow-redirects'] ?? false,
            allowedLocalRefRoots: $options['allowed-local-ref-roots'] ?? [],
            whitelistedPaths: $options['whitelisted-paths'] ?? null,
            endpointGenerator: $options['endpoint-generator'] ?? null,
            operationNamings: $options['operation-namings'] ?? [],
            customQueryResolver: $options['custom-query-resolver'] ?? [],
            throwUnexpectedStatusCode: $options['throw-unexpected-status-code'] ?? false,
            generateErrorExceptions: $options['generate-error-exceptions'] ?? true,
        );
    }

    /**
     * Export the DTO back to the array representation used by the
     * generation entry points and console configuration.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'reference' => $this->reference,
            'strict' => $this->strict,
            'full-date-format' => $this->fullDateFormat,
            'date-format' => $this->dateFormat,
            'date-input-format' => $this->dateInputFormat,
            'date-prefer-interface' => $this->datePreferInterface,
            'use-fixer' => $this->useFixer,
            'fixer-config-file' => $this->fixerConfigFile,
            'clean-generated' => $this->cleanGenerated,
            'use-cacheable-supports-method' => $this->useCacheableSupportsMethod,
            'skip-null-values' => $this->skipNullValues,
            'skip-required-fields' => $this->skipRequiredFields,
            'custom-string-format-mapping' => $this->customStringFormatMapping,
            'validation' => $this->validation,
            'validators' => $this->validators,
            'include-null-value' => $this->includeNullValue,
            'enums-as-objects' => $this->enumsAsObjects,
            'default-additional-properties' => $this->defaultAdditionalProperties,
            'default-fetch-mode' => $this->defaultFetchMode,
            'allow-external-refs' => $this->allowExternalRefs,
            'external-ref-allowed-hosts' => $this->externalRefAllowedHosts,
            'external-ref-follow-redirects' => $this->externalRefFollowRedirects,
            'allowed-local-ref-roots' => $this->allowedLocalRefRoots,
            'whitelisted-paths' => $this->whitelistedPaths,
            'endpoint-generator' => $this->endpointGenerator,
            'operation-namings' => $this->operationNamings,
            'custom-query-resolver' => $this->customQueryResolver,
            'throw-unexpected-status-code' => $this->throwUnexpectedStatusCode,
            'generate-error-exceptions' => $this->generateErrorExceptions,
        ];
    }
}
