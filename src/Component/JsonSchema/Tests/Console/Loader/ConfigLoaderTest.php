<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Tests\Console\Loader;

use Jane\Component\JsonSchema\Console\Loader\ConfigLoader;
use PHPUnit\Framework\TestCase;

final class ConfigLoaderTest extends TestCase
{
    public function testLoadFallbacksToPhpConfigFile(): void
    {
        $configDir = sys_get_temp_dir() . '/jane-config-loader-' . uniqid('', true);
        self::assertTrue(mkdir($configDir, recursive: true));

        $configPath = $configDir . '/.jane';
        file_put_contents($configPath . '.php', <<<'PHP'
<?php

return [
    'json-schema-file' => 'https://example.com/schema.json',
    'root-class' => 'RootClass',
    'namespace' => 'Jane\\Generated',
    'directory' => '/tmp/generated',
];
PHP
        );

        $loader = new ConfigLoader();
        $configuration = $loader->load($configPath);

        self::assertSame('https://example.com/schema.json', $configuration['json-schema-file']);

        unlink($configPath . '.php');
        rmdir($configDir);
    }
}
