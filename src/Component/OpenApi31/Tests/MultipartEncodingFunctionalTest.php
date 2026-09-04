<?php

namespace Jane\Component\OpenApi31\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Functional test for generated multipart/form-data endpoints carrying binary
 * parts with a filename and a declared encoding content type.
 *
 * This test generates a client from the issue-1036 OpenApi 3.1 specification
 * and pushes the request through the full generated client stack, capturing
 * the PSR-7 request handed to an injected PSR-18 client: method, URI,
 * headers, boundary and the assembled multipart body actually sent on the
 * wire. It complements the fixture comparison test, which only asserts
 * generation output, as no runtime coverage existed for multipart bodies in
 * the OpenApi31 component.
 *
 * Generation runs in a dedicated child process: resource tests spawn many
 * generations within one PHPUnit process and leave state behind that breaks
 * later ones, so this test cannot rely on sharing their process.
 *
 * Addresses issue https://github.com/janephp/janephp/issues/1036
 */
class MultipartEncodingFunctionalTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/issue-1036';
    private const NAMESPACE_PREFIX = 'Jane\Component\OpenApi31\Tests\Issue1036Functional';

    public function testMultipartRequestOnTheWireCarriesFilenameAndDeclaredContentType(): void
    {
        $request = self::uploadThroughGeneratedClient([
            'file' => ['type' => 'string', 'value' => 'pdf-file-content'],
            'preview' => ['type' => 'string', 'value' => 'preview-file-content'],
            'note' => ['type' => 'string', 'value' => 'a note'],
        ]);

        self::assertSame('POST', $request['method']);
        self::assertSame('/documents', $request['path']);

        self::assertStringContainsString('multipart/form-data', $request['contentType']);
        $boundary = self::extractBoundary($request['contentType']);

        [$fileHeaders, $fileContent] = self::findPart($request['body'], $boundary, 'file');
        self::assertStringContainsString('Content-Disposition: form-data; name="file"; filename="file"', $fileHeaders);
        self::assertStringContainsString('Content-Type: application/pdf', $fileHeaders);
        self::assertSame('pdf-file-content', $fileContent);

        [$previewHeaders, $previewContent] = self::findPart($request['body'], $boundary, 'preview');
        self::assertStringContainsString('Content-Disposition: form-data; name="preview"; filename="preview"', $previewHeaders);
        self::assertStringNotContainsString('image/*', $previewHeaders);
        self::assertSame('preview-file-content', $previewContent);

        [$noteHeaders, $noteContent] = self::findPart($request['body'], $boundary, 'note');
        self::assertStringContainsString('Content-Disposition: form-data; name="note"', $noteHeaders);
        self::assertStringNotContainsString('; filename=', $noteHeaders);
        self::assertSame('a note', $noteContent);
    }

    public function testDefaultFilenameYieldsToRealFilesOnTheWire(): void
    {
        $realFile = sys_get_temp_dir() . '/jane-issue-1036-functional-upload.pdf';
        file_put_contents($realFile, 'real-file-content');

        try {
            // a resource backed by a real file keeps its derived filename on the wire
            $request = self::uploadThroughGeneratedClient([
                'file' => ['type' => 'realfile', 'value' => $realFile],
            ]);

            [$fileHeaders, $fileContent] = self::findPart(
                $request['body'],
                self::extractBoundary($request['contentType']),
                'file'
            );
            self::assertStringContainsString('filename="jane-issue-1036-functional-upload.pdf"', $fileHeaders);
            self::assertStringContainsString('Content-Type: application/pdf', $fileHeaders);
            self::assertSame('real-file-content', $fileContent);

            // an in-memory resource has no derivable filename: the property name fallback applies
            $request = self::uploadThroughGeneratedClient([
                'file' => ['type' => 'inmemory', 'value' => 'in-memory-content'],
            ]);

            [$inMemoryHeaders] = self::findPart(
                $request['body'],
                self::extractBoundary($request['contentType']),
                'file'
            );
            self::assertStringContainsString('filename="file"', $inMemoryHeaders);
        } finally {
            @unlink($realFile);
        }
    }

    /**
     * Spawns a child process which generates the issue-1036 client into an isolated
     * directory, sends one DocumentUpload endpoint request built from $operations and
     * reports back the captured wire request.
     *
     * Operations map form parameter names to descriptors: ['type' => 'string'|'realfile'|'inmemory',
     * 'value' => mixed].
     *
     * @param array<string, mixed> $operations
     *
     * @return array{method: string, path: string, contentType: string, body: string}
     */
    private static function uploadThroughGeneratedClient(array $operations): array
    {
        self::removeDirectory(self::workDir());
        @mkdir(self::workDir(), 0777, true);

        $scriptFile = self::workDir() . '/child.php';
        $configFile = self::workDir() . '/config.json';
        $stdoutFile = self::workDir() . '/stdout.json';
        $stderrFile = self::workDir() . '/stderr.log';

        file_put_contents($scriptFile, self::childScript());
        file_put_contents($configFile, (string) json_encode([
            'autoload' => realpath(__DIR__ . '/../../../..') . '/vendor/autoload.php',
            'specFile' => self::FIXTURE_DIR . '/openapi.yaml',
            'namespacePrefix' => self::NAMESPACE_PREFIX,
            'generatedDir' => self::generatedDir(),
            'operations' => $operations,
        ], \JSON_THROW_ON_ERROR));

        exec(\sprintf(
            '%s %s %s > %s 2> %s',
            escapeshellarg(\PHP_BINARY),
            escapeshellarg($scriptFile),
            escapeshellarg($configFile),
            escapeshellarg($stdoutFile),
            escapeshellarg($stderrFile)
        ), $outputLines, $exitCode);

        self::assertSame(0, $exitCode, \sprintf(
            "Issue-1036 functional child process failed (%d):\n%s",
            $exitCode,
            is_file($stderrFile) ? (string) file_get_contents($stderrFile) : ''
        ));

        $payload = json_decode((string) file_get_contents($stdoutFile), true, 512, \JSON_THROW_ON_ERROR);

        return [
            'method' => $payload['method'],
            'path' => $payload['path'],
            'contentType' => $payload['contentType'],
            'body' => $payload['body'],
        ];
    }

    /**
     * Child entry point executed in a pristine process: generate, build the request via
     * the generated client stack over a capturing HTTP client, echo the captured request.
     */
    private static function childScript(): string
    {
        return <<<'PHP'
<?php

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

try {
    $config = json_decode(file_get_contents($argv[1]), true, 512, JSON_THROW_ON_ERROR);
    require_once $config['autoload'];

    $namespacePrefix = $config['namespacePrefix'];
    $generatedDir = $config['generatedDir'];

    @mkdir($generatedDir, 0777, true);
    file_put_contents(dirname($generatedDir) . '/.jane-openapi', sprintf(
        '<?php return [%s];',
        implode(', ', [
            "'openapi-file' => " . var_export($config['specFile'], true),
            "'namespace' => " . var_export($namespacePrefix, true),
            "'directory' => " . var_export($generatedDir, true),
        ])
    ));

    $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
    $input = new ArrayInput(['--config-file' => dirname($generatedDir) . '/.jane-openapi'], $command->getDefinition());
    $output = new BufferedOutput();
    $exitCode = $command->execute($input, $output);
    if (0 !== $exitCode) {
        throw new RuntimeException(sprintf("Generation failed:\n%s", $output->fetch()));
    }

    spl_autoload_register(static function (string $class) use ($namespacePrefix, $generatedDir): void {
        if (!str_starts_with($class, $namespacePrefix . '\\')) {
            return;
        }
        $file = $generatedDir . '/' . str_replace('\\', '/', substr($class, strlen($namespacePrefix) + 1)) . '.php';
        if (is_file($file)) {
            require_once $file;
        }
    });

    $modelClass = $namespacePrefix . '\Model\DocumentUpload';
    $endpointClass = $namespacePrefix . '\Endpoint\UploadDocument';
    $clientClass = $namespacePrefix . '\Client';

    $capturingClient = new class() implements HttpClientInterface {
        public ?array $lastRequest = null;
        private readonly MockHttpClient $mock;

        public function __construct()
        {
            $this->mock = new MockHttpClient(static fn (): MockResponse => new MockResponse('{}', ['http_code' => 201]));
        }

        public function request(string $method, string $url, array $options = []): ResponseInterface
        {
            $this->lastRequest = [$method, $url, $options];

            return $this->mock->request($method, $url, $options);
        }

        public function stream(ResponseInterface|iterable $responses, ?float $timeout = null): ResponseStreamInterface
        {
            return $this->mock->stream($responses, $timeout);
        }

        public function withOptions(array $options): static
        {
            return $this;
        }
    };

    $client = $clientClass::create($capturingClient);

    $upload = new $modelClass();
    foreach ($config['operations'] as $parameter => $operation) {
        $type = $operation['type'] ?? 'string';
        if ('string' === $type) {
            $upload->{$parameter} = $operation['value'];
        } elseif ('realfile' === $type) {
            $upload->{$parameter} = fopen($operation['value'], 'r');
        } elseif ('inmemory' === $type) {
            $stream = fopen('php://temp', 'rb+');
            fwrite($stream, (string) $operation['value']);
            rewind($stream);
            $upload->{$parameter} = $stream;
        } else {
            throw new RuntimeException(sprintf('Unknown operation type "%s" for "%s".', $type, $parameter));
        }
    }

    $client->executeRawEndpoint(new $endpointClass($upload));

    if (null === $capturingClient->lastRequest) {
        throw new RuntimeException('No request reached the capturing HTTP client.');
    }

    [$method, $url, $options] = $capturingClient->lastRequest;
    $contentTypeHeader = $options['headers']['Content-Type'] ?? '';
    $body = $options['body'] ?? '';
    echo json_encode([
        'method' => $method,
        'path' => (string) (parse_url($url, PHP_URL_PATH) ?: $url),
        'contentType' => is_array($contentTypeHeader) ? (string) ($contentTypeHeader[0] ?? '') : (string) $contentTypeHeader,
        'body' => is_resource($body) ? (string) stream_get_contents($body) : (string) $body,
    ], JSON_THROW_ON_ERROR);
} catch (Throwable $error) {
    fwrite(STDERR, (string) $error);
    exit(2);
}
PHP;
    }

    private static function extractBoundary(string $contentType): string
    {
        self::assertSame(1, preg_match('/boundary="([^"]+)"/', $contentType, $matches), 'No boundary found in the multipart Content-Type header.');

        return $matches[1];
    }

    /**
     * @return array{0: string, 1: string} header block and trimmed content of the part named $name
     */
    private static function findPart(string $multipartBody, string $boundary, string $name): array
    {
        foreach (explode('--' . $boundary, $multipartBody) as $chunk) {
            $segment = explode("\r\n\r\n", ltrim($chunk, "\r\n"), 2);
            if (1 !== preg_match('/Content-Disposition: [^\r\n]*name="' . $name . '"/', $segment[0])) {
                continue;
            }

            return [$segment[0], rtrim($segment[1] ?? '', "\r\n")];
        }

        self::fail(\sprintf('No multipart part found for name "%s".', $name));
    }

    private static function workDir(): string
    {
        return sys_get_temp_dir() . '/janephp-issue-1036-functional-openapi31';
    }

    private static function generatedDir(): string
    {
        return self::workDir() . '/generated';
    }

    private static function removeDirectory(string $dir): void
    {
        if (!is_dir($dir)) {
            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $item) {
            $item->isDir() ? @rmdir($item->getPathname()) : @unlink($item->getPathname());
        }

        @rmdir($dir);
    }
}
