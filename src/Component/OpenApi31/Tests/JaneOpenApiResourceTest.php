<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\JsonSchema\Tests\CodeStyleFixerTrait;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneOpenApiResourceTest extends TestCase
{
    use CodeStyleFixerTrait;

    /**
     * @dataProvider resourceProvider
     */
    public function testResources($name, SplFileInfo $testDirectory): void
    {
        if ($this->shouldSkipPathForCurrentPhpParserVersion($testDirectory->getRealPath())) {
            $this->markTestSkipped('Skip path ' . $testDirectory->getRealPath());
        }

        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');

        // 2. Compare
        $expectedFinder = new Finder();
        $expectedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');

        $generatedFinder = new Finder();
        $generatedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');

        $generatedData = [];

        $this->assertEquals(\count($expectedFinder), \count($generatedFinder), 'Assert same files for ' . $testDirectory->getRealPath());

        foreach ($generatedFinder as $generatedFile) {
            $generatedData[$generatedFile->getRelativePathname()] = $generatedFile->getRealPath();
        }

        foreach ($expectedFinder as $expectedFile) {
            $this->assertArrayHasKey($expectedFile->getRelativePathname(), $generatedData);

            if ($expectedFile->isFile()) {
                $expectedPath = $expectedFile->getRealPath();
                $actualPath = $generatedData[$expectedFile->getRelativePathname()];

                $this->assertEquals(
                    file_get_contents($expectedPath),
                    file_get_contents($actualPath),
                    'Expected ' . $expectedPath . ' got ' . $actualPath . ' in ' . $name
                );
            }
        }
    }

    public function resourceProvider(): array
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/fixtures');
        $finder->depth('< 1');

        $data = [];

        foreach ($finder as $directory) {
            $data[$directory->getFilename()] = [$directory->getFilename(), $directory];
        }

        return $data;
    }
}
