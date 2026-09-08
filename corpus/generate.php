<?php

declare(strict_types=1);

/*
 * Child process of the corpus smoke job (castor qa:corpus): runs the real
 * `jane-openapi generate` command on one configuration file and maps what
 * happened onto an exit code the parent can classify without parsing output:
 *
 *   0  generated
 *   2  rejected — the specification was refused with a clean Jane error
 *      (pre-generation validation, unsupported version, unparseable document:
 *      ADR 0002), which is correct behaviour, not a crash
 *   3  crashed — a raw PHP error escaped the generator, wrapped or not
 *
 * PHP fatals (memory, time limit) keep their own exit code (255).
 *
 * The shipped command renders every JaneExceptionInterface as an [ERROR] block
 * and returns Command::FAILURE, which flattens that distinction: ChainGenerator
 * wraps a TypeError raised inside a generator in a GenerationFailedException,
 * itself a JaneExceptionInterface, so a crash during the generation phase would
 * be indistinguishable from a clean rejection. The command therefore runs with
 * its top-level catch removed and the exceptions are classified here instead.
 *
 * Usage: php corpus/generate.php <config-file>
 */

use Jane\Component\JsonSchema\Exception\GenerationFailedException;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

require __DIR__ . '/../vendor/autoload.php';

$configFile = $argv[1] ?? null;

if (null === $configFile || !is_file($configFile)) {
    fwrite(\STDERR, "Usage: php corpus/generate.php <config-file>\n");
    exit(1);
}

// The command of Jane\Component\OpenApiCommon\Application, wired the same way,
// minus the top-level catch: it is run on its own rather than registered on an
// application, whose add()/addCommand() spelling differs across Symfony 7 and 8.
$generate = new class(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher()) extends GenerateCommand {
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        return $this->executeGeneration($input, $output);
    }
};
$generate->setName('generate');

$output = new ConsoleOutput();

$crash = static function (\Throwable $throwable): never {
    fwrite(\STDERR, sprintf("\nCRASH %s: %s\n%s\n", $throwable::class, $throwable->getMessage(), $throwable->getTraceAsString()));
    exit(3);
};

try {
    $exitCode = $generate->run(new ArrayInput(['--config-file' => $configFile]), $output);
} catch (GenerationFailedException $throwable) {
    // The safety net of ChainGenerator: a raw PHP error, not a refusal.
    $crash($throwable->getPrevious() ?? $throwable);
} catch (JaneExceptionInterface $throwable) {
    fwrite(\STDERR, sprintf("\nREJECTED %s: %s\n", $throwable::class, $throwable->getMessage()));
    exit(2);
} catch (Throwable $throwable) {
    $crash($throwable);
}

exit(0 === $exitCode ? 0 : 2);
