<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * Webhook entries of an OpenAPI 3.1 document are Path Item Objects or Reference
 * Objects, not raw maps. Jane denormalized and guessed only PathItem entries, so
 * operations declared inline in a webhook (and their request body schemas) never
 * produced any model.
 *
 * @see https://github.com/janephp/janephp/issues/1162
 */
class Issue1162RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1162Generated';

    public function testARequestBodyOnAWebhookGeneratesAModel(): void
    {
        $generatedDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1162-' . bin2hex(random_bytes(8)) . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $configFile = $generatedDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => __DIR__ . '/fixtures/issue-1162/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $generatedDirectory,
            'clean-generated' => true,
            'use-fixer' => false,
        ], true) . ';');

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        $autoloader = static function (string $class) use ($generatedDirectory): void {
            if (!str_starts_with($class, self::NAMESPACE . '\\')) {
                return;
            }

            $file = $generatedDirectory . '/' . str_replace('\\', '/', substr($class, \strlen(self::NAMESPACE) + 1)) . '.php';
            if (is_file($file)) {
                require_once $file;
            }
        };
        spl_autoload_register($autoloader);

        try {
            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $bodyClass = self::NAMESPACE . '\Model\WebhooksPetCreatedPostBody';

            $this->assertFileExists(
                $generatedDirectory . '/Model/WebhooksPetCreatedPostBody.php',
                'The webhook request body model is not generated.'
            );

            $model = new $bodyClass();
            $model->id = 1;
            $this->assertSame(1, $model->id);
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory(\dirname($generatedDirectory));
        }
    }

    public function testAReferencedWebhookGeneratesAModel(): void
    {
        $generatedDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1162-ref-' . bin2hex(random_bytes(8)) . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $configFile = $generatedDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => __DIR__ . '/fixtures/issue-1162-ref/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $generatedDirectory,
            'clean-generated' => true,
            'use-fixer' => false,
        ], true) . ';');

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        try {
            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $bodyFile = $generatedDirectory . '/Model/WebhooksPetDeletedPostBody.php';

            $this->assertFileExists(
                $bodyFile,
                'The referenced webhook request body model is not generated.'
            );
        } finally {
            $this->removeDirectory(\dirname($generatedDirectory));
        }
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $entries = scandir($directory) ?: [];
        foreach ($entries as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $path = $directory . '/' . $entry;
            is_dir($path) ? $this->removeDirectory($path) : unlink($path);
        }

        rmdir($directory);
    }
}
