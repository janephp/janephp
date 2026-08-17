<?php

namespace Jane\Component\JsonSchema\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;

class ConstraintReferencesTest extends TestCase
{
    /**
     * Generated code instantiates `new \Ns\Validator\FooConstraint()` from normalizers and from parent
     * Compound constraints. Every constraint class referenced this way must have been generated too,
     * otherwise the generated client fatals at runtime.
     *
     * @dataProvider expectedDirectoryProvider
     */
    public function testNoDanglingConstraintReference(string $expectedDirectory): void
    {
        $finder = new Finder();
        $finder->files()->in($expectedDirectory)->name('*.php');

        $generated = [];
        $referenced = [];

        foreach ($finder as $file) {
            if (str_contains(strtr($file->getPathname(), '\\', '/'), '/Validator/')) {
                $generated[$file->getBasename('.php')] = true;
            }

            if (preg_match_all('#new \\\\[A-Za-z0-9_\\\\]+\\\\Validator\\\\([A-Za-z0-9_]+Constraint)\(#', $file->getContents(), $matches)) {
                foreach ($matches[1] as $constraintName) {
                    $referenced[$constraintName][] = $file->getRelativePathname();
                }
            }
        }

        foreach ($referenced as $constraintName => $files) {
            $this->assertArrayHasKey(
                $constraintName,
                $generated,
                \sprintf('%s is instantiated in [%s] but no %s.php was generated', $constraintName, implode(', ', array_unique($files)), $constraintName)
            );
        }

        $this->addToAssertionCount(1);
    }

    public function expectedDirectoryProvider(): iterable
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/../../*/Tests/fixtures')->depth('== 1')->name('expected');

        foreach ($finder as $directory) {
            $fixture = basename(\dirname($directory->getPathname()));
            $component = basename(\dirname($directory->getPathname(), 4));

            yield $component . '/' . $fixture => [$directory->getPathname()];
        }
    }
}
