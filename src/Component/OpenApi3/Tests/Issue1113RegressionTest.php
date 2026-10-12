<?php

namespace Jane\Component\OpenApi3\Tests;

use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

class Issue1113RegressionTest extends TestCase
{
    public function testEnumCaseNamesComeFromXEnumVarnames(): void
    {
        $fixtureDirectory = sys_get_temp_dir() . '/jane-openapi3-issue-1113-' . bin2hex(random_bytes(8));
        $generatedDirectory = $fixtureDirectory . '/generated';
        mkdir($generatedDirectory, 0777, true);

        $openApiFile = $fixtureDirectory . '/openapi.json';
        file_put_contents($openApiFile, json_encode([
            'openapi' => '3.0.2',
            'info' => [
                'title' => 'Issue 1113',
                'version' => '1.0.0',
            ],
            'paths' => new \stdClass(),
            'components' => [
                'schemas' => [
                    'Priority' => [
                        'type' => 'integer',
                        'enum' => [1, 2],
                        'x-enum-varnames' => ['Low', 'High'],
                    ],
                    'Size' => [
                        'type' => 'string',
                        'enum' => ['regular', 'x_small'],
                        'x-enum-varnames' => ['Regular', 'ExtraSmall'],
                    ],
                    'Region' => [
                        'type' => 'string',
                        'enum' => ['north-east', 'south'],
                        'x-enum-varnames' => ['First'],
                    ],
                ],
            ],
        ], \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));

        $configFile = $fixtureDirectory . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'Jane\\\\Component\\\\OpenApi3\\\\Tests\\\\Issue1113Expected',\n    'directory' => %s,\n    'enums-as-objects' => true,\n];\n",
            var_export($openApiFile, true),
            var_export($generatedDirectory, true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());
            self::assertSame(0, $command->execute($input, new NullOutput()));

            self::assertSame(['Low' => 1, 'High' => 2], $this->caseValues($generatedDirectory, 'Priority'));
            self::assertSame(['Regular' => 'regular', 'ExtraSmall' => 'x_small'], $this->caseValues($generatedDirectory, 'Size'));
            // One name for two values: it names the first value, the second keeps its name derived from the value.
            self::assertSame(['First' => 'north-east', 'South' => 'south'], $this->caseValues($generatedDirectory, 'Region'));
        } finally {
            $this->removeDirectory($fixtureDirectory);
        }
    }

    /**
     * @return array<string, int|string>
     */
    private function caseValues(string $generatedDirectory, string $enum): array
    {
        require_once $generatedDirectory . '/Model/' . $enum . '.php';

        /** @var class-string<\BackedEnum> $class */
        $class = 'Jane\Component\OpenApi3\Tests\Issue1113Expected\Model\\' . $enum;

        $values = [];
        foreach ($class::cases() as $case) {
            $values[$case->name] = $case->value;
        }

        return $values;
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
