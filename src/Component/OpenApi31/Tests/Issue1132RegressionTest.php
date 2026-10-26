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
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * A `+json` request body content type with parameters, such as
 * `application/vnd.foo+json;version=2`, is serialized as JSON, like the same
 * content type without parameters.
 *
 * @see https://github.com/janephp/janephp/issues/1132
 */
class Issue1132RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1132Generated';

    public function testJsonContentTypeWithParametersSerializesTheBody(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1132-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $operation = static fn (string $operationId, string $contentType): array => ['post' => [
            'operationId' => $operationId,
            'requestBody' => [
                'required' => true,
                'content' => [$contentType => ['schema' => ['$ref' => '#/components/schemas/Foo']]],
            ],
            'responses' => ['204' => ['description' => 'No content']],
        ]];
        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [
                '/versioned' => $operation('postVersioned', 'application/vnd.foo+json;version=2'),
                '/spaced' => $operation('postSpaced', 'application/vnd.foo+json; version=2'),
            ],
            'components' => [
                'schemas' => [
                    'Foo' => ['type' => 'object', 'properties' => ['name' => ['type' => 'string']]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $fixtureDirectory . '/generated',
        ], true) . ';');

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $this->requireGeneratedClasses($fixtureDirectory . '/generated');

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
            $modelClass = self::widenedClassName(self::NAMESPACE . '\Model\Foo');
            $foo = new $modelClass();
            $foo->name = 'bar';

            foreach (['PostVersioned' => 'application/vnd.foo+json;version=2', 'PostSpaced' => 'application/vnd.foo+json; version=2'] as $endpoint => $contentType) {
                $endpointClass = self::widenedClassName(self::NAMESPACE . '\Endpoint\\' . $endpoint);

                $this->assertSame([['Content-Type' => [$contentType]], '{"name":"bar"}'], (new $endpointClass($foo))->getBody($serializer));
            }
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * excluded from PHPStan's scan (generated code).
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private function requireGeneratedClasses(string $generatedDirectory): void
    {
        $files = [];
        foreach (['Runtime', 'Model', 'Normalizer', 'Endpoint'] as $directory) {
            $path = $generatedDirectory . '/' . $directory;
            if (!is_dir($path)) {
                continue;
            }

            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            /** @var \SplFileInfo $file */
            foreach ($iterator as $file) {
                if ($file->isFile() && 'php' === $file->getExtension()) {
                    $files[] = $file->getPathname();
                }
            }
        }

        // Generated files depend on each other and are not autoloadable: require them in passes.
        $pending = $files;
        while ([] !== $pending) {
            $deferred = [];
            foreach ($pending as $file) {
                try {
                    require_once $file;
                } catch (\Error $error) {
                    $deferred[] = $file;
                }
            }

            if (\count($deferred) === \count($pending)) {
                require_once $pending[0];
            }

            $pending = $deferred;
        }
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        foreach (scandir($path) ?: [] as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            is_dir($entryPath) ? $this->removeDirectory($entryPath) : unlink($entryPath);
        }

        rmdir($path);
    }
}
