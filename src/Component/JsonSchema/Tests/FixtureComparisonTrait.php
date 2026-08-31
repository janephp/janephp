<?php

namespace Jane\Component\JsonSchema\Tests;

use PhpParser\Error;
use PhpParser\ParserFactory;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Shared comparison logic for fixture-based generator tests.
 *
 * Every generated PHP file is first run through the php-parser syntax gate:
 * matching a baseline only proves the output did not change, not that it is
 * valid PHP. Fixtures reproducing a known generator bug that emits invalid
 * PHP carry a `.known-invalid-php` marker file (content: link to the tracking
 * issue); for those the gate asserts the output still fails to parse, so the
 * marker must be deleted once the bug is fixed.
 *
 * Two baseline modes per fixture directory:
 *  - directory mode (default): committed `expected/` tree compared with the
 *    freshly generated `generated/` tree, file by file. The contents of
 *    runtime boilerplate copies (`Runtime/` segments) are skipped — they are
 *    asserted centrally by each component's `runtime-boilerplate` fixture —
 *    but their presence is still compared: runtime classes are only generated
 *    when required, so which Runtime files a fixture gets is fixture-specific
 *    and would otherwise drift unnoticed in the committed trees.
 *  - manifest mode: when an `expected.manifest.json` file exists, no
 *    `expected/` tree is needed; generated files are hashed and compared
 *    against the manifest instead.
 */
trait FixtureComparisonTrait
{
    private function assertFixtureMatchesGenerated(string $testDirectory): void
    {
        $this->assertGeneratedFilesAreValidPhp($testDirectory);

        $manifestPath = $testDirectory . \DIRECTORY_SEPARATOR . 'expected.manifest.json';

        if (is_file($manifestPath)) {
            $this->assertManifestMatchesGenerated($testDirectory, $manifestPath);

            return;
        }

        $this->assertDirectoriesMatch($testDirectory);
    }

    private function assertGeneratedFilesAreValidPhp(string $testDirectory): void
    {
        $generatedDirectory = $testDirectory . \DIRECTORY_SEPARATOR . 'generated';

        if (!is_dir($generatedDirectory)) {
            return;
        }

        $parser = (new ParserFactory())->createForHostVersion();
        $errors = [];

        $finder = new Finder();
        $finder->in($generatedDirectory)->files()->name('*.php');

        foreach ($finder as $generatedFile) {
            try {
                $parser->parse(file_get_contents($generatedFile->getRealPath()));
            } catch (Error $error) {
                $errors[] = \sprintf('%s: %s', $generatedFile->getRelativePathname(), $error->getMessage());
            }
        }

        $fixtureName = basename($testDirectory);

        if (is_file($testDirectory . \DIRECTORY_SEPARATOR . '.known-invalid-php')) {
            $this->assertNotSame(
                [],
                $errors,
                \sprintf('Generated output for %s parses again: delete its stale .known-invalid-php marker', $fixtureName)
            );

            return;
        }

        $this->assertSame(
            [],
            $errors,
            \sprintf('Generated files are not valid PHP for %s%s%s', $fixtureName, "\n", implode("\n", $errors))
        );
    }

    /**
     * Fixtures holding a `.full-compare` marker file opt out of boilerplate
     * filtering: every generated file is compared. This is how runtime
     * template copies get asserted, centrally, by the runtime-boilerplate
     * fixture of each component.
     */
    private static function comparesEverything(string $testDirectory): bool
    {
        return is_file($testDirectory . \DIRECTORY_SEPARATOR . '.full-compare');
    }

    /**
     * Runtime files found in generated output are verbatim copies of the
     * templates shipped under Generator/Runtime/data: they are identical in
     * every fixture of a component, so comparing them once (via the dedicated
     * runtime-boilerplate fixture) is enough.
     */
    private static function isBoilerplateFile(string $relativePathname): bool
    {
        return \in_array('Runtime', explode('/', $relativePathname), true);
    }

    /**
     * Which Runtime files a tree holds. Their contents are boilerplate, but
     * runtime classes are only generated when required, so the file set
     * itself is fixture-specific and has to be asserted per fixture.
     *
     * @return list<string>
     */
    private static function boilerplateFileNames(string $directory): array
    {
        $names = [];

        $finder = new Finder();
        $finder->in($directory)->files();

        foreach ($finder as $file) {
            if (self::isBoilerplateFile($file->getRelativePathname())) {
                $names[] = $file->getRelativePathname();
            }
        }

        sort($names);

        return $names;
    }

