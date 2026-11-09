<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException;
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
 * A response whose schema is a oneOf of object schemas with a discriminator returns the model
 * that the discriminator value names. A value that names no branch still gives the decoded JSON.
 *
 * @see https://github.com/janephp/janephp/issues/1156
 */
class Issue1156RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1156Generated';

    public function testAOneOfResponseWithADiscriminatorReturnsTheModelOfTheBranch(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1156-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'servers' => [['url' => 'https://example.com']],
            'paths' => [
                '/whoami' => ['get' => [
                    'operationId' => 'getWhoami',
                    'responses' => [
                        '200' => ['description' => 'The principal', 'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Principal']]]],
                    ],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'PrincipalShop' => ['type' => 'object', 'required' => ['type', 'shopId'], 'properties' => ['type' => ['type' => 'string'], 'shopId' => ['type' => 'integer']]],
                    'PrincipalUser' => ['type' => 'object', 'required' => ['type', 'userId'], 'properties' => ['type' => ['type' => 'string'], 'userId' => ['type' => 'integer']]],
                    'Principal' => [
                        'oneOf' => [['$ref' => '#/components/schemas/PrincipalShop'], ['$ref' => '#/components/schemas/PrincipalUser']],
                        'discriminator' => ['propertyName' => 'type', 'mapping' => ['SHOP' => '#/components/schemas/PrincipalShop', 'USER' => '#/components/schemas/PrincipalUser']],
                    ],
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

            $clientSource = (string) file_get_contents($generatedDirectory . '/Client.php');
            $this->assertStringContainsString('@return \\' . self::NAMESPACE . '\Model\PrincipalShop|\\' . self::NAMESPACE . '\Model\PrincipalUser', $clientSource);

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
            $endpointClass = self::widenedClassName(self::NAMESPACE . '\Endpoint\GetWhoami');

            $shop = (new $endpointClass())->parseResponse($this->response('{"type":"SHOP","shopId":1}'), $serializer);
            $this->assertInstanceOf(self::widenedClassName(self::NAMESPACE . '\Model\PrincipalShop'), $shop);
            $this->assertSame(1, $shop->shopId);

            $user = (new $endpointClass())->parseResponse($this->response('{"type":"USER","userId":2}'), $serializer);
            $this->assertInstanceOf(self::widenedClassName(self::NAMESPACE . '\Model\PrincipalUser'), $user);
            $this->assertSame(2, $user->userId);

            $unknown = (new $endpointClass())->parseResponse($this->response('{"type":"SERVICE","serviceId":3}'), $serializer);
            $this->assertInstanceOf(\stdClass::class, $unknown);
            $this->assertSame('SERVICE', $unknown->type);

            $this->expectException(MalformedJsonException::class);
            (new $endpointClass())->parseResponse($this->response('{"type":'), $serializer);
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function response(string $body): object
    {
        return (new MockHttpClient(new MockResponse($body, [
            'http_code' => 200,
            'response_headers' => ['content-type' => 'application/json'],
        ])))->request('GET', 'https://example.com/whoami');
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
