<?php

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Printer;
use Jane\Component\JsonSchema\Registry\Registry;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\OutputInterface;

class PrinterTest extends TestCase
{
    public function testFixerOutputIsForwardedOnVerboseSuccess(): void
    {
        $printer = new Printer(new Standard(['shortArraySyntax' => true]), '', fn (): Command => $this->createFakeFixer(Command::SUCCESS, 'fixed 3 files'));
        $printer->setUseFixer(true);

        $consoleOutput = new BufferedOutput();
        $consoleOutput->setVerbosity(OutputInterface::VERBOSITY_VERBOSE);
        $printer->output($this->createRegistry(), $consoleOutput);

        $this->assertStringContainsString('fixed 3 files', $consoleOutput->fetch());
    }

    public function testFixerOutputIsSilentOnNormalSuccess(): void
    {
        $printer = new Printer(new Standard(['shortArraySyntax' => true]), '', fn (): Command => $this->createFakeFixer(Command::SUCCESS, 'fixed 3 files'));
        $printer->setUseFixer(true);

        $consoleOutput = new BufferedOutput();
        $printer->output($this->createRegistry(), $consoleOutput);

        $this->assertSame('', $consoleOutput->fetch());
    }

    public function testFixerFailureThrowsAndAlwaysSurfacesOutput(): void
    {
        $printer = new Printer(new Standard(['shortArraySyntax' => true]), '', fn (): Command => $this->createFakeFixer(Command::FAILURE, 'fixer exploded'));
        $printer->setUseFixer(true);

        $consoleOutput = new BufferedOutput();

        try {
            $printer->output($this->createRegistry(), $consoleOutput);
            $this->fail('A RuntimeException should have been thrown.');
        } catch (\RuntimeException $exception) {
            $this->assertStringContainsString('php-cs-fixer failed', $exception->getMessage());
        }

        $this->assertStringContainsString('fixer exploded', $consoleOutput->fetch());
    }

    public function testMissingFixerIsIgnored(): void
    {
        $printer = new Printer(new Standard(['shortArraySyntax' => true]), '', fn (): ?Command => null);
        $printer->setUseFixer(true);

        // No exception: generation still succeeds when php-cs-fixer is not installed.
        $printer->output($this->createRegistry(), new BufferedOutput());

        $this->addToAssertionCount(1);
    }

    private function createRegistry(): Registry
    {
        $registry = new Registry();
        $registry->addOutputDirectory(sys_get_temp_dir() . '/jane-printer-test-' . getmypid());

        return $registry;
    }

    private function createFakeFixer(int $returnCode, string $message): Command
    {
        return new class($returnCode, $message) extends Command {
            public function __construct(
                private readonly int $fakeReturnCode,
                private readonly string $fakeMessage,
            ) {
                parent::__construct();
            }

            public function getDefinition(): InputDefinition
            {
                $definition = new InputDefinition();
                $definition->addArgument(new InputArgument('path', InputArgument::IS_ARRAY));
                $definition->addOption(new InputOption('config', null, InputOption::VALUE_REQUIRED));
                $definition->addOption(new InputOption('allow-risky', null, InputOption::VALUE_REQUIRED));
                $definition->addOption(new InputOption('rules', null, InputOption::VALUE_REQUIRED));

                return $definition;
            }

            public function run(InputInterface $input, OutputInterface $output): int
            {
                $output->write($this->fakeMessage);

                return $this->fakeReturnCode;
            }
        };
    }
}
