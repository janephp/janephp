<?php

namespace Jane\Component\OpenApi3\Tests;

use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Runtime test asserting that specification server plugins (host + path) are
 * applied around a caller provided PSR-18 client, and can be opted out from.
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

        // @phpstan-ignore-next-line Classes are generated at runtime from the issue-299 specification.
        $client->executeRawEndpoint(new Issue789CustomClient\Endpoint\GetUsers(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame(
            'https://example.com/rest/v1/users?userState=x',
            (string) $capturingClient->lastRequest->getUri()
        );
    }

    public function testCustomHttpClientCanOptOutFromServerPlugins(): void
    {
        $capturingClient = $this->createCapturingClient();
        $client = self::createClient($capturingClient, [], [], false);

        // @phpstan-ignore-next-line Classes are generated at runtime from the issue-299 specification.
        $client->executeRawEndpoint(new Issue789CustomClient\Endpoint\GetUsers(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame('/users?userState=x', (string) $capturingClient->lastRequest->getUri());
    }

    public function testCallerOwnedPathPrefixIsNotDuplicated(): void
    {
        $capturingClient = $this->createCapturingClient();
        $preWrappedClient = new PluginClient($capturingClient, [
            new AddPathPlugin(Psr17FactoryDiscovery::findUriFactory()->createUri('https://caller.example.com/rest/v1')),
        ]);

        $client = self::createClient($preWrappedClient);

        // @phpstan-ignore-next-line Classes are generated at runtime from the issue-299 specification.
        $client->executeRawEndpoint(new Issue789CustomClient\Endpoint\GetUsers(['userState' => 'x']));

        self::assertNotNull($capturingClient->lastRequest);
        self::assertSame(
            'https://example.com/rest/v1/users?userState=x',
            (string) $capturingClient->lastRequest->getUri()
        );
    }

    // @phpstan-ignore-next-line Classes are generated at runtime from the issue-299 specification.
    private static function createClient(?ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true): Issue789CustomClient\Client
    {
        // @phpstan-ignore-next-line Classes are generated at runtime from the issue-299 specification.
        return Issue789CustomClient\Client::create($httpClient, $additionalPlugins, $additionalNormalizers, $applyServerPlugins);
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

final class CapturingHttpClient implements ClientInterface
{
    public ?RequestInterface $lastRequest = null;

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $this->lastRequest = $request;

        return Psr17FactoryDiscovery::findResponseFactory()->createResponse(200);
    }
}
