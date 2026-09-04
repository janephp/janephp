<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\ResponseStreamInterface;

/**
 * Runtime test asserting that the specification server URL decorator is
 * applied around a caller provided HttpClientInterface, and can be opted out
 * from.
 *
 * A dedicated client is generated from the issue-299 specification into an
 * isolated namespace, as generated clients usually share their namespace
 * across fixtures which would cause class redeclaration conflicts.
 *
 * @see https://github.com/janephp/janephp/issues/789
 */
class CustomClientServerPathRuntimeTest extends TestCase
{
    private const FIXTURE_DIR = __DIR__ . '/fixtures/issue-299';
    private const NAMESPACE_PREFIX = 'Jane\Component\OpenApi3\Tests\Issue789CustomClient';
    private static bool $classesLoaded = false;

    public static function setUpBeforeClass(): void
    {
        self::loadGeneratedClasses();
    }

    public function testCustomHttpClientReceivesSpecServerUrl(): void
    {
        $capturingClient = $this->createCapturingClient();
        $client = self::createClient($capturingClient);

        $client->executeRawEndpoint(self::createGetUsersEndpoint(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame(
            'https://example.com/rest/v1/users?userState=x',
            $capturingClient->lastRequest[1]
        );
    }

    public function testCustomHttpClientCanOptOutFromServerPlugins(): void
    {
        $capturingClient = $this->createCapturingClient();
        $client = self::createClient($capturingClient, [], [], false);

        $client->executeRawEndpoint(self::createGetUsersEndpoint(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame('/users?userState=x', $capturingClient->lastRequest[1]);
    }

    public function testCallerDecoratorsSeeTheSpecRewrittenUrl(): void
    {
        $capturingClient = $this->createCapturingClient();
        // additionalPlugins are decorator factories applied after the server
        // URL decorator: they observe the already rewritten URL
        $client = self::createClient($capturingClient, [
            static fn (HttpClientInterface $httpClient): HttpClientInterface => $httpClient->withOptions([]),
        ]);

        $client->executeRawEndpoint(self::createGetUsersEndpoint(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame(
            'https://example.com/rest/v1/users?userState=x',
            $capturingClient->lastRequest[1]
        );
    }

    private static function createClient(?HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true): object
    {
        $clientClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue789CustomClient\Client');

        return $clientClass::create($httpClient, $additionalPlugins, $additionalNormalizers, $applyServerPlugins);
    }

    private static function createGetUsersEndpoint(array $parameters): object
    {
        $endpointClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue789CustomClient\Endpoint\GetUsers');

        return new $endpointClass($parameters);
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * generated at runtime.
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private static function loadGeneratedClasses(): void
    {
        if (self::$classesLoaded) {
            return;
        }

        self::generateClient();

        $dir = self::generatedDir();

        require_once $dir . '/Runtime/Client/Endpoint.php';
        require_once $dir . '/Runtime/Client/EndpointTrait.php';
        require_once $dir . '/Runtime/Client/BaseEndpoint.php';
        require_once $dir . '/Runtime/Client/FormEncoder.php';
        require_once $dir . '/Runtime/Normalizer/CheckArray.php';
        require_once $dir . '/Runtime/Normalizer/ValidatorTrait.php';
        require_once $dir . '/Runtime/Normalizer/ReferenceNormalizer.php';
        require_once $dir . '/Normalizer/JaneObjectNormalizer.php';
        require_once $dir . '/Runtime/Client/Client.php';
        require_once $dir . '/Endpoint/GetUsers.php';
        require_once $dir . '/Client.php';

        self::$classesLoaded = true;
    }

    private static function generateClient(): void
    {
        $dir = self::generatedDir();
        $specFile = $dir . '/swagger-copy.yaml';

        self::removeDirectory($dir);
        @mkdir($dir, 0777, true);
        copy(self::FIXTURE_DIR . '/swagger.yaml', $specFile);
        file_put_contents($dir . '/.jane-openapi', \sprintf(
            '<?php return [%s];',
            implode(', ', [
                "'openapi-file' => " . var_export($specFile, true),
                "'namespace' => " . var_export(self::NAMESPACE_PREFIX, true),
                "'directory' => " . var_export($dir, true),
            ])
        ));

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $dir . '/.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());
    }

    private static function generatedDir(): string
    {
        return sys_get_temp_dir() . '/janephp-issue-789-runtime-test';
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

    private function createCapturingClient(): CapturingHttpClient
    {
        return new CapturingHttpClient();
    }
}

final class CapturingHttpClient implements HttpClientInterface
{
    /** @var array{0: string, 1: string, 2: array<string, mixed>}|null */
    public ?array $lastRequest = null;
    private readonly MockHttpClient $mock;

    public function __construct()
    {
        $this->mock = new MockHttpClient(static fn (): MockResponse => new MockResponse('', ['http_code' => 200]));
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
}
