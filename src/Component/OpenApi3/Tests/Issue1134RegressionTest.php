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
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * With `validation`, an array of inline objects whose properties reference
 * another object must validate. The validator of the array must not apply the
 * constraint of such a property to the whole item: the item normalizers
 * validate their own properties.
 *
 * @see https://github.com/janephp/janephp/issues/1134
 */
class Issue1134RegressionTest extends TestCase
{
    private const NAMESPACE = 'Jane\Component\OpenApi3\Tests\Issue1134Generated';

    public function testArrayOfInlineObjectsWithObjectPropertiesValidates(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue1134-' . bin2hex(random_bytes(8));
        mkdir($fixtureDirectory . '/generated', 0777, true);

        file_put_contents($fixtureDirectory . '/openapi.json', json_encode([
            'openapi' => '3.0.3',
            'info' => ['title' => 'Test', 'version' => '1.0.0'],
            'paths' => [
                '/orders' => ['post' => [
                    'operationId' => 'postOrder',
                    'requestBody' => [
                        'required' => true,
                        'content' => ['application/json' => ['schema' => ['$ref' => '#/components/schemas/Order']]],
                    ],
                    'responses' => ['204' => ['description' => 'No content']],
                ]],
            ],
            'components' => [
                'schemas' => [
                    'Order' => [
                        'type' => 'object',
                        'properties' => [
                            'lines' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => ['product' => ['$ref' => '#/components/schemas/Product']],
                                ],
                            ],
                        ],
                    ],
                    'Product' => [
                        'type' => 'object',
                        'required' => ['name'],
                        'properties' => ['name' => ['type' => 'string']],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, '<?php return ' . var_export([
            'openapi-file' => $fixtureDirectory . '/openapi.json',
            'namespace' => self::NAMESPACE,
            'directory' => $fixtureDirectory . '/generated',
            'validation' => true,
        ], true) . ';');

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            $output = new BufferedOutput();

            $this->assertSame(Command::SUCCESS, $command->execute($input, $output), $output->fetch());

            $constraintContent = file_get_contents($fixtureDirectory . '/generated/Validator/OrderConstraint.php');
            $this->assertIsString($constraintContent);
            $this->assertStringNotContainsString('ProductConstraint', $constraintContent);

            $this->requireGeneratedClasses($fixtureDirectory . '/generated');

            $normalizerClass = self::widenedClassName(self::NAMESPACE . '\Normalizer\JaneObjectNormalizer');
            $serializer = new Serializer([new ArrayDenormalizer(), new $normalizerClass()], [new JsonEncoder()]);
            $orderClass = self::widenedClassName(self::NAMESPACE . '\Model\Order');

            $order = $serializer->denormalize(['lines' => [['product' => ['name' => 'Book']]]], $orderClass, 'json');
            $this->assertSame('Book', $order->lines[0]->product->name);
            $this->assertSame('{"lines":[{"product":{"name":"Book"}}]}', $serializer->serialize($order, 'json'));

            // The normalizer of the product still validates the product.
            $thrown = null;
            try {
                $serializer->denormalize(['lines' => [['product' => ['title' => 'Book']]]], $orderClass, 'json');
            } catch (\Throwable $throwable) {
                $thrown = $throwable;
            }

            $this->assertInstanceOf(self::widenedClassName(self::NAMESPACE . '\Runtime\Normalizer\ValidationException'), $thrown);
        } finally {
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

    private function requireGeneratedClasses(string $generatedDirectory): void
    {
        $files = [];
        foreach (['Runtime', 'Model', 'Normalizer', 'Validator'] as $directory) {
            $path = $generatedDirectory . '/' . $directory;
            if (!is_dir($path)) {
                continue;
            }

            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            /** @var \SplFileInfo $file */
            foreach ($iterator as $file) {
                if ($file->isFile() && 'php' === $file->getExtension()) {
                    $files[] = $file->getPathname();
                }
            }
        }

        // Generated files depend on each other and are not autoloadable: require them in passes.
        $pending = $files;
        while ([] !== $pending) {
            $deferred = [];
            foreach ($pending as $file) {
                try {
                    require_once $file;
                } catch (\Error $error) {
                    $deferred[] = $file;
                }
            }

            if (\count($deferred) === \count($pending)) {
                require_once $pending[0];
            }

            $pending = $deferred;
        }
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
