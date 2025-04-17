<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Console\Command\GenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneBaseTest extends TestCase
{
    use CodeStyleFixerTrait;

    /**
     * @dataProvider schemaProvider
     */
    public function testResources(SplFileInfo $testDirectory): void
    {
        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader());
        $inputArray = new ArrayInput([
            '--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane',
        ], $command->getDefinition());

        $command->execute($inputArray, new NullOutput());

        // 2. Compare
        $expectedFinder = new Finder();
        $expectedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $generatedFinder = new Finder();
        $generatedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        $generatedData = [];

        $this->assertEquals(\count($expectedFinder), \count($generatedFinder), \sprintf('No same number of files for %s', $testDirectory->getRelativePathname()));

        foreach ($generatedFinder as $generatedFile) {
            $generatedData[$generatedFile->getRelativePathname()] = $generatedFile->getRealPath();
        }

        foreach ($expectedFinder as $expectedFile) {
            $this->assertArrayHasKey(
                $expectedFile->getRelativePathname(),
                $generatedData,
                \sprintf('File %s does not exist for %s', $expectedFile->getRelativePathname(), $testDirectory->getRelativePathname())
            );

            if ($expectedFile->isFile()) {
                $this->assertEquals(
                    file_get_contents($expectedFile->getRealPath()),
                    file_get_contents($generatedData[$expectedFile->getRelativePathname()]),
                    \sprintf('File %s does not have the same content for %s', $expectedFile->getRelativePathname(), $testDirectory->getRelativePathname())
                );
            }
        }
    }

    public function schemaProvider(): array
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/fixtures');
        $finder->depth('< 1');
        $data = [];
        foreach ($finder as $key => $directory) {
            $data[str_replace(__DIR__ . '/fixtures/', 'fixtures-', $key)] = [$directory];
        }

        return $data;
    }
}
