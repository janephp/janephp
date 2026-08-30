<?php

declare(strict_types=1);

use Castor\Attribute\AsTask;

use function Castor\context;
use function Castor\http_download;
use function Castor\io;
use function Castor\PHPQa\php_cs_fixer;
use function Castor\PHPQa\phpstan;
use function Castor\run;

#[AsTask('cs:check', namespace: 'qa', description: 'Check for coding standards without fixing them')]
function qa_cs_check(): void
{
    php_cs_fixer(['fix', '--config', __DIR__ . '/.php-cs-fixer.php', '--dry-run', '--diff'], '3.85.1', [
        'kubawerlos/php-cs-fixer-custom-fixers' => '^3.21',
    ]);
}

#[AsTask('cs:fix', namespace: 'qa', description: 'Fix all coding standards', aliases: ['cs'])]
function qa_cs_fix(): void
{
    php_cs_fixer(['fix', '--config', __DIR__ . '/.php-cs-fixer.php', '-v'], '3.85.1', [
        'kubawerlos/php-cs-fixer-custom-fixers' => '^3.21',
    ]);
}

#[AsTask('phpstan', namespace: 'qa', description: 'Run PHPStan for static analysis', aliases: ['phpstan'])]
function qa_phpstan(bool $generateBaseline = false): void
{
    $params = ['analyse', '--configuration', __DIR__ . '/phpstan.neon', '--memory-limit=-1', '-v'];
    if ($generateBaseline) {
        $params[] = '--generate-baseline';
    }

    phpstan($params, '2.2.2');
}

#[AsTask('phpstan:generated', namespace: 'qa', description: 'Run PHPStan over the code Jane generates (fixture expected/ trees)')]
function qa_phpstan_generated(bool $generateBaseline = false): void
{
    $params = ['analyse', '--configuration', __DIR__ . '/phpstan-generated.neon', '--memory-limit=-1', '-v'];
    if ($generateBaseline) {
        // The config includes the baseline, so it has to be emptied before regenerating it.
        file_put_contents(__DIR__ . '/phpstan-generated-baseline.neon', "parameters:\n\tignoreErrors: []\n");
        $params[] = '--generate-baseline';
        $params[] = __DIR__ . '/phpstan-generated-baseline.neon';
    }

    phpstan($params, '2.2.2');
}

#[AsTask('install', namespace: 'doc', description: 'Install tool for documentation (need poetry)')]
function doc_install(): void
{
    run('poetry install');
}

#[AsTask('server', namespace: 'doc', description: 'Serve documentation')]
function doc_serve(): void
{
    run('poetry run mkdocs serve -a localhost:8000');
}

#[AsTask(description: 'Fetch external assets and customize theme', namespace: 'doc')]
function build_assets(): void
{
    io()->title('Fetching external assets for MkDocs documentation');

    http_download('https://raw.githubusercontent.com/jolicode/oss-theme/refs/heads/main/MkDocs/extra.css', __DIR__ . '/docs/assets/stylesheets/jolicode.css');
    http_download('https://raw.githubusercontent.com/jolicode/oss-theme/refs/heads/main/snippet-joli-footer.html', __DIR__ . '/docs/overrides/jolicode-footer.html');

    $html = <<<'HTML'
    Jane is licensed under
    <a href="https://github.com/janephp/janephp/blob/main/LICENSE" target="_blank" rel="noreferrer noopener" class="jf-link">
      MIT license
    </a>
    HTML;

    $footer = file_get_contents(__DIR__ . '/docs/overrides/jolicode-footer.html');
    $footer = str_replace('#GITHUB_REPO', 'janephp/janephp', $footer);
    $footer = str_replace('<!-- #SUBTITLE -->', $html, $footer);

    file_put_contents(__DIR__ . '/docs/overrides/jolicode-footer.html', $footer);
}

