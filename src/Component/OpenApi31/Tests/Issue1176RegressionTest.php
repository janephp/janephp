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
 * An array response whose items schema is a oneOf of object schemas with a discriminator returns,
 * for each item, the model that the discriminator value names. An item whose value names no branch
 * stays the decoded JSON.
 *
 * Issue 1156 added the same dispatch for a response that is one object.
 *
 * @see https://github.com/janephp/janephp/issues/1176
 */
class Issue1176RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1176Generated';

    private static string $fixtureDirectory;

    /** @var callable(string): void */
    private static $autoloader;

    public static function setUpBeforeClass(): void
    {
        self::$fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-discriminated-list-' . bin2hex(random_bytes(8));
        $generatedDirectory = self::$fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $shipmentResult = [
            'oneOf' => [
                ['$ref' => '#/components/schemas/Accepted'],
                ['$ref' => '#/components/schemas/ProblemDetailsClient'],
                ['$ref' => '#/components/schemas/ProblemDetailsInternalServerError'],
            ],
            'discriminator' => ['propertyName' => 'status', 'mapping' => [
                '202' => '#/components/schemas/Accepted',
                '400' => '#/components/schemas/ProblemDetailsClient',
                '500' => '#/components/schemas/ProblemDetailsInternalServerError',
            ]],
        ];
        $response = static fn (array $schema): array => [
            'description' => 'A list',
            'content' => ['application/json' => ['schema' => $schema]],
        ];

        file_put_contents(self::$fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'servers' => [['url' => 'https://example.com']],
            'paths' => [
                // The oneOf is written in the items of the response. The discriminator value is an integer.
                '/shipments' => ['post' => [
                    'operationId' => 'postShipments',
                    'responses' => ['202' => $response(['type' => 'array', 'items' => $shipmentResult])],
                ]],
                // The items are a reference to the oneOf. The discriminator value is a string.
                '/pets' => ['get' => [
                    'operationId' => 'getPets',
                    'responses' => ['200' => $response(['type' => 'array', 'items' => ['$ref' => '#/components/schemas/Pet']])],
                ]],
                // The whole array schema is a reference.
                '/pet-list' => ['get' => [
                    'operationId' => 'getPetList',
                    'responses' => ['200' => $response(['$ref' => '#/components/schemas/PetList'])],
                ]],
                // Control: the items have no discriminator.
                '/pets-without-discriminator' => ['get' => [
                    'operationId' => 'getPetsWithoutDiscriminator',
                    'responses' => ['200' => $response(['type' => 'array', 'items' => [
                        'oneOf' => [['$ref' => '#/components/schemas/Cat'], ['$ref' => '#/components/schemas/Dog']],
                    ]])],
                ]],
                // Control: the items are one model.
                '/cats' => ['get' => [
                    'operationId' => 'getCats',
                    'responses' => ['200' => $response(['type' => 'array', 'items' => ['$ref' => '#/components/schemas/Cat']])],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'Accepted' => ['type' => 'object', 'required' => ['status', 'id'], 'properties' => ['status' => ['type' => 'integer'], 'id' => ['type' => 'string']]],
                    'ProblemDetailsClient' => ['type' => 'object', 'required' => ['status', 'title'], 'properties' => ['status' => ['type' => 'integer'], 'title' => ['type' => 'string']]],
                    'ProblemDetailsInternalServerError' => ['type' => 'object', 'required' => ['status', 'detail'], 'properties' => ['status' => ['type' => 'integer'], 'detail' => ['type' => 'string']]],
                    'Cat' => ['type' => 'object', 'required' => ['type', 'lives'], 'properties' => ['type' => ['type' => 'string'], 'lives' => ['type' => 'integer'], 'weight' => ['type' => 'number']]],
                    'Dog' => ['type' => 'object', 'required' => ['type', 'breed'], 'properties' => ['type' => ['type' => 'string'], 'breed' => ['type' => 'string']]],
                    'Pet' => [
                        'oneOf' => [['$ref' => '#/components/schemas/Cat'], ['$ref' => '#/components/schemas/Dog']],
                        'discriminator' => ['propertyName' => 'type', 'mapping' => ['CAT' => '#/components/schemas/Cat', 'DOG' => '#/components/schemas/Dog']],
                    ],
                    'PetList' => ['type' => 'array', 'items' => ['$ref' => '#/components/schemas/Pet']],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = self::$fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => self::$fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $generatedDirectory,
        ], true) . ';');

        self::$autoloader = static function (string $class) use ($generatedDirectory): void {
            if (!str_starts_with($class, self::NAMESPACE . '\\')) {
                return;
            }

            $file = $generatedDirectory . '/' . str_replace('\\', '/', substr($class, \strlen(self::NAMESPACE) + 1)) . '.php';
            if (is_file($file)) {
                require_once $file;
            }
        };
        spl_autoload_register(self::$autoloader);

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        self::assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());
    }

    public static function tearDownAfterClass(): void
    {
        spl_autoload_unregister(self::$autoloader);
        self::removeDirectory(self::$fixtureDirectory);
    }

    public function testTheClientDocumentsTheModelsOfTheItems(): void
    {
        $clientSource = (string) file_get_contents(self::$fixtureDirectory . '/generated/Client.php');
        $model = '\\' . self::NAMESPACE . '\Model\\';

        $this->assertStringContainsString('@return (' . $model . 'Accepted|' . $model . 'ProblemDetailsClient|' . $model . 'ProblemDetailsInternalServerError)[]', $clientSource);
        $this->assertSame(2, substr_count($clientSource, '@return (' . $model . 'Cat|' . $model . 'Dog)[]'));
    }

    public function testEachItemBecomesTheModelOfItsIntegerDiscriminatorValue(): void
    {
        $items = $this->parse('PostShipments', '[{"status":202,"id":"a1"},{"status":400,"title":"Bad request"},{"status":500,"detail":"Failure"}]', 202);

        $this->assertIsArray($items);
        $this->assertCount(3, $items);
        $this->assertInstanceOf(self::model('Accepted'), $items[0]);
        $this->assertSame(202, $items[0]->status);
        $this->assertSame('a1', $items[0]->id);
        $this->assertInstanceOf(self::model('ProblemDetailsClient'), $items[1]);
        $this->assertSame('Bad request', $items[1]->title);
        $this->assertInstanceOf(self::model('ProblemDetailsInternalServerError'), $items[2]);
        $this->assertSame('Failure', $items[2]->detail);
    }

    public function testEachItemBecomesTheModelOfItsStringDiscriminatorValue(): void
    {
        foreach (['GetPets', 'GetPetList'] as $endpoint) {
            $items = $this->parse($endpoint, '[{"type":"DOG","breed":"Beagle"},{"type":"CAT","lives":9,"weight":4.0}]');

            $this->assertIsArray($items);
            $this->assertCount(2, $items);
            $this->assertInstanceOf(self::model('Dog'), $items[0], $endpoint);
            $this->assertSame('Beagle', $items[0]->breed);
            $this->assertInstanceOf(self::model('Cat'), $items[1], $endpoint);
            $this->assertSame(9, $items[1]->lives);
            $this->assertSame(4.0, $items[1]->weight);
        }
    }

    public function testAnItemWhoseValueNamesNoBranchStaysTheDecodedJson(): void
    {
        $items = $this->parse('GetPets', '[{"type":"BIRD","wings":2},{"type":"CAT","lives":9},{"lives":3},"text",null]');

        $this->assertIsArray($items);
        $this->assertCount(5, $items);
        $this->assertInstanceOf(\stdClass::class, $items[0]);
        $this->assertSame('BIRD', $items[0]->type);
        $this->assertSame(2, $items[0]->wings);
        $this->assertInstanceOf(self::model('Cat'), $items[1]);
        $this->assertInstanceOf(\stdClass::class, $items[2]);
        $this->assertSame('text', $items[3]);
        $this->assertNull($items[4]);
    }

    public function testAnEmptyListStaysAnEmptyList(): void
    {
        $this->assertSame([], $this->parse('GetPets', '[]'));
    }

    public function testABodyThatIsNoListStaysTheDecodedJson(): void
    {
        $body = $this->parse('GetPets', '{"type":"CAT","lives":9}');

        $this->assertInstanceOf(\stdClass::class, $body);
        $this->assertSame('CAT', $body->type);
    }

    public function testAMalformedBodyThrows(): void
    {
        $this->expectException(MalformedJsonException::class);

        $this->parse('GetPets', '[{"type":');
    }

    public function testAListWithoutDiscriminatorStaysTheDecodedJson(): void
    {
        $endpointSource = (string) file_get_contents(self::$fixtureDirectory . '/generated/Endpoint/GetPetsWithoutDiscriminator.php');
        $this->assertStringContainsString('@return array', $endpointSource);
        $this->assertStringNotContainsString('switch', $endpointSource);

        $items = $this->parse('GetPetsWithoutDiscriminator', '[{"type":"CAT","lives":9}]');

        $this->assertIsArray($items);
        $this->assertInstanceOf(\stdClass::class, $items[0]);
    }

    public function testAListOfOneModelIsUnchanged(): void
    {
        $endpointSource = (string) file_get_contents(self::$fixtureDirectory . '/generated/Endpoint/GetCats.php');
        $this->assertStringContainsString('@return \\' . self::NAMESPACE . '\Model\Cat[]', $endpointSource);
        $this->assertStringContainsString('deserializeListResponse', $endpointSource);

        $items = $this->parse('GetCats', '[{"type":"CAT","lives":9}]');

        $this->assertIsArray($items);
        $this->assertInstanceOf(self::model('Cat'), $items[0]);
    }

    private function parse(string $endpoint, string $body, int $status = 200): mixed
    {
        $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
        $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
        $endpointClass = self::widenedClassName(self::NAMESPACE . '\Endpoint\\' . $endpoint);

        $response = (new MockHttpClient(new MockResponse($body, [
            'http_code' => $status,
            'response_headers' => ['content-type' => 'application/json'],
        ])))->request('GET', 'https://example.com/');

        return (new $endpointClass())->parseResponse($response, $serializer);
    }

    private static function model(string $name): string
    {
        return self::widenedClassName(self::NAMESPACE . '\Model\\' . $name);
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * excluded from PHPStan's scan (generated code).
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private static function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        foreach (scandir($path) ?: [] as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            is_dir($entryPath) ? self::removeDirectory($entryPath) : unlink($entryPath);
        }

        rmdir($path);
    }
}
