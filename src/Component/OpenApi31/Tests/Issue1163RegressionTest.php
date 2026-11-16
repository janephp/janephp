<?php

namespace Jane\Component\OpenApi31\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * An inline schema (here the request body of an operation) carrying a
 * discriminator does not generate a class extending itself: each mapping
 * entry resolves to the reference of the schema it names, so the mapped
 * schemas extend the inline schema's class and denormalization of a
 * discriminator value returns the mapped model.
 *
 * @see https://github.com/janephp/janephp/issues/1163
 */
class Issue1163RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1163Generated';

    public function testAnInlineSchemaWithADiscriminatorGeneratesAPlainParentClass(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1163-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'servers' => [['url' => 'https://example.com']],
            'paths' => [
                '/events' => ['post' => [
                    'operationId' => 'createEvent',
                    'requestBody' => [
                        'required' => true,
                        'content' => ['application/json' => ['schema' => [
                            'type' => 'object',
                            'required' => ['type'],
                            'properties' => ['type' => ['type' => 'string']],
                            'oneOf' => [
                                ['$ref' => '#/components/schemas/CreatedEvent'],
                                ['$ref' => '#/components/schemas/DeletedEvent'],
                            ],
                            'discriminator' => [
                                'propertyName' => 'type',
                                'mapping' => [
                                    'CREATED' => '#/components/schemas/CreatedEvent',
                                    'DELETED' => 'DeletedEvent',
                                ],
                            ],
                        ]]],
                    ],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'CreatedEvent' => ['type' => 'object', 'required' => ['type', 'id'], 'properties' => ['type' => ['type' => 'string'], 'id' => ['type' => 'integer']]],
                    'DeletedEvent' => ['type' => 'object', 'required' => ['type', 'id'], 'properties' => ['type' => ['type' => 'string'], 'id' => ['type' => 'integer']]],
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

            $parentClass = self::widenedClassName(self::NAMESPACE . '\Model\EventsPostBody');
            $createdClass = self::widenedClassName(self::NAMESPACE . '\Model\CreatedEvent');
            $deletedClass = self::widenedClassName(self::NAMESPACE . '\Model\DeletedEvent');

            // Loading the parent model no longer fatals on "extends itself", and
            // the mapped schemas got it as their parent class.
            $this->assertTrue(class_exists($parentClass));
            $this->assertFalse((new \ReflectionClass($parentClass))->isSubclassOf($parentClass));
            $this->assertSame($parentClass, get_parent_class($createdClass));
            $this->assertSame($parentClass, get_parent_class($deletedClass));

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);

            $created = $serializer->denormalize(['type' => 'CREATED', 'id' => 1], $parentClass);
            $this->assertInstanceOf($createdClass, $created);
            $this->assertSame(1, $created->id);

            $deleted = $serializer->denormalize(['type' => 'DELETED', 'id' => 2], $parentClass);
            $this->assertInstanceOf($deletedClass, $deleted);
            $this->assertSame(2, $deleted->id);
        } finally {
            spl_autoload_unregister($autoloader);
            $this->removeDirectory($fixtureDirectory);
        }
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
