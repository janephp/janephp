<?php

namespace Jane\Component\JsonSchema\Tests;

use PHPUnit\Framework\TestCase;

/**
 * No two fixtures may declare the same fully-qualified class name: every
 * fixture generates into its own namespace (its config appends a segment
 * derived from the fixture directory name).
 *
 * Tooling relies on this invariant. Static analysis loads all `expected/`
 * trees into one process, and with duplicate class names it resolves
 * references against an arbitrary declaration, making the results
 * meaningless. The invariant cannot be derived from the directory layout:
 * before namespaces were made unique, the OpenApi2 issue-770 fixture
 * generated into the OpenApi3 test namespace.
 */
class ExpectedNamespaceUniquenessTest extends TestCase
{
    public function testNoClassIsDeclaredByTwoFixtures(): void
    {
        $declaredIn = [];
        $collisions = [];

        foreach ($this->fixtureDirectories() as $directory) {
            foreach ($this->declaredClasses($directory) as $class) {
                if (isset($declaredIn[$class])) {
                    $collisions[] = \sprintf('%s declared by both %s and %s', $class, $declaredIn[$class], $directory);
                } else {
                    $declaredIn[$class] = $directory;
                }
            }
        }

        $this->assertSame(
            [],
            $collisions,
            "Fixtures must not share class names — give each a unique 'namespace' in its config:\n" . implode("\n", $collisions)
        );

        $this->assertNotSame([], $declaredIn, 'No fixture classes found: the expected/ trees should not be empty');
    }

    /**
     * The committed `expected/` trees of every component, relative to the repository root.
     *
     * @return list<string>
     */
    private function fixtureDirectories(): array
    {
        $root = \dirname(__DIR__, 4);
        $directories = glob($root . '/src/Component/*/Tests/fixtures/*/expected', \GLOB_ONLYDIR) ?: [];

        sort($directories);

        return $directories;
    }

    /**
     * Every class-like name a fixture tree declares, fully qualified.
     *
     * Textual, not reflective, on purpose: a tree reproducing a generator bug
     * may hold invalid PHP (`.known-invalid-php` markers) and would not
     * survive parsing.
     *
     * @return list<string>
     */
    private function declaredClasses(string $directory): array
    {
        $classes = [];

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory, \FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if (!$file->isFile() || 'php' !== $file->getExtension()) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());
            $namespace = preg_match('/^namespace\s+([^;\s]+)\s*;/m', $contents, $matches) ? $matches[1] . '\\' : '';

            if (preg_match_all('/^\s*(?:(?:final|abstract|readonly)\s+)*(?:class|interface|trait|enum)\s+([A-Za-z_]\w*)/m', $contents, $matches)) {
                foreach ($matches[1] as $name) {
                    $classes[] = $namespace . $name;
                }
            }
        }

        return $classes;
    }
}
