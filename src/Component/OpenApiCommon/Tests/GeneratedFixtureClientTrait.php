<?php

namespace Jane\Component\OpenApiCommon\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\Assert;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * Generates the client of a fixture into a temporary directory, under its own
 * namespace, and autoloads it: runtime tests then exercise the generated code
 * without committing `Runtime/` copies in the fixture baseline.
 */
trait GeneratedFixtureClientTrait
{
    /** @var list<string> */
    private static array $generatedFixtureDirectories = [];

    /**
     * @param array<string, mixed> $options overrides of the fixture configuration
     */
    private static function generateFixtureClient(string $fixtureDirectory, string $namespace, array $options = []): void
    {
        $directory = sys_get_temp_dir() . \DIRECTORY_SEPARATOR . 'jane-' . str_replace('\\', '-', $namespace) . '-' . bin2hex(random_bytes(4));
        $configFile = $directory . '.jane-openapi.php';

        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn array_merge(require %s, %s);\n",
            var_export($fixtureDirectory . \DIRECTORY_SEPARATOR . '.jane-openapi', true),
            var_export(array_merge($options, ['namespace' => $namespace, 'directory' => $directory]), true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $output = new BufferedOutput();
            $exitCode = $command->execute(new ArrayInput(['--config-file' => $configFile], $command->getDefinition()), $output);
        } finally {
            unlink($configFile);
        }

        self::$generatedFixtureDirectories[] = $directory;
        Assert::assertSame(0, $exitCode, $output->fetch());

        spl_autoload_register(static function (string $class) use ($namespace, $directory): void {
            if (!str_starts_with($class, $namespace . '\\')) {
                return;
            }

            $file = $directory . \DIRECTORY_SEPARATOR . str_replace('\\', \DIRECTORY_SEPARATOR, substr($class, \strlen($namespace) + 1)) . '.php';

            if (is_file($file)) {
                require_once $file;
            }
        });
    }

    private static function removeGeneratedFixtureClients(): void
    {
        foreach (self::$generatedFixtureDirectories as $directory) {
            self::removeGeneratedFixtureDirectory($directory);
        }

        self::$generatedFixtureDirectories = [];
    }

    private static function removeGeneratedFixtureDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        foreach (scandir($path) ?: [] as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . \DIRECTORY_SEPARATOR . $entry;
            is_dir($entryPath) ? self::removeGeneratedFixtureDirectory($entryPath) : unlink($entryPath);
        }

        rmdir($path);
    }
}
