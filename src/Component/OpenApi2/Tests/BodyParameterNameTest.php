<?php

namespace Jane\Component\OpenApi2\Tests;

use Jane\Component\JsonSchema\Tests\PhpSyntaxGate;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PhpParser\Node;
use PhpParser\NodeFinder;
use PhpParser\ParserFactory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Filesystem\Filesystem;

/**
 * The name of a body parameter becomes a PHP variable: it is normalized like
 * the name of every other parameter.
 */
class BodyParameterNameTest extends TestCase
{
    private const VARIABLE_NAME = '/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/';

    private string $tmpDir;

    protected function setUp(): void
    {
        $this->tmpDir = sys_get_temp_dir() . '/jane-openapi2-body-parameter-name-' . bin2hex(random_bytes(8));
        (new Filesystem())->mkdir($this->tmpDir . '/generated');
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove($this->tmpDir);
    }

    public function testBodyParameterNameIsSanitized(): void
    {
        $directory = $this->generate('a){}}echo(1);?>');

        self::assertSame([], PhpSyntaxGate::errors($directory));

        foreach (['Client.php', 'Endpoint/UpdatePet.php'] as $file) {
            $names = $this->variableNames($directory . '/' . $file);

            self::assertNotSame([], $names);

            foreach ($names as $name) {
                self::assertMatchesRegularExpression(self::VARIABLE_NAME, $name, \sprintf('Invalid variable name in %s.', $file));
            }
        }

        self::assertSame('aEcho1', $this->bodyParameterName($directory));
    }

    #[DataProvider('regularNameProvider')]
    public function testRegularBodyParameterNamesAreUnchanged(string $name, string $expected): void
    {
        $directory = $this->generate($name);

        self::assertSame([], PhpSyntaxGate::errors($directory));
        self::assertSame($expected, $this->bodyParameterName($directory));
    }

    /**
     * @return iterable<string, array{0: string, 1: string}>
     */
    public static function regularNameProvider(): iterable
    {
        yield 'plain' => ['body', 'body'];
        yield 'dash' => ['user-data', 'userData'];
        yield 'underscore' => ['user_data', 'userData'];
    }

    private function generate(string $bodyParameterName): string
    {
        $directory = $this->tmpDir . '/generated';
        $openApiFile = $this->tmpDir . '/swagger.json';

        file_put_contents($openApiFile, json_encode([
            'swagger' => '2.0',
            'info' => ['title' => 'Body parameter name', 'version' => '1.0.0'],
            'paths' => [
                '/pets' => [
                    'post' => [
                        'operationId' => 'updatePet',
                        'consumes' => ['application/json'],
                        'parameters' => [
                            [
                                'name' => $bodyParameterName,
                                'in' => 'body',
                                'required' => true,
                                'schema' => ['$ref' => '#/definitions/Pet'],
                            ],
                        ],
                        'responses' => [
                            '204' => ['description' => 'Updated'],
                        ],
                    ],
                ],
            ],
            'definitions' => [
                'Pet' => [
                    'type' => 'object',
                    'properties' => ['name' => ['type' => 'string']],
                ],
            ],
        ], \JSON_THROW_ON_ERROR | \JSON_UNESCAPED_SLASHES));

        $configFile = $this->tmpDir . '/.jane-openapi';
        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => 'JaneTest\\\\OpenApi2BodyParameterName',\n    'directory' => %s,\n];\n",
            var_export($openApiFile, true),
            var_export($directory, true)
        ));

        $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
        $input = new ArrayInput(['--config-file' => $configFile], $command->getDefinition());

        self::assertSame(0, $command->execute($input, new NullOutput()));

        return $directory;
    }

    /**
     * @return list<string>
     */
    private function variableNames(string $file): array
    {
        $names = [];

        foreach ((new NodeFinder())->findInstanceOf($this->parse($file), Node\Expr\Variable::class) as $variable) {
            self::assertIsString($variable->name);
            $names[] = $variable->name;
        }

        return $names;
    }

    /**
     * Name of the first parameter of the endpoint constructor, which is the body.
     */
    private function bodyParameterName(string $directory): string
    {
        $constructor = (new NodeFinder())->findFirst($this->parse($directory . '/Endpoint/UpdatePet.php'), static fn (Node $node): bool => $node instanceof Node\Stmt\ClassMethod
            && '__construct' === $node->name->toString());

        self::assertInstanceOf(Node\Stmt\ClassMethod::class, $constructor);
        self::assertNotSame([], $constructor->params);

        $variable = $constructor->params[0]->var;
        self::assertInstanceOf(Node\Expr\Variable::class, $variable);
        self::assertIsString($variable->name);

        return $variable->name;
    }

    /**
     * @return Node[]
     */
    private function parse(string $file): array
    {
        return (array) (new ParserFactory())->createForHostVersion()->parse((string) file_get_contents($file));
    }
}
