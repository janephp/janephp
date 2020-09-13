<?php

namespace Jane\OpenApi3\Tests;

use Jane\OpenApi3\Tests\Client\PetStore\Authentication\ApiKeyAuthAuthentication;
use Jane\OpenApi3\Tests\Client\PetStore\Client;
use Jane\OpenApi3\Tests\Client\PetStore\Exception\GetEndpointUnauthorizedException;
use Jane\OpenApi3\Tests\Client\PetStore\Model\Error;
use Jane\OpenApi3\Tests\Client\PetStore\Model\SimpleResponse;
use Jane\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\OpenApiCommon\Console\Loader\SchemaLoader;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class JaneOpenApiResourceTest extends TestCase
{
    /**
     * @dataProvider resourceProvider
     */
    public function testRessources($name, SplFileInfo $testDirectory): void
    {
        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

        // 2. Compare
        $expectedFinder = new Finder();
        $expectedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'expected');

        $generatedFinder = new Finder();
        $generatedFinder->in($testDirectory->getRealPath() . \DIRECTORY_SEPARATOR . 'generated');

        $generatedData = [];

        $this->assertEquals(\count($expectedFinder), \count($generatedFinder), 'Assert same files for ' . $testDirectory->getRealPath());

        foreach ($generatedFinder as $generatedFile) {
            $generatedData[$generatedFile->getRelativePathname()] = $generatedFile->getRealPath();
        }

        foreach ($expectedFinder as $expectedFile) {
            $this->assertArrayHasKey($expectedFile->getRelativePathname(), $generatedData);

            if ($expectedFile->isFile()) {
                $expectedPath = $expectedFile->getRealPath();
                $actualPath = $generatedData[$expectedFile->getRelativePathname()];

                $this->assertEquals(
                    file_get_contents($expectedPath),
                    file_get_contents($actualPath),
                    'Expected ' . $expectedPath . ' got ' . $actualPath . ' in ' . $name
                );
            }
        }
    }

    public function resourceProvider(): array
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/fixtures');
        $finder->depth('< 1');

        $data = [];

        foreach ($finder as $directory) {
            $data[] = [$directory->getFilename(), $directory];
        }

        return $data;
    }

    public function testClients(): void
    {
        // 1. Generate
        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => __DIR__ . '/client' . \DIRECTORY_SEPARATOR . '.jane-openapi'], $command->getDefinition());
        $command->execute($input, new NullOutput());

        // 2. Test unauthorized
        $client = Client::create();
        try {
            $client->getEndpoint();
        } catch (GetEndpointUnauthorizedException $e) {
            $this->assertEquals(401, $e->getCode());
            $this->assertInstanceOf(Error::class, $e->getError());
        }

        // 3. Test
        $client = Client::create(null, [new AuthenticationRegistry([new ApiKeyAuthAuthentication('api_key')])]);
        $response = $client->getEndpoint();
        $this->assertInstanceOf(SimpleResponse::class, $response);
    }
}
