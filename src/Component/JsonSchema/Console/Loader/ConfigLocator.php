<?php

namespace Jane\Component\JsonSchema\Console\Loader;

/**
 * Resolves the Jane configuration file to use for console entry points.
 *
 * The documented location is `config/jane/<name>.php` relative to the project
 * directory; the underscored variant is kept as a legacy fallback.
 */
final class ConfigLocator
{
    public function __construct(
        private readonly string $projectDir,
    ) {
    }

    /**
     * Returns the explicitly provided configuration file if any, otherwise the first
     * existing candidate path (relative to the project directory), otherwise the given
     * fallback path.
     *
     * @param list<string> $projectCandidates project-relative paths, tried in order
     */
    public function locate(?string $configFile, array $projectCandidates, string $fallback): string
    {
        if (null !== $configFile) {
            return $configFile;
        }

        $projectDir = rtrim($this->projectDir, '/');

        foreach ($projectCandidates as $candidate) {
            if (is_file($projectDir . '/' . $candidate)) {
                return $projectDir . '/' . $candidate;
            }
        }

        return $fallback;
    }
}
