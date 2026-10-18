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

/**
 * A `pagination` configuration not fitting the specification fails the
 * generation, reporting every problem at once (issue #324).
 */
class PaginationConfigurationErrorTest extends TestCase
{
    public function testEveryProblemIsReportedTogether(): void
    {
        $output = $this->generate([
            // not a declared query parameter, and paths not resolving on the response model
            ['^/items$', 'GET', ['strategy' => 'cursor', 'param' => 'page', 'next-cursor' => 'meta.next', 'items' => 'results']],
            // a JSON object response needs an "items" path
            ['^/events$', 'GET', ['strategy' => 'link-header']],
            // no query parameter to request the next page with
            ['^/items/\{id\}$', 'GET', ['strategy' => 'link-header']],
            // matches no operation
            ['^/orders$', 'GET', ['strategy' => 'link-header']],
            // structurally invalid
            ['^/items$', 'POST', ['strategy' => 'offset']],
        ]);

        self::assertStringContainsString('Invalid "pagination" configuration', $output);

        foreach ([
            'pagination[0] (GET "^/items$") on GET /items: "page" is not a query parameter of the operation, expected one of "cursor", "limit".',
            'pagination[0] (GET "^/items$") on GET /items: the "items" path "results" does not resolve on the "ItemPage" model.',
            'pagination[0] (GET "^/items$") on GET /items: the "next-cursor" path "meta.next" does not resolve on the "ItemPage" model.',
            'pagination[1] (GET "^/events$") on GET /events: without an "items" path, the success response must be a JSON array',
            'pagination[2] (GET "^/items/\{id\}$") on GET /items/{id}: the operation declares no query parameter',
            'pagination[3] (GET "^/orders$"): matches no GET operation of the specification.',
            'pagination[4]: only GET operations can be paginated, "POST" given.',
            'pagination[4]: the "strategy" key must be one of "cursor", "page", "link-header", "next-link".',
        ] as $expectedError) {
            self::assertStringContainsString($expectedError, $output);
        }
    }

    public function testTheItemsPathMustPointAtAnArray(): void
    {
        $output = $this->generate([
            ['^/items$', 'GET', ['strategy' => 'cursor', 'param' => 'cursor', 'next-cursor' => 'meta.nextCursor', 'items' => 'meta']],
        ]);

        self::assertStringContainsString('the "items" path "meta" does not point at an array.', $output);
    }

    /**
     * @param list<array<mixed>> $pagination
     */
    private function generate(array $pagination): string
    {
        $directory = sys_get_temp_dir() . \DIRECTORY_SEPARATOR . 'jane-pagination-error-' . bin2hex(random_bytes(4));
        $configFile = $directory . '.jane-openapi.php';

        file_put_contents($configFile, \sprintf(
            "<?php\n\nreturn array_merge(require %s, %s);\n",
            var_export(__DIR__ . '/fixtures/pagination-cursor/.jane-openapi', true),
            var_export(['directory' => $directory, 'pagination' => $pagination], true)
        ));

        try {
            $command = new GenerateCommand(new ConfigLoader(), new SchemaLoader(), new OpenApiMatcher());
            $output = new BufferedOutput(decorated: false);
            $exitCode = $command->run(new ArrayInput(['--config-file' => $configFile]), $output);
        } finally {
            unlink($configFile);
        }

        $display = $output->fetch();
        self::assertSame(Command::FAILURE, $exitCode, $display);
        self::assertDirectoryDoesNotExist($directory, 'nothing must be written when the configuration is invalid.');

        // the error block wraps long lines
        return preg_replace('/\s+/', ' ', $display) ?? $display;
    }
}