#[AsTask('build-github-pages', namespace: 'doc', description: 'Serve documentation')]
function doc_build_github_pages(): void
{
    // clean .build directory
    run('rm -rf ./.build', context: context()->withAllowFailure());

    // create .build directory
    @mkdir(__DIR__ . '/.build');
    run('git config user.name ci-bot');
    run('git config user.email ci-bot@example.org');
    run('git remote add gh-pages ./.build', context: context()->withAllowFailure());

    $context = context()->withWorkingDirectory(__DIR__ . '/.build');

    run('git init', context: $context);
    run('git checkout -b gh-pages', context: $context);
    run('git config receive.denyCurrentBranch ignore', context: $context);

    // build documentation for main branch
    run('poetry run mike deploy --push --remote gh-pages dev');

    // get the list of tags
    $tags = run('git tag --list', context: context()->withQuiet())->getOutput();
    $tags = array_filter(array_map('trim', explode("\n", $tags)));

    $minVersion = 'v7.11.0';
    $latestVersion = null;
    $buildTags = [];

    foreach ($tags as $tag) {
        if (!version_compare($tag, $minVersion, '>=')) {
            continue;
        }

        // version is X.Y.Z we want the X.Y part
        $parts = explode('.', $tag);
        if (count($parts) !== 3) {
            continue;
        }

        $majorMinor = $parts[0] . '.' . $parts[1];

        // get only the last version for this major.minor
        if (isset($buildTags[$majorMinor]) && version_compare($tag, $buildTags[$majorMinor], '<=')) {
            continue;
        }

        if (null === $latestVersion || version_compare($tag, $latestVersion, '>')) {
            $latestVersion = $tag;
        }

        $buildTags[$majorMinor] = $tag;
    }

    if (null === $latestVersion) {
        run('poetry run mike deploy --push --remote gh-pages dev latest');
    } else {
        foreach ($buildTags as $tag) {
            run('git checkout tags/' . $tag);

            if ($tag === $latestVersion) {
                run('poetry run mike deploy --push --remote gh-pages ' . $tag . ' latest');
            } else {
                run('poetry run mike deploy --push --remote gh-pages --update-aliases ' . $tag);
            }
        }
    }

    run('git reset --hard gh-pages', context: $context);
}

#[AsTask('replace-all-expected-fixtures', namespace: 'jane', description: 'Will replace all expected fixtures by the current generated fixtures (optional component filter, e.g. OpenApi3)')]
function replaceAllExpectedFixtures(?string $component = null): void
{
    io()->title('Replacing all expected fixtures by the current generated fixtures');

    run('./replace-all-expected-fixtures.sh' . (null !== $component ? ' ' . $component : ''));

    io()->success('Done');
}

#[AsTask('clear-all-generated-fixtures', namespace: 'jane', description: 'Will clear all generated fixtures (optional component filter, e.g. OpenApi3)')]
function clearAllGeneratedFixtures(?string $component = null): void
{
    io()->title('Clearing all generated fixtures');

    run('./clear-all-generated-files.sh' . (null !== $component ? ' ' . $component : ''));

    io()->success('Done');
}

#[AsTask('snapshot-manifest', namespace: 'jane', description: '(Re)build the expected.manifest.json of a fixture from its freshly generated output, e.g. jane:snapshot-manifest OpenApi3 github')]
function snapshotManifest(string $component, string $fixture): void
{
    $fixtureDir = sprintf('%s/src/Component/%s/Tests/fixtures/%s', __DIR__, $component, $fixture);
    $generatedDir = $fixtureDir . '/generated';

    if (!is_dir($generatedDir)) {
        throw new RuntimeException(sprintf('No generated/ output in "%s". Run the tests first.', $generatedDir));
    }

    $files = [];
    $iterator = new \RecursiveIteratorIterator(
        new \RecursiveDirectoryIterator($generatedDir, \FilesystemIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if (!$file->isFile()) {
            continue;
        }

        $relativePathname = str_replace(\DIRECTORY_SEPARATOR, '/', substr($file->getPathname(), \strlen($generatedDir) + 1));

        // Runtime files are verbatim template copies, asserted centrally by
        // each component's runtime-boilerplate fixture: keep them out of manifests.
        if (in_array('Runtime', explode('/', $relativePathname), true)) {
            continue;
        }

        $files[$relativePathname] = hash_file('sha256', $file->getPathname());
    }

    ksort($files);

    file_put_contents(
        $fixtureDir . '/expected.manifest.json',
        json_encode(['algorithm' => 'sha256', 'files' => $files], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n"
    );

    io()->success(sprintf('Manifest written with %d entries', count($files)));
}
