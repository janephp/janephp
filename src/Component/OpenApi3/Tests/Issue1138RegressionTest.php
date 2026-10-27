<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * An error response with a different model per content type throws its
 * exception for each content type. The exception accepts the models of all
 * content types, not only the model of the last one.
 *
 * @see https://github.com/janephp/janephp/issues/1138
 */
class Issue1138RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi3\Tests\Issue1138Generated';

    public function testErrorResponseWithAModelPerContentTypeThrowsItsException(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue1138-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.0.3',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [
                '/things/{id}' => ['delete' => [
                    'operationId' => 'deleteThing',
                    'parameters' => [['name' => 'id', 'in' => 'path', 'required' => true, 'schema' => ['type' => 'string']]],
                    'responses' => [
                        '204' => ['description' => 'No content'],
                        '404' => [
                            'description' => 'Not found',
                            'content' => [
                                'application/json' => ['schema' => ['$ref' => '#/components/schemas/Error']],
                                'application/problem+json' => ['schema' => ['$ref' => '#/components/schemas/Problem']],
                            ],
                        ],
                    ],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'Error' => ['type' => 'object', 'properties' => ['message' => ['type' => 'string']]],
                    'Problem' => ['type' => 'object', 'properties' => ['title' => ['type' => 'string']]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $fixtureDirectory . '/generated',
        ], true) . ';');

        $generatedDirectory = $fixtureDirectory . '/generated';
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
            $output = new BufferedOutput();

            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
            $endpointClass = self::widenedClassName(self::NAMESPACE . '\Endpoint\DeleteThing');
            $exceptionClass = self::widenedClassName(self::NAMESPACE . '\Exception\DeleteThingNotFoundException');

            $cases = [
                'application/json' => ['{"message":"Not found"}', 'Error', 'message'],
                'application/problem+json' => ['{"title":"Not found"}', 'Problem', 'title'],
            ];

            foreach ($cases as $contentType => [$body, $model, $property]) {
                $response = (new MockHttpClient(new MockResponse($body, [
                    'http_code' => 404,
                    'response_headers' => ['content-type' => $contentType],
                ])))->request('DELETE', 'https://example.com/things/1');

                $thrown = null;
                try {
                    (new $endpointClass('1'))->parseResponse($response, $serializer);
                } catch (\Throwable $throwable) {
                    $thrown = $throwable;
                }

                $this->assertInstanceOf($exceptionClass, $thrown, $contentType);
                $problem = method_exists($thrown, 'getProblem') ? $thrown->getProblem() : null;
                $this->assertInstanceOf(self::widenedClassName(self::NAMESPACE . '\Model\\' . $model), $problem, $contentType);
                $this->assertSame('Not found', $problem->{$property});
            }
        } finally {
            spl_autoload_unregister($autoloader);
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