    private function assertDirectoriesMatch(string $testDirectory): void
    {
        $skipBoilerplate = !self::comparesEverything($testDirectory);
        $fixtureName = basename($testDirectory);

        $expectedFinder = new Finder();
        $expectedFinder->in($testDirectory . \DIRECTORY_SEPARATOR . 'expected');

        $generatedFinder = new Finder();
        $generatedFinder->in($testDirectory . \DIRECTORY_SEPARATOR . 'generated');

        if ($skipBoilerplate) {
            $expectedRuntime = self::boilerplateFileNames($testDirectory . \DIRECTORY_SEPARATOR . 'expected');
            $generatedRuntime = self::boilerplateFileNames($testDirectory . \DIRECTORY_SEPARATOR . 'generated');
            $stale = array_values(array_diff($expectedRuntime, $generatedRuntime));
            $missing = array_values(array_diff($generatedRuntime, $expectedRuntime));

            if ([] !== $stale || [] !== $missing) {
                $this->fail(\sprintf(
                    'The committed Runtime/ file set drifted from generated output for %s — refresh the expected/ tree (replace-all-expected-fixtures.sh).%s%s',
                    $fixtureName,
                    [] === $stale ? '' : "\nCommitted but no longer generated:\n  " . implode("\n  ", $stale),
                    [] === $missing ? '' : "\nGenerated but not committed:\n  " . implode("\n  ", $missing)
                ));
            }

            $filter = function (SplFileInfo $file) {
                if (self::isBoilerplateFile($file->getRelativePathname())) {
                    return false;
                }
            };
            $expectedFinder->filter($filter);
            $generatedFinder->filter($filter);
        }

        $this->assertEquals(
            \count($expectedFinder),
            \count($generatedFinder),
            \sprintf('No same number of files for %s', $fixtureName)
        );

        $generatedData = [];

        foreach ($generatedFinder as $generatedFile) {
            $generatedData[$generatedFile->getRelativePathname()] = $generatedFile->getRealPath();
        }

        foreach ($expectedFinder as $expectedFile) {
            $this->assertArrayHasKey(
                $expectedFile->getRelativePathname(),
                $generatedData,
                \sprintf('File %s does not exist for %s', $expectedFile->getRelativePathname(), $fixtureName)
            );

            if ($expectedFile->isFile()) {
                $this->assertEquals(
                    file_get_contents($expectedFile->getRealPath()),
                    file_get_contents($generatedData[$expectedFile->getRelativePathname()]),
                    \sprintf('File %s does not have the same content for %s', $expectedFile->getRelativePathname(), $fixtureName)
                );
            }
        }
    }

    private function assertManifestMatchesGenerated(string $testDirectory, string $manifestPath): void
    {
        $fixtureName = basename($testDirectory);

        $manifest = json_decode(file_get_contents($manifestPath), true, 512, \JSON_THROW_ON_ERROR);
        $this->assertSame('sha256', $manifest['algorithm'] ?? null, \sprintf('Unsupported manifest algorithm for %s', $fixtureName));
        $expectedHashes = $manifest['files'] ?? [];
        ksort($expectedHashes);

        $generatedHashes = [];
        $skipBoilerplate = !self::comparesEverything($testDirectory);

        if (is_dir($testDirectory . \DIRECTORY_SEPARATOR . 'generated')) {
            $generatedFinder = new Finder();
            $generatedFinder->in($testDirectory . \DIRECTORY_SEPARATOR . 'generated');

            if ($skipBoilerplate) {
                $generatedFinder->filter(function (SplFileInfo $file) {
                    if (self::isBoilerplateFile($file->getRelativePathname())) {
                        return false;
                    }
                });
            }

            foreach ($generatedFinder as $generatedFile) {
                if ($generatedFile->isFile()) {
                    $generatedHashes[$generatedFile->getRelativePathname()] = hash_file('sha256', $generatedFile->getRealPath());
                }
            }
        }

        ksort($generatedHashes);

        $missing = array_keys(array_diff_key($expectedHashes, $generatedHashes));
        $extra = array_keys(array_diff_key($generatedHashes, $expectedHashes));
        $changed = [];

        foreach (array_intersect(array_keys($expectedHashes), array_keys($generatedHashes)) as $path) {
            if ($expectedHashes[$path] !== $generatedHashes[$path]) {
                $changed[] = $path;
            }
        }

        $problems = [];

        if ([] !== $missing) {
            $problems[] = 'Missing files: ' . implode(', ', $missing);
        }

        if ([] !== $extra) {
            $problems[] = 'Unexpected files: ' . implode(', ', $extra);
        }

        if ([] !== $changed) {
            $problems[] = 'Content changed for: ' . implode(', ', $changed);
        }

        $this->assertSame(
            [],
            $problems,
            \sprintf('Generated output does not match snapshot manifest for %s%s%s', $fixtureName, "\n", implode("\n", $problems))
        );
    }
}
