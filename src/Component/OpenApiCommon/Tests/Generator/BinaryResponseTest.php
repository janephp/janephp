<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

/**
 * @see https://github.com/janephp/janephp/issues/1143
 */
class BinaryResponseTest extends TestCase
{
    public static function versions(): iterable
    {
        yield 'OpenAPI 3.0' => ['3.0.3', true];
        yield 'OpenAPI 3.1' => ['3.1.0', true];
        yield 'OpenAPI 3.0 without error exceptions' => ['3.0.3', false];
        yield 'OpenAPI 3.1 without error exceptions' => ['3.1.0', false];
    }

    #[DataProvider('versions')]
    public function testRawResponses(string $version, bool $hasErrorExceptions): void
    {
        $directory = sys_get_temp_dir() . '/jane-binary-response-' . bin2hex(random_bytes(8));
        $namespace = 'BinaryResponse' . str_replace('.', '', $version) . ($hasErrorExceptions ? 'WithErrors' : 'WithoutErrors');
        $filesystem = new Filesystem();
        $filesystem->mkdir($directory);
        $raw = ['description' => 'Document', 'content' => ['application/pdf' => ['schema' => ['type' => 'string', 'format' => 'binary']]]];
        $json = ['schema' => ['$ref' => '#/components/schemas/Message']];
        $mixed = $raw;
        $mixed['content']['application/json'] = $json;
        $responses = [
            'getPdf' => ['200' => $raw, '404' => ['description' => 'Not found', 'content' => ['application/json' => $json]]],
            'getBytes' => ['200' => ['description' => 'Bytes', 'content' => ['application/octet-stream' => ['schema' => ['$ref' => '#/components/schemas/Bytes']]]]],
            'getMixed' => ['200' => $mixed],
            'getText' => ['200' => ['description' => 'Text', 'content' => ['text/plain' => new \stdClass()]]],
            'getRange' => ['2XX' => $raw],
            'getDefault' => ['default' => $raw],
            'getError' => ['400' => $raw],
        ];
        $paths = [];
        foreach ($responses as $operation => $operationResponses) {
            $paths['/' . $operation] = ['get' => ['operationId' => $operation, 'responses' => $operationResponses]];
        }
        file_put_contents($directory . '/openapi.json', json_encode([
            'openapi' => $version,
            'info' => ['title' => 'Binary response', 'version' => '1'],
            'servers' => [['url' => 'https://example.com']],
            'paths' => $paths,
            'components' => ['schemas' => [
                'Message' => ['type' => 'object', 'properties' => ['message' => ['type' => 'string']]],
                'Bytes' => ['type' => 'string', 'format' => 'base64'],
            ]],
        ], \JSON_THROW_ON_ERROR));
        $configFile = $directory . '/config.php';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $directory . '/openapi.json',
            'namespace' => $namespace,
            'directory' => $directory . '/generated',
            'generate-error-exceptions' => $hasErrorExceptions,
            'use-fixer' => false,
        ], true) . ';');
        $autoloader = static function (string $class) use ($namespace, $directory): void {
            if (str_starts_with($class, $namespace . '\\')) {
                $file = $directory . '/generated/' . str_replace('\\', '/', substr($class, \strlen($namespace) + 1)) . '.php';
                if (is_file($file)) {
                    require_once $file;
                }
            }
        };
        spl_autoload_register($autoloader);

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();
            self::assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $clientClass = self::className($namespace . '\\Client');
            $bytes = "%PDF-1.7\n\0\xffdocument";
            foreach ([
                ['getPdf', 200, 'Application/PDF; charset=binary', $bytes],
                ['getBytes', 200, 'application/octet-stream', $bytes],
                ['getMixed', 200, 'application/pdf', $bytes],
                ['getText', 200, 'text/plain; charset=utf-8', 'hello'],
                ['getRange', 206, 'application/pdf', $bytes],
                ['getDefault', 200, 'application/pdf', $bytes],
            ] as [$operation, $status, $contentType, $body]) {
                $client = $clientClass::create(new MockHttpClient(new MockResponse($body, [
                    'http_code' => $status,
                    'response_headers' => ['content-type: ' . $contentType],
                ])));
                self::assertSame($body, $client->$operation(), $operation);
                $endpoint = file_get_contents($directory . '/generated/Endpoint/' . ucfirst($operation) . '.php');
                self::assertIsString($endpoint);
                self::assertStringContainsString('@return string', $endpoint);
            }
            $clientCode = file_get_contents($directory . '/generated/Client.php');
            self::assertIsString($clientCode);
            self::assertStringContainsString('@return string', $clientCode);

            $client = $clientClass::create(new MockHttpClient(new MockResponse('{"message":"ok"}', [
                'response_headers' => ['content-type: application/json'],
            ])));
            $message = $client->getMixed();
            self::assertInstanceOf(self::className($namespace . '\\Model\\Message'), $message);
            self::assertSame('ok', $message->message);

            foreach ([
                ['getPdf', 404, 'application/json', '{"message":"missing"}', $hasErrorExceptions ? 'GetPdfNotFoundException' : null],
                ['getPdf', 200, 'text/plain', 'wrong media type', 'BadResponseException'],
                ['getPdf', 201, 'application/pdf', $bytes, 'BadResponseException'],
                ['getPdf', 200, null, $bytes, 'BadResponseException'],
                ['getMixed', 200, null, $bytes, 'BadResponseException'],
                ['getError', 400, 'application/pdf', $bytes, 'BadResponseException'],
            ] as [$operation, $status, $contentType, $body, $exception]) {
                $client = $clientClass::create(new MockHttpClient(new MockResponse($body, [
                    'http_code' => $status,
                    'response_headers' => null === $contentType ? [] : ['content-type: ' . $contentType],
                ])));
                $thrown = null;
                $result = null;
                try {
                    $result = $client->$operation();
                } catch (\Throwable $error) {
                    $thrown = $error;
                }
                if (null !== $exception) {
                    self::assertInstanceOf(self::className($namespace . '\\Exception\\' . $exception), $thrown);
                } else {
                    self::assertNull($thrown);
                    self::assertInstanceOf(self::className($namespace . '\\Model\\Message'), $result);
                    self::assertSame('missing', $result->message);
                }
            }
        } finally {
            spl_autoload_unregister($autoloader);
            $filesystem->remove($directory);
        }
    }

    private static function className(string $class): string
    {
        return $class;
    }
}
