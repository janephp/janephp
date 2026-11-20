<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1164RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi3\Tests\Issue1164Expected';

    public function testCollectionSchemaThroughCompositeGetsStyle(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-1164-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.0',
            'info' => [
                'title' => 'Issue 1164',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/issues' => [
                    'get' => [
                        'operationId' => 'listIssues',
                        'parameters' => [
                            [
                                'name' => 'statusAnyOf',
                                'in' => 'query',
                                'schema' => [
                                    'anyOf' => [
                                        ['type' => 'integer'],
                                        ['type' => 'array', 'items' => ['type' => 'integer']],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'statusRef',
                                'in' => 'query',
                                'schema' => [
                                    'anyOf' => [
                                        ['type' => 'integer'],
                                        ['$ref' => '#/components/schemas/StatusList'],
                                    ],
                                ],
                            ],
                            // Control: a scalar-only schema stays on the legacy behavior.
                            [
                                'name' => 'plain',
                                'in' => 'query',
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '204' => ['description' => 'No content'],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'StatusList' => [
                        'type' => 'array',
                        'items' => ['type' => 'integer'],
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
            $class = self::widenedClassName(self::NAMESPACE . '\Endpoint\ListIssues');
            $endpoint = new $class([
                'statusAnyOf' => [1, 2],
                'statusRef' => [3, 4],
                'plain' => 'value',
            ]);

            $getQueryStyles = new \ReflectionMethod($endpoint, 'getQueryStyles');
            self::assertSame([
                'statusAnyOf' => ['style' => 'form', 'explode' => true],
                'statusRef' => ['style' => 'form', 'explode' => true],
            ], $getQueryStyles->invoke($endpoint));

            self::assertSame('statusAnyOf=1&statusAnyOf=2&statusRef=3&statusRef=4&plain=value', $endpoint->getQueryString());

            // A scalar value of the "also allows scalar" branches keeps working.
            $scalarEndpoint = new $class([
                'statusAnyOf' => 1,
                'statusRef' => 3,
                'plain' => 'value',
            ]);
            self::assertSame('statusAnyOf=1&statusRef=3&plain=value', $scalarEndpoint->getQueryString());
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
            } else {
                unlink($entryPath);
            }
        }

        rmdir($path);
    }
}
