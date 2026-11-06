<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\Attributes\DataProvider;
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
 * A success response with a content type the generator does not deserialize
 * (a wildcard such as application/*, a concrete type such as text/csv, or
 * the any-type wildcard) returns the raw body, while its JSON content types
 * still return their model.
 *
 * @see https://github.com/janephp/janephp/issues/1149
 */
class Issue1149RegressionTest extends TestCase
{
    public static function openApiVersionProvider(): iterable
    {
        yield 'OpenAPI 3.0' => ['3.0.3', 'Jane\Component\OpenApi3\Tests\Issue1149Generated30'];
        yield 'OpenAPI 3.1' => ['3.1.0', 'Jane\Component\OpenApi3\Tests\Issue1149Generated31'];
    }

    #[DataProvider('openApiVersionProvider')]
    public function testSuccessResponseWithANonJsonContentTypeReturnsTheRawBody(string $openApiVersion, string $namespace): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue1149-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        $idsParameter = [['name' => 'ids', 'in' => 'path', 'required' => true, 'schema' => ['type' => 'string']]];

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => $openApiVersion,
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [
                '/shipment_labels/{ids}' => ['get' => [
                    'operationId' => 'getShipmentLabels',
                    'parameters' => $idsParameter,
                    'responses' => [
                        '2XX' => [
                            'description' => 'The labels',
                            'content' => [
                                'application/*' => ['schema' => ['type' => 'string', 'format' => 'binary']],
                                'application/json' => ['schema' => ['$ref' => '#/components/schemas/Labels']],
                                'application/vnd.shipment_label_link+json' => ['schema' => ['$ref' => '#/components/schemas/LabelLink']],
                            ],
                        ],
                    ],
                ]],
                '/exports' => ['get' => [
                    'operationId' => 'getExport',
                    'responses' => [
                        '200' => [
                            'description' => 'The export',
                            'content' => ['text/csv' => ['schema' => ['type' => 'string']]],
                        ],
                    ],
                ]],
                '/files/{ids}' => ['get' => [
                    'operationId' => 'getFile',
                    'parameters' => $idsParameter,
                    'responses' => [
                        '200' => [
                            'description' => 'The file',
                            'content' => ['*/*' => ['schema' => ['type' => 'string', 'format' => 'binary']]],
                        ],
                    ],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'Labels' => ['type' => 'object', 'properties' => ['id' => ['type' => 'string']]],
                    'LabelLink' => ['type' => 'object', 'properties' => ['url' => ['type' => 'string']]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => $namespace,
            'directory' => $fixtureDirectory . '/generated',
        ], true) . ';');

        $generatedDirectory = $fixtureDirectory . '/generated';
        $autoloader = static function (string $class) use ($generatedDirectory, $namespace): void {
            if (!str_starts_with($class, $namespace . '\\')) {
                return;
            }

            $file = $generatedDirectory . '/' . str_replace('\\', '/', substr($class, \strlen($namespace) + 1)) . '.php';
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

            $normalizerClass = self::widenedClassName($namespace . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);

            $labels = self::widenedClassName($namespace . '\Endpoint\GetShipmentLabels');
            $export = self::widenedClassName($namespace . '\Endpoint\GetExport');
            $file = self::widenedClassName($namespace . '\Endpoint\GetFile');

            $pdf = "%PDF-1.4\n%\xE2\xE3\xCF\xD3 label";

            // application/*: any application/ content type returns the raw body...
            $this->assertSame($pdf, $this->parse(new $labels('1'), $serializer, 200, $pdf, 'application/pdf'));
            $this->assertSame($pdf, $this->parse(new $labels('1'), $serializer, 201, $pdf, 'Application/PDF; charset=binary'));
            $this->assertSame('^XA^XZ', $this->parse(new $labels('1'), $serializer, 200, '^XA^XZ', 'application/zpl'));
            // ... but the JSON content types still return their model...
            $model = $this->parse(new $labels('1'), $serializer, 200, '{"id":"42"}', 'application/json');
            $this->assertInstanceOf(self::widenedClassName($namespace . '\Model\Labels'), $model);
            $this->assertSame('42', $model->id);
            $this->assertInstanceOf(
                self::widenedClassName($namespace . '\Model\LabelLink'),
                $this->parse(new $labels('1'), $serializer, 200, '{"url":"https://example.com"}', 'application/vnd.shipment_label_link+json')
            );
            // ... and another type, or an error status, matches nothing.
            $badResponse = self::widenedClassName($namespace . '\Exception\BadResponseException');
            $this->assertUnmatched($badResponse, fn () => $this->parse(new $labels('1'), $serializer, 200, '<html></html>', 'text/html'));
            $this->assertUnmatched($badResponse, fn () => $this->parse(new $labels('1'), $serializer, 404, $pdf, 'application/pdf'));

            // A concrete content type.
            $this->assertSame("a,b\n1,2\n", $this->parse(new $export(), $serializer, 200, "a,b\n1,2\n", 'text/csv; charset=utf-8'));
            $this->assertUnmatched($badResponse, fn () => $this->parse(new $export(), $serializer, 200, '{}', 'application/json'));

            // The any-type wildcard, with or without a content type header.
            $this->assertSame('PNG', $this->parse(new $file('1'), $serializer, 200, 'PNG', 'image/png'));
            $this->assertSame('raw', $this->parse(new $file('1'), $serializer, 200, 'raw', null));
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function assertUnmatched(string $badResponseClass, \Closure $parse): void
    {
        try {
            $parse();
        } catch (\Throwable $throwable) {
            $this->assertInstanceOf($badResponseClass, $throwable);

            return;
        }

        $this->fail('The unmatched response did not throw.');
    }

    private function parse(object $endpoint, Serializer $serializer, int $status, string $body, ?string $contentType): mixed
    {
        $response = (new MockHttpClient(new MockResponse($body, [
            'http_code' => $status,
            'response_headers' => null === $contentType ? [] : ['content-type' => $contentType],
        ])))->request('GET', 'https://example.com/');

        return $endpoint->parseResponse($response, $serializer);
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
