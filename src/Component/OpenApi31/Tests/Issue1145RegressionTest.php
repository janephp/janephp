<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * A schema with its own type and an allOf keeps its own type: allOf members
 * without a type only add constraints, and the own type wins over a
 * conflicting member type.
 *
 * @see https://github.com/janephp/janephp/issues/1145
 */
class Issue1145RegressionTest extends TestCase
{
    public function testOwnTypeIsKeptWithAllOf(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue-1145-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Issue 1145', 'version' => '1.0.0'],
            'paths' => new \stdClass(),
            'components' => [
                'schemas' => [
                    'Config' => [
                        'type' => 'object',
                        'required' => ['plainUrl', 'allOfUrl', 'allOfTags', 'conflictingCount'],
                        'properties' => [
                            'plainUrl' => ['type' => 'string', 'pattern' => '^https://.*'],
                            'allOfUrl' => [
                                'type' => 'string',
                                'allOf' => [['pattern' => '^https://.*'], ['pattern' => '^[^?#]*$']],
                            ],
                            'allOfTags' => [
                                'type' => 'array',
                                'items' => ['type' => 'string'],
                                'allOf' => [['minItems' => 1]],
                            ],
                            'conflictingCount' => [
                                'type' => 'integer',
                                'allOf' => [['type' => 'string']],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $openApiFile,
            'namespace' => 'Jane\Component\OpenApi31\Tests\Issue1145Generated',
            'directory' => $generatedDirectory,
        ], true) . ';');

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            self::assertSame(0, $command->execute($input, new NullOutput()));

            $model = file_get_contents($generatedDirectory . '/Model/Config.php');
            self::assertIsString($model);

            self::assertStringContainsString('public string $plainUrl;', $model);
            self::assertStringContainsString('public string $allOfUrl;', $model);
            self::assertStringContainsString('public array $allOfTags;', $model);
            self::assertStringContainsString('@var list<string>', $model);
            self::assertStringContainsString('public int $conflictingCount;', $model);
            self::assertStringNotContainsString('@var mixed', $model);
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
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
