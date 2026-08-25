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
    use FixtureComparisonTrait;

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

        // 2. Fix code style then compare
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        $this->assertFixtureMatchesGenerated($testDirectory->getRealPath());
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
