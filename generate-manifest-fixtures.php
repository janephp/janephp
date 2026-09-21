<?php

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

if ('cli' !== \PHP_SAPI) {
    throw new RuntimeException('This script must be run from the CLI. It generates the output of the manifest fixtures.');
}

// The fixtures generate under the test suite's memory budget (phpunit.xml sets
// 1024M); mirror it so the script also runs inside the castor static binary,
// whose embedded PHP defaults to 128M.
ini_set('memory_limit', '1024M');

require __DIR__ . '/vendor/autoload.php';

$fixturesFinder = new Finder();
$fixturesFinder->directories()->depth('< 1')->in(__DIR__ . '/src/Component/OpenApi3/Tests/fixtures');

$manifestFixtures = [];

foreach ($fixturesFinder as $fixtureDirectory) {
    if (is_file($fixtureDirectory->getRealPath() . '/expected.manifest.json')) {
        $manifestFixtures[] = $fixtureDirectory;
    }
}

if ([] === $manifestFixtures) {
    throw new RuntimeException('No manifest fixture found under src/Component/OpenApi3/Tests/fixtures.');
}

foreach ($manifestFixtures as $fixtureDirectory) {
    $configFile = $fixtureDirectory->getRealPath() . '/.jane-openapi';
    $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
    $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
    $output = new BufferedOutput();
    $exitCode = $command->execute($input, $output);

    if (0 !== $exitCode) {
        throw new RuntimeException(sprintf('Generation failed for "%s": %s', $configFile, $output->fetch()));
    }

    printf('Generated %s%s', $fixtureDirectory->getFilename(), PHP_EOL);
}
