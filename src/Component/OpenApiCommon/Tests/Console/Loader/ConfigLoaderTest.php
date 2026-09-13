<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Console\Loader;

use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use PHPUnit\Framework\TestCase;

final class ConfigLoaderTest extends TestCase
{
    public function testLoadFallbacksToPhpConfigFile(): void
    {
        $configDir = sys_get_temp_dir() . '/jane-openapi-config-loader-' . uniqid('', true);
        self::assertTrue(mkdir($configDir, recursive: true));

        $configPath = $configDir . '/.jane-openapi';
        file_put_contents($configPath . '.php', <<<'PHP'
<?php

return [
    'openapi-file' => 'https://example.com/openapi.json',
    'namespace' => 'Jane\\Generated',
    'directory' => '/tmp/generated',
];
PHP
        );

        $loader = new ConfigLoader();
        $configuration = $loader->load($configPath);

        self::assertSame('https://example.com/openapi.json', $configuration['openapi-file']);

        unlink($configPath . '.php');
        rmdir($configDir);
    }

    public function testUndeclaredStatusesThrowByDefault(): void
    {
        self::assertTrue($this->loadConfiguration([])['throw-unexpected-status-code']);
        self::assertFalse($this->loadConfiguration(['throw-unexpected-status-code' => false])['throw-unexpected-status-code']);
    }

    /**
     * @param array<string, mixed> $extra
     *
     * @return array<string, mixed>
     */
    private function loadConfiguration(array $extra): array
    {
        $configDir = sys_get_temp_dir() . '/jane-openapi-config-loader-' . uniqid('', true);
        self::assertTrue(mkdir($configDir, recursive: true));

        $configPath = $configDir . '/.jane-openapi';
        file_put_contents($configPath, '<?php return ' . var_export($extra + [
            'openapi-file' => 'https://example.com/openapi.json',
            'namespace' => 'Jane\\Generated',
            'directory' => '/tmp/generated',
        ], true) . ';');

        try {
            return (new ConfigLoader())->load($configPath);
        } finally {
            unlink($configPath);
            rmdir($configDir);
        }
    }
}
