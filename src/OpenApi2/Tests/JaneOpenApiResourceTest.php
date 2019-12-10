<?php

namespace Jane\OpenApi2\Tests;

use function Jane\isPhpParser4;
use Jane\OpenApi2\Command\GenerateCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneOpenApiResourceTest extends TestCase
{
    /**
     * @dataProvider resourceProvider
     */
    public function testRessources($name, SplFileInfo $testDirectory)
    {
        // 1. Cleanup generated
        $filesystem = new Filesystem();

        if ($filesystem->exists($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated')) {
            $filesystem->remove($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        }

        $filesystem->mkdir($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');

        // 2. Generate
        $command = new GenerateCommand();
        $inputArray = new ArrayInput([
            '--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane-openapi',
        ], $command->getDefinition());

        $command->execute($inputArray, new NullOutput());

        // 3. Compare
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

            if ($expectedFile->isFile() && !isPhpParser4()) {
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

    public function resourceProvider()
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
