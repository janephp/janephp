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
}
