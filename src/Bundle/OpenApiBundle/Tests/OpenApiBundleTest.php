<?php

namespace Jane\Bundle\OpenApiBundle\Tests;

use Jane\Bundle\OpenApiBundle\DependencyInjection\Configuration;
use Jane\Bundle\OpenApiBundle\Tests\Resources\App\AppKernel;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Filesystem\Filesystem;

class OpenApiBundleTest extends KernelTestCase
{
    public static function setUpBeforeClass(): void
    {
        static::$class = null;
        $_SERVER['KERNEL_DIR'] = __DIR__ . '/Resources/App';
        $_SERVER['KERNEL_CLASS'] = AppKernel::class;

        (new Filesystem())->remove(__DIR__ . '/Resources/var/cache/test');
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        (new Filesystem())->remove(sys_get_temp_dir() . '/jane-openapi-bundle-test-' . getmypid());
    }

    public function testGenerateCommandSucceedsUsingDefaultConfigResolution(): void
    {
        $application = new Application(static::bootKernel());

        $tester = new CommandTester($application->find('jane:open-api:generate'));
        $tester->execute([]);

        $this->assertSame(Command::SUCCESS, $tester->getStatusCode());
        $this->assertStringContainsString('Generation done.', $tester->getDisplay());
    }

    public function testGenerateCommandReturnsFailureOnUnsupportedSpecification(): void
    {
        $application = new Application(static::bootKernel());

        $tester = new CommandTester($application->find('jane:open-api:generate'));
        $tester->execute(['--config-file' => __DIR__ . '/Fixtures/openapi-invalid-config.php']);

        $this->assertSame(Command::FAILURE, $tester->getStatusCode());
        $this->assertStringNotContainsString('Generation done.', $tester->getDisplay());
    }

    public function testGenerateCommandFailsOnMissingConfigFile(): void
    {
        $application = new Application(static::bootKernel());
        $application->setAutoExit(false);

        $output = new BufferedOutput();
        $statusCode = $application->run(new ArrayInput([
            'command' => 'jane:open-api:generate',
            '--config-file' => 'does-not-exist.php',
        ]), $output);

        $this->assertNotSame(Command::SUCCESS, $statusCode);
        $this->assertStringContainsString('does not exist', $output->fetch());
    }

    public function testConfigurationAcceptsEmptyConfigAndRejectsUnknownKeys(): void
    {
        $configuration = new Configuration();

        $processed = (new Processor())->process($configuration->getConfigTreeBuilder()->buildTree(), [[]]);
        $this->assertSame([], $processed);

        $processed = (new Processor())->process($configuration->getConfigTreeBuilder()->buildTree(), [null]);
        $this->assertSame([], $processed);

        $this->expectException(InvalidConfigurationException::class);
        (new Processor())->process($configuration->getConfigTreeBuilder()->buildTree(), [['unknown-key' => 'value']]);
    }
}
