<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime;

/**
 * Holds the configuration and the fetch caches used while resolving
 * {@see Reference} instances.
 *
 * State that used to live in static properties on {@see Reference} moved here
 * so resolution can be configured and cached per object graph instead of
 * process-wide. The generation entry points ({@see \Jane\Component\JsonSchema\Jane::build()}
 * and {@see \Jane\Component\OpenApiCommon\JaneOpenApi::build()}) create a
 * dedicated resolver for the run and thread it through the pipeline; bare
 * `new Reference($ref, $origin)` calls emitted in generated code fall back to
 * the shared default instance returned by {@see self::default()}.
 */
final class ReferenceResolver
{
    /** @var array<string, string> */
    private array $fileCache = [];

    /** @var array<string, \Rs\Json\Pointer> */
    private array $pointerCache = [];

    /** @var array<string, mixed> */
    private array $arrayCache = [];

    private bool $allowExternalRefs = false;

    /** @var array<string> */
    private array $allowedExternalHosts = [];

    private bool $followRedirects = false;

    /** @var array<string> */
    private array $allowedLocalRefRoots = [];

    private static ?self $default = null;

    /**
     * Process-wide resolver used by generated code that constructs references
     * without an explicit resolver.
     */
    public static function default(): self
    {
        return self::$default ??= new self();
    }

    /**
     * Apply the reference-related options accepted by the generation entry
     * points (`allow-external-refs`, `external-ref-allowed-hosts`,
     * `external-ref-follow-redirects`, `allowed-local-ref-roots`).
     *
     * @param array<string, mixed> $options
     */
    public function applyOptions(array $options): void
    {
        $this->resetConfiguration();
        $this->setAllowExternalRefs((bool) ($options['allow-external-refs'] ?? false));
        $this->setAllowedExternalHosts($options['external-ref-allowed-hosts'] ?? []);
        $this->setFollowRedirects((bool) ($options['external-ref-follow-redirects'] ?? false));
        $this->setAllowedLocalRefRoots($options['allowed-local-ref-roots'] ?? []);
    }

    public function setAllowExternalRefs(bool $allow = true): void
    {
        $this->allowExternalRefs = $allow;
    }

    public function setAllowedExternalHosts(array $hosts): void
    {
        $this->allowedExternalHosts = $hosts;
    }

    public function setAllowedLocalRefRoots(array $roots): void
    {
        $this->allowedLocalRefRoots = $roots;
    }

    /**
     * Allow (or forbid) following HTTP redirects when fetching external
     * references. Disabled by default: an allowlisted host must not be able
     * to bounce the fetch to an arbitrary, possibly non allowlisted host.
     */
    public function setFollowRedirects(bool $allow = true): void
    {
        $this->followRedirects = $allow;
    }

    public function resetConfiguration(): void
    {
        $this->allowExternalRefs = false;
        $this->allowedExternalHosts = [];
        $this->followRedirects = false;
        $this->allowedLocalRefRoots = [];
    }

    public function allowsExternalRefs(): bool
    {
        return $this->allowExternalRefs;
    }

    /**
     * @return array<string>
     */
    public function getAllowedExternalHosts(): array
    {
        return $this->allowedExternalHosts;
    }

    /**
     * @return array<string>
     */
    public function getAllowedLocalRefRoots(): array
    {
        return $this->allowedLocalRefRoots;
    }

    public function followsRedirects(): bool
    {
        return $this->followRedirects;
    }

    public function hasFile(string $fragment): bool
    {
        return \array_key_exists($fragment, $this->fileCache);
    }

    public function getFile(string $fragment): string
    {
        return $this->fileCache[$fragment];
    }

    public function setFile(string $fragment, string $contents): void
    {
        $this->fileCache[$fragment] = $contents;
    }

    public function hasArray(string $reference): bool
    {
        return \array_key_exists($reference, $this->arrayCache);
    }

    public function getArray(string $reference): mixed
    {
        return $this->arrayCache[$reference];
    }

    public function setArray(string $reference, mixed $value): void
    {
        $this->arrayCache[$reference] = $value;
    }

    public function hasPointer(string $fragment): bool
    {
        return \array_key_exists($fragment, $this->pointerCache);
    }

    public function getPointer(string $fragment): \Rs\Json\Pointer
    {
        return $this->pointerCache[$fragment];
    }

    public function setPointer(string $fragment, \Rs\Json\Pointer $pointer): void
    {
        $this->pointerCache[$fragment] = $pointer;
    }
}
