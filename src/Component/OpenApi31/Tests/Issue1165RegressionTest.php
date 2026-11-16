<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1165RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1165Expected';

    public function testPathParameterStyleAndExplodeAreHonoured(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1165-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 1165',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/trails/{tags}/colors/{color}/ids/{ids}/filter/{filter}' => [
                    'get' => [
                        'operationId' => 'listTrails',
                        'parameters' => [
                            [
                                'name' => 'tags',
                                'in' => 'path',
                                'required' => true,
                                'style' => 'label',
                                'explode' => true,
                                'schema' => [
                                    'type' => 'array',
                                    'items' => ['type' => 'string'],
                                ],
                            ],
                            [
                                'name' => 'color',
                                'in' => 'path',
                                'required' => true,
                                'style' => 'matrix',
                                'explode' => false,
                                'schema' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'R' => ['type' => 'integer'],
                                        'G' => ['type' => 'integer'],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'ids',
                                'in' => 'path',
                                'required' => true,
                                'schema' => [
                                    'type' => 'array',
                                    'items' => ['type' => 'integer'],
                                ],
                            ],
                            [
                                'name' => 'filter',
                                'in' => 'path',
                                'required' => true,
                                'schema' => [
                                    'anyOf' => [
                                        ['type' => 'string'],
                                        ['type' => 'array', 'items' => ['type' => 'string']],
                                    ],
                                ],
                            ],
                            [
                                'name' => 'filters',
                                'in' => 'query',
                                'schema' => [
                                    'type' => ['integer', 'array'],
                                    'items' => ['type' => 'integer'],
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
            $endpoint = new $class(
                tags: ['a', 'b'],
                color: ['R' => 100, 'G' => 200],
                ids: [1, 2, 3],
                filter: ['one', 'two'],
                queryParameters: ['filters' => [1, 2, 3]]
            );

            $getPathStyles = new \ReflectionMethod($endpoint, 'getPathStyles');
            self::assertSame([
                'tags' => ['style' => 'label', 'explode' => true],
                'color' => ['style' => 'matrix', 'explode' => false],
            ], $getPathStyles->invoke($endpoint));

            // The shared collection check also serves the query side (issue #1164):
            // a type list schema allowing an array gets a style declaration.
            $getQueryStyles = new \ReflectionMethod($endpoint, 'getQueryStyles');
            self::assertSame([
                'filters' => ['style' => 'form', 'explode' => true],
            ], $getQueryStyles->invoke($endpoint));

            // Label style, exploded array, and matrix style, non exploded object:
            // the styles declared in getPathStyles() are honoured, separators stay
            // literal, values are percent encoded (issue #1165).
            self::assertSame(
                '/trails/.a.b/colors/;color=R,100,G,200/ids/1,2,3/filter/one,two',
                $endpoint->getUri()
            );
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testPathParameterTypeErrorIsFixedForArrayValues(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1165-typeerror-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => [
                'title' => 'Issue 1165 TypeError',
                'version' => '1.0.0',
            ],
            'paths' => [
                '/things/{thing}' => [
                    'get' => [
                        'operationId' => 'getThing',
                        'parameters' => [
                            [
                                'name' => 'thing',
                                'in' => 'path',
                                'required' => true,
                                'schema' => [
                                    'anyOf' => [
                                        ['type' => 'string'],
                                        ['type' => 'object'],
                                    ],
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
            $class = self::widenedClassName(self::NAMESPACE . '\Endpoint\GetThing');

            // An object value no longer throws a TypeError from rawurlencode()
            // or a literal "Array" from a string cast (issue #1165).
            $endpoint = new $class(['R' => 100]);
            self::assertSame('/things/R,100', $endpoint->getUri());

            $endpoint = new $class('thing');
            self::assertSame('/things/thing', $endpoint->getUri());
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
