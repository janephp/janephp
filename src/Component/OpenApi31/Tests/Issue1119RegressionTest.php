<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1119RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1119Expected';

    public function testQueryParameterStyleAndExplodeAreHonoured(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1119-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 1119',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/trails' => [
                    'get' => [
                        'operationId' => 'listTrails',
                        'parameters' => [
                            [
                                'name' => 'filter[trail]',
                                'in' => 'query',
                                'style' => 'deepObject',
                                'explode' => true,
                                'schema' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'climb' => ['type' => 'string'],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'tags',
                                'in' => 'query',
                                'style' => 'pipeDelimited',
                                'explode' => false,
                                'schema' => [
                                    'type' => 'array',
                                    'items' => ['type' => 'string'],
                                ],
                            ],
                        ],
                        'responses' => [
                            '204' => ['description' => 'No content'],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => %s,\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export(self::NAMESPACE, true),
            var_export($generatedDirectory, true)
        ));

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
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            self::assertSame(0, $command->execute($input, new NullOutput()));

            /** @var class-string */
            $class = self::widenedClassName(self::NAMESPACE . '\Endpoint\ListTrails');
            $endpoint = new $class([
                'filter[trail]' => ['climb' => 'major'],
                'tags' => ['a', 'b'],
            ]);

            $getQueryStyles = new \ReflectionMethod($endpoint, 'getQueryStyles');
            self::assertSame([
                'filter[trail]' => ['style' => 'deepObject', 'explode' => true],
                'tags' => ['style' => 'pipeDelimited', 'explode' => false],
            ], $getQueryStyles->invoke($endpoint));

            self::assertSame('filter%5Btrail%5D%5Bclimb%5D=major&tags=a|b', $endpoint->getQueryString());
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        $entries = scandir($path);
        if (false === $entries) {
            return;
        }

        foreach ($entries as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            if (is_dir($entryPath)) {
                $this->removeDirectory($entryPath);
                continue;
            }

            unlink($entryPath);
        }

        rmdir($path);
    }
}
