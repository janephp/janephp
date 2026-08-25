<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\JsonSchema\Tests\CodeStyleFixerTrait;
use Jane\Component\JsonSchema\Tests\FixtureComparisonTrait;
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
    use FixtureComparisonTrait;

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

        // 2. Fix code style then compare
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        $this->assertFixtureMatchesGenerated($testDirectory->getRealPath());
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
