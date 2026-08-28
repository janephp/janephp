<?php

namespace Jane\Component\OpenApi31\Tests;

use Http\Client\Common\Plugin\HeaderSetPlugin;
use Jane\Component\JsonSchema\Tests\CodeStyleFixerTrait;
use Jane\Component\JsonSchema\Tests\FixtureComparisonTrait;
use Jane\Component\OpenApi31\Tests\Client\Authentication\ApiKeyAuthAuthentication;
use Jane\Component\OpenApi31\Tests\Client\Client;
use Jane\Component\OpenApi31\Tests\Client\Endpoint\GetThing;
use Jane\Component\OpenApi31\Tests\Client\Exception\GetEndpointUnauthorizedException;
use Jane\Component\OpenApi31\Tests\Client\Exception\GetThingNotFoundException;
use Jane\Component\OpenApi31\Tests\Client\Model\Error;
use Jane\Component\OpenApi31\Tests\Client\Model\SimpleResponse;
use Jane\Component\OpenApi31\Tests\Client\Model\Thing;
use Jane\Component\OpenApi31\Tests\Client\Model\ThingDetails;
use Jane\Component\OpenApi31\Tests\Client\Model\ThingInput;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneOpenApiResourceTest extends TestCase
{
    use CodeStyleFixerTrait;
    use FixtureComparisonTrait;

    /**
     * @dataProvider resourceProvider
     */
    public function testResources($name, SplFileInfo $testDirectory): void
    {
        if ($this->shouldSkipPathForCurrentPhpParserVersion($testDirectory->getRealPath())) {
            $this->markTestSkipped('Skip path ' . $testDirectory->getRealPath());
        }

        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

        // 2. Fix code style then compare
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');
        $this->fixCodeStyle($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');
        $this->assertFixtureMatchesGenerated($testDirectory->getRealPath());
    }

    public function resourceProvider(): array
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/fixtures');
        $finder->depth('< 1');

        $data = [];

        foreach ($finder as $directory) {
            $data[$directory->getFilename()] = [$directory->getFilename(), $directory];
        }

        return $data;
    }

    /**
     * @group prism
     */
    public function testClient(): void
    {
        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => __DIR__ . '/client' . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

        // 2. Test unauthorized
        $client = Client::create();
        try {
            $client->getEndpoint();
            self::fail('Expected GetEndpointUnauthorizedException to be thrown.');
        } catch (GetEndpointUnauthorizedException $exception) {
            $this->assertEquals(401, $exception->getCode());
            $this->assertInstanceOf(Error::class, $exception->getError());
        }

        // 3. Simple authenticated call
        $client = Client::create(null, [new AuthenticationRegistry([new ApiKeyAuthAuthentication('api_key')])]);
        $response = $client->getEndpoint();
        $this->assertInstanceOf(SimpleResponse::class, $response);

        // 4. Path and query parameters, enum, date format and array denormalization
        $thing = $client->getThing('thing-1', ['q' => 'search', 'page' => 2]);
        $this->assertInstanceOf(Thing::class, $thing);
        $this->assertContains($thing->getKind(), ['created', 'updated', 'deleted']);
        $this->assertInstanceOf(\DateTime::class, $thing->getCreatedAt());
        $this->assertNotEmpty($thing->getTags());

        // 5. JSON request body
        $thingInput = new ThingInput();
        $thingInput->setName('A thing');
        $thingInput->setKind('created');
        $createdThing = $client->createThing($thingInput);
        $this->assertInstanceOf(Thing::class, $createdThing);

        // 6. Form request body
        $formThing = $client->createFormThing($thingInput);
        $this->assertInstanceOf(Thing::class, $formThing);

        // 7. allOf inheritance
        $thingDetails = $client->getThingDetails('thing-1');
        $this->assertInstanceOf(ThingDetails::class, $thingDetails);
        $this->assertNotSame('', $thingDetails->getDescription());

        // 8. 204 no content
        $this->assertNull($client->deleteThing('thing-1'));

        // 9. Raw PSR-7 response
        $rawResponse = $client->executeRawEndpoint(new GetThing('thing-1', ['q' => 'search']));
        $this->assertInstanceOf(ResponseInterface::class, $rawResponse);
        $this->assertSame(200, $rawResponse->getStatusCode());

        // 10. Typed exception on a 404 response selected through the Prefer header
        $preferClient = Client::create(null, [
            new AuthenticationRegistry([new ApiKeyAuthAuthentication('api_key')]),
            new HeaderSetPlugin(['Prefer' => 'code=404']),
        ]);
        try {
            $preferClient->getThing('thing-1', ['q' => 'search']);
            self::fail('Expected GetThingNotFoundException to be thrown.');
        } catch (GetThingNotFoundException $exception) {
            $this->assertEquals(404, $exception->getCode());
            $this->assertInstanceOf(Error::class, $exception->getError());
        }
    }
}
