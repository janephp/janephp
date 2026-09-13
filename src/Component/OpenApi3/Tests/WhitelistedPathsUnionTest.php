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

/**
 * `whitelisted-paths` keeps the transitive closure of the models a whitelisted
 * operation needs. Models reached only through a `oneOf` union (or an array of
 * one) used to be pruned while the normalizers kept targeting them.
 *
 * @see https://github.com/janephp/janephp/issues/1066
 */
class WhitelistedPathsUnionTest extends TestCase
{
    public function testUnionMembersOfAWhitelistedResponseAreGenerated(): void
    {
        [$fixtureDirectory, $generatedDirectory] = $this->generateClient();

        try {
            self::assertFileExists($generatedDirectory . '/Model/TweetLookupResponse.php');
            self::assertFileExists($generatedDirectory . '/Model/CompactTweet.php');
            self::assertFileExists($generatedDirectory . '/Model/DetailedTweet.php');
            self::assertFileExists($generatedDirectory . '/Model/Photo.php');
            self::assertFileExists($generatedDirectory . '/Model/Video.php');
            self::assertFileExists($generatedDirectory . '/Normalizer/CompactTweetNormalizer.php');
            // the other operation's models are still pruned
            self::assertFileDoesNotExist($generatedDirectory . '/Model/Rule.php');
            self::assertFileDoesNotExist($generatedDirectory . '/Endpoint/ListRules.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return array{0: string, 1: string} The fixture directory and the generated directory
     */
    private function generateClient(): array
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-whitelisted-union-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $ref = static fn (string $name): array => ['$ref' => '#/components/schemas/' . $name];
        $jsonResponse = static fn (string $name): array => [
            'description' => $name,
            'content' => ['application/json' => ['schema' => $ref($name)]],
        ];

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.3',
            'info' => ['title' => 'Whitelisted union', 'version' => '1.0.0'],
            'paths' => [
                '/tweets' => [
                    'get' => [
                        'operationId' => 'findTweets',
                        'responses' => ['200' => $jsonResponse('TweetLookupResponse')],
                    ],
                ],
                '/rules' => [
                    'get' => [
                        'operationId' => 'listRules',
                        'responses' => ['200' => $jsonResponse('Rule')],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
                    'TweetLookupResponse' => [
                        'type' => 'object',
                        'properties' => [
                            'data' => ['type' => 'array', 'items' => $ref('Tweet')],
                            'media' => $ref('Media'),
                        ],
                    ],
                    'Tweet' => [
                        'oneOf' => [$ref('CompactTweet'), $ref('DetailedTweet')],
                        'discriminator' => ['propertyName' => 'format', 'mapping' => ['compact' => '#/components/schemas/CompactTweet', 'detailed' => '#/components/schemas/DetailedTweet']],
                    ],
                    'CompactTweet' => ['type' => 'object', 'properties' => ['id' => ['type' => 'string'], 'format' => ['type' => 'string']]],
                    'DetailedTweet' => ['type' => 'object', 'properties' => ['id' => ['type' => 'string'], 'text' => ['type' => 'string'], 'format' => ['type' => 'string']]],
                    'Media' => ['oneOf' => [$ref('Photo'), $ref('Video')]],
                    'Photo' => ['type' => 'object', 'properties' => ['url' => ['type' => 'string']]],
                    'Video' => ['type' => 'object', 'properties' => ['url' => ['type' => 'string'], 'duration' => ['type' => 'integer']]],
                    'Rule' => ['type' => 'object', 'properties' => ['value' => ['type' => 'string']]],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php' . "\n\n" . 'return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi3\Tests\WhitelistedUnionExpected',
            'directory' => $generatedDirectory,
            'whitelisted-paths' => ['\/tweets$'],
        ], true) . ';' . "\n");

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
        $output = new BufferedOutput();

        $returnCode = $command->execute($input, $output);
        $rendered = $output->fetch();

        self::assertSame(Command::SUCCESS, $returnCode, $rendered);

        return [$fixtureDirectory, $generatedDirectory];
    }

    private function removeDirectory(string $path): void
    {
        if (!is_dir($path)) {
            return;
        }

        $entries = scandir($path);
        if (false === $entries) {
            return;
        }

        foreach ($entries as $entry) {
            if ('.' === $entry || '..' === $entry) {
                continue;
            }

            $entryPath = $path . '/' . $entry;
            if (is_dir($entryPath)) {
                $this->removeDirectory($entryPath);
                continue;
            }

            unlink($entryPath);
        }

        rmdir($path);
    }
}
