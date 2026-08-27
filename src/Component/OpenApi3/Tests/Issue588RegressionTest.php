<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue588RegressionTest extends TestCase
{
    public function testLocalRefToSiblingDirectoryIsRejectedByDefaultWithActionableMessage(): void
    {
        $fixtureDirectory = $this->createFixtureTree();
        $generatedDirectory = $fixtureDirectory . '/generated';

        try {
            $configFile = $this->writeConfigFile($fixtureDirectory, $generatedDirectory, []);

            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());

            try {
                $command->execute($input, new NullOutput());
                self::fail('Generation should have been rejected: the response schema resolves outside the specification directory.');
            } catch (\RuntimeException $e) {
                self::assertStringContainsString('outside the allowed directories', $e->getMessage());
                // The message must name the offending path...
                self::assertStringContainsString('institution.yaml', $e->getMessage());
                // ...and tell the user which configuration key unlocks this layout.
                self::assertStringContainsString('allowed-local-ref-roots', $e->getMessage());
            }

            self::assertFileDoesNotExist($generatedDirectory . '/Endpoint/GetInstitutions.php');
            self::assertFileDoesNotExist($generatedDirectory . '/Model/InstitutionsGetResponse200.php');
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    public function testLocalRefToSiblingDirectoryIsAllowedThroughConfiguredRoot(): void
    {
        $fixtureDirectory = $this->createFixtureTree();
        $generatedDirectory = $fixtureDirectory . '/generated';

        try {
            $configFile = $this->writeConfigFile($fixtureDirectory, $generatedDirectory, [
                'allowed-local-ref-roots' => [$fixtureDirectory],
            ]);

            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());

            $exitCode = $command->execute($input, new NullOutput());

            self::assertSame(0, $exitCode);
            // Note: cross-document references are named after their response position
            // (long-standing Jane behavior), not after the remote pointer target.
            self::assertFileExists($generatedDirectory . '/Model/InstitutionsGetResponse200.php');
            self::assertFileExists($generatedDirectory . '/Normalizer/InstitutionsGetResponse200Normalizer.php');
            self::assertFileExists($generatedDirectory . '/Endpoint/GetInstitutions.php');

            $this->requireGeneratedClasses($generatedDirectory);

            $modelClass = 'Jane\Component\OpenApi3\Tests\Issue588Expected\Model\InstitutionsGetResponse200';
            /** @var class-string */
            $normalizerClass = self::widenedClassName('Jane\Component\OpenApi3\Tests\Issue588Expected\Normalizer\InstitutionsGetResponse200Normalizer');

            // The generated model must carry the properties of the externally referenced schema,
            // proving the reference actually resolved into doc/schema/.
            $normalizerContent = file_get_contents($generatedDirectory . '/Normalizer/InstitutionsGetResponse200Normalizer.php');
            self::assertIsString($normalizerContent);
            self::assertStringContainsString("'id'", $normalizerContent);
            self::assertStringContainsString("'name'", $normalizerContent);

            $normalizer = new $normalizerClass();
            // $object is the generated model; typed dynamically at runtime.
            $object = $normalizer->denormalize([
                'id' => 'inst-1',
                'name' => 'ACME',
            ], $modelClass, 'json');

            self::assertSame('inst-1', $object->getId());
            self::assertSame('ACME', $object->getName());
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    private function createFixtureTree(): string
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-588-' . bin2hex(random_bytes(8));

        // Split-spec layout from GH#588: the specification lives in doc/api/, while the
        // schemas it references live in doc/schema/.
        $openApiFile = $fixtureDirectory . '/doc/api/openapi.yaml';
        mkdir(\dirname($openApiFile), 0777, true);
        mkdir($fixtureDirectory . '/doc/schema', 0777, true);

        file_put_contents($openApiFile, <<<'YAML'
openapi: 3.0.2
info:
  title: Issue 588
  version: 1.0.0
paths:
  /institutions:
    get:
      operationId: getInstitutions
      responses:
        '200':
          description: An institution
          content:
            application/json:
              schema:
                $ref: '../schema/institution.yaml#/Institution'

YAML);
        file_put_contents($fixtureDirectory . '/doc/schema/institution.yaml', <<<'YAML'
Institution:
  type: object
  properties:
    id:
      type: string
    name:
      type: string

YAML);

        mkdir($fixtureDirectory . '/generated', 0777, true);

        return $fixtureDirectory;
    }

    /**
     * @param array<string, mixed> $extraOptions
     */
    private function writeConfigFile(string $fixtureDirectory, string $generatedDirectory, array $extraOptions): string
    {
        $options = array_merge([
            'openapi-file' => $fixtureDirectory . '/doc/api/openapi.yaml',
            'namespace' => 'Jane\\Component\\OpenApi3\\Tests\\Issue588Expected',
            'directory' => $generatedDirectory,
        ], $extraOptions);

        $exportedOptions = '';
        foreach ($options as $key => $value) {
            $exportedOptions .= \sprintf("    '%s' => %s,\n", $key, var_export($value, true));
        }

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, "<?php\n\nreturn [\n" . $exportedOptions . "];\n");

        return $configFile;
    }

    /**
     * Widens literal class references so analysis cannot bind to classes
     * generated at runtime.
     */
    private static function widenedClassName(string $class): string
    {
        return $class;
    }

    private function requireGeneratedClasses(string $generatedDirectory): void
    {
        $directories = ['Runtime', 'Model', 'Normalizer', 'Validator'];
        $files = [];
        foreach ($directories as $directory) {
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

        /*
         * Generated files have cross-dependencies (interfaces, parent classes, traits) and are not
         * autoloadable, so the require order matters. Require them in multiple passes, deferring
         * the ones whose dependencies are not loaded yet.
         */
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
                // No progress: a real broken dependency, rethrow the actual error.
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
