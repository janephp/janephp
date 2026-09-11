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
 *   3  crashed — any other throwable escaped the command
 *
 * PHP fatals (memory, time limit) keep their own exit code (255).
 *
 * Usage: php corpus/generate.php <config-file>
 */

use Jane\Component\OpenApiCommon\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;

require __DIR__ . '/../vendor/autoload.php';

$configFile = $argv[1] ?? null;

if (null === $configFile || !is_file($configFile)) {
    fwrite(\STDERR, "Usage: php corpus/generate.php <config-file>\n");
    exit(1);
}

$application = new Application();
$application->setAutoExit(false);
// The generate command turns every JaneExceptionInterface into a rendered
// [ERROR] block and Command::FAILURE; anything else is left to escape.
$application->setCatchExceptions(false);

$output = new ConsoleOutput();

try {
    $exitCode = $application->run(new ArrayInput(['command' => 'generate', '--config-file' => $configFile]), $output);
} catch (Throwable $throwable) {
    fwrite(\STDERR, sprintf("\nCRASH %s: %s\n%s\n", $throwable::class, $throwable->getMessage(), $throwable->getTraceAsString()));
    exit(3);
}

exit(0 === $exitCode ? 0 : 2);
