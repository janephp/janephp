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
 * A child of a discriminated parent can narrow a property of the parent with a const, such as the
 * discriminator value. PHP does not let the child change the type of the property, so the child
 * keeps the type of the parent, and reading the document does not throw a TypeError.
 *
 * @see https://github.com/janephp/janephp/issues/1157
 */
class Issue1157RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi31\Tests\Issue1157Generated';

    public function testAConstOnAPropertyOfTheParentKeepsTheTypeOfTheParent(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi31-issue1157-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.1.0',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [],
            'components' => [
                'schemas' => [
                    'Command' => [
                        'type' => 'object',
                        'discriminator' => [
                            'propertyName' => 'type',
                            'mapping' => ['ORDER_SHIPMENTS' => '#/components/schemas/OrderShipmentsCommand'],
                        ],
                        'properties' => [
                            'commandId' => ['type' => 'string'],
                            'type' => ['type' => 'string'],
                        ],
                        'required' => ['commandId', 'type'],
                    ],
                    'OrderShipmentsCommand' => [
                        'allOf' => [
                            ['$ref' => '#/components/schemas/Command'],
                            [
                                'type' => 'object',
                                'properties' => [
                                    'type' => ['type' => 'string', 'const' => 'ORDER_SHIPMENTS'],
                                    'orderId' => ['type' => 'string'],
                                ],
                                'required' => ['orderId'],
                            ],
                        ],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $fixtureDirectory . '/generated',
            'enums-as-objects' => true,
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

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
            $childClass = self::widenedClassName(self::NAMESPACE . '\Model\OrderShipmentsCommand');
            $document = '{"commandId":"c-1","type":"ORDER_SHIPMENTS","orderId":"o-1"}';

            $child = $serializer->deserialize($document, $childClass, 'json');

            $this->assertInstanceOf($childClass, $child);
            $this->assertSame('ORDER_SHIPMENTS', $child->type);
            $this->assertSame('o-1', $child->orderId);
            $this->assertJsonStringEqualsJsonString($document, $serializer->serialize($child, 'json'));

            $parentClass = self::widenedClassName(self::NAMESPACE . '\Model\Command');
            $this->assertInstanceOf($childClass, $serializer->deserialize($document, $parentClass, 'json'));
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
