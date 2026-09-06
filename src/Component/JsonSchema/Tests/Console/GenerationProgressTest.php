<?php

namespace Jane\Component\JsonSchema\Tests\Console;

use Jane\Component\JsonSchema\Console\Command\GenerateCommand;
use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use Jane\Component\JsonSchema\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * @see https://github.com/janephp/janephp/issues/252
 */
class GenerationProgressTest extends TestCase
{
    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-progress-' . uniqid('', true);
        (new Filesystem())->mirror(__DIR__ . '/../fixtures/test-default', $this->tmpDir);
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testProgressIsPrintedDuringGeneration(): void
    {
        $display = $this->generate();

        self::assertStringContainsString('Generating for schema `schema.json`', $display);
        self::assertStringContainsString('Output: `generated/`', $display);
        self::assertMatchesRegularExpression('/➜ Guessing… done \(\d+\.\d{2}s\)/', $display);
        self::assertMatchesRegularExpression('/➜ Generating… done \(\d+\.\d{2}s\)/', $display);
        self::assertMatchesRegularExpression('/➜ \d+ files? written/', $display);
        self::assertStringContainsString('• 2 Models', $display);
        self::assertStringContainsString('• 3 Normalizers', $display);
        self::assertMatchesRegularExpression('/• \d+ Runtime/', $display);
        self::assertMatchesRegularExpression('/Done in \d+\.\d{2}s/', $display);
    }

    public function testQuietVerbosityPrintsNothing(): void
    {
        self::assertSame('', $this->generate(OutputInterface::VERBOSITY_QUIET));
    }

    private function generate(int $verbosity = OutputInterface::VERBOSITY_NORMAL): string
    {
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader());
        $input = new ArrayInput(['--config-file' => $this->tmpDir . '/.jane'], $command->getDefinition());
        $output = new BufferedOutput();
        $output->setVerbosity($verbosity);

        $exitCode = $command->execute($input, $output);
        $display = $output->fetch();
        self::assertSame(0, $exitCode, $display);

        return $display;
    }
}
