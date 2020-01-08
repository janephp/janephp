<?php

namespace Jane\OpenApi\Tests;

use Jane\OpenApiCommon\Command\GenerateCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneOpenApiResourceTest extends TestCase
{
    /**
     * @dataProvider resourceProvider
     */
    public function testRessources($name, SplFileInfo $testDirectory): void
    {
        // 1. Generate
        $command = new GenerateCommand();
        $input = new ArrayInput(['--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

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
            $data[] = [$directory->getFilename(), $directory];
        }

        return $data;
    }
}
