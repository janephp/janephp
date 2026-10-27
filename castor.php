<?php

declare(strict_types=1);

use Castor\Attribute\AsTask;
use Symfony\Component\Process\PhpExecutableFinder;

use function Castor\context;
use function Castor\http_download;
use function Castor\io;
use function Castor\PHPQa\php_cs_fixer;
use function Castor\PHPQa\phpstan;
use function Castor\run;
use function Castor\run_php;
use function Castor\yaml_parse;

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

    phpstan($params, '2.3.0');
}

#[AsTask('mago:generated', namespace: 'qa', description: 'Run Mago static analysis over the code Jane generates (fixture expected/ trees and manifest-fixture fresh output)')]
function qa_mago_generated(bool $generateBaseline = false): void
{
    // A composer dev dependency (pinned exactly: the committed baseline is
    // only reproducible against that release), unlike the castor-managed QA
    // phars — Mago is a native binary distributed through a composer wrapper.
    $binary = __DIR__ . '/vendor/bin/mago';
    if (!file_exists($binary)) {
        throw new RuntimeException('vendor/bin/mago not found: run `composer update` first.');
    }

    // The manifest fixtures (no committed expected/ tree) are generated
    // on the fly from their committed specifications, then analysed by a
    // second configuration: the committed baseline of the gate only covers
    // a clean checkout state, and this task must too.
    run_php(__DIR__ . '/generate-manifest-fixtures.php');
    $configs = [
        __DIR__ . '/mago-generated.toml',
        __DIR__ . '/mago-generated-manifest.toml',
    ];

    foreach ($configs as $config) {
        $params = [$binary, '--workspace', __DIR__, '--config', $config, 'analyze'];

        if ($generateBaseline) {
            $params[] = '--generate-baseline';
        }

        run($params);
    }

    io()->success($generateBaseline ? 'Baselines regenerated.' : 'No new findings in generated code.');
}

#[AsTask('corpus', namespace: 'qa', description: 'Smoke-run the generator over the pinned real-world specs of corpus/specs.json (generation, syntax, Mago)')]
function qa_corpus(?string $spec = null, int $timeout = 900): void
{
    // Fetching, generating (in a child process per spec), the php-parser
    // syntax gate and the Mago report live in corpus/run.php, which needs the
    // project autoloader; this task only gives it the project's conventions.
    // Not \PHP_BINARY: it is empty inside the static castor binary CI uses.
    $php = (new PhpExecutableFinder())->find(false) ?: 'php';
    $params = [$php, __DIR__ . '/corpus/run.php', '--timeout=' . $timeout];

    if (null !== $spec) {
        $params[] = '--spec=' . $spec;
    }

    run($params, context: context()->withTimeout(null));
}

#[AsTask('skills', namespace: 'qa', description: 'Check the agent skills of skills/: frontmatter, docs links and anchors, cross-references, README and docs/choose.md entries')]
function qa_skills(): int
{
    $errors = [];
    $skillFiles = glob(__DIR__ . '/skills/*/SKILL.md') ?: [];
    $skillNames = array_map(static fn (string $file): string => basename(\dirname($file)), $skillFiles);
    $installDocs = [
        'README.md' => file_get_contents(__DIR__ . '/README.md'),
        'docs/choose.md' => file_get_contents(__DIR__ . '/docs/choose.md'),
    ];

    foreach ($skillFiles as $file) {
        $skill = basename(\dirname($file));
        $content = file_get_contents($file);

        // Agent Skills format: https://agentskills.io/specification
        if (!preg_match('/\A---\n(.*?)\n---\n/s', $content, $matches)) {
            $errors[] = \sprintf('%s: missing YAML frontmatter', $skill);

            continue;
        }

        try {
            $frontmatter = yaml_parse($matches[1]);
        } catch (Throwable $e) {
            $errors[] = \sprintf('%s: invalid YAML frontmatter: %s', $skill, $e->getMessage());

            continue;
        }

        $name = $frontmatter['name'] ?? null;
        $description = $frontmatter['description'] ?? null;
        if ($name !== $skill || !preg_match('/^[a-z0-9]+(-[a-z0-9]+)*$/', $skill) || \strlen($skill) > 64) {
            $errors[] = \sprintf('%s: `name` must be the directory name, in kebab-case, 64 characters at most', $skill);
        }
        if (!\is_string($description) || '' === trim($description) || \strlen($description) > 1024) {
            $errors[] = \sprintf('%s: `description` must be a non-empty string of 1024 characters at most', $skill);
        }

        foreach ($installDocs as $path => $installDoc) {
            if (!preg_match('/--skill ' . preg_quote($skill, '/') . '\s/', $installDoc)) {
                $errors[] = \sprintf('%s: missing from the "Agent skills" section of %s', $skill, $path);
            }
        }

        preg_match_all('/\bjane-[a-z0-9-]+(?= skill)/', $content, $matches);
        foreach (array_unique($matches[0]) as $reference) {
            if (!\in_array($reference, $skillNames, true)) {
                $errors[] = \sprintf('%s: refers to the unknown skill "%s"', $skill, $reference);
            }
        }

        preg_match_all('{https://jane\.jolicode\.com/latest/([a-z0-9_/]*?)/?(?:#([\w-]+))?(?=[\s)`]|$)}m', $content, $matches, \PREG_SET_ORDER);
        foreach ($matches as $match) {
            $page = '' === $match[1] ? 'index' : $match[1];
            $docFile = __DIR__ . '/docs/' . $page . '.md';
            if (!is_file($docFile)) {
                $docFile = __DIR__ . '/docs/' . $page . '/index.md';
            }
            if (!is_file($docFile)) {
                $errors[] = \sprintf('%s: %s matches no page in docs/', $skill, $match[0]);

                continue;
            }

            if (isset($match[2]) && '' !== $match[2] && !\in_array($match[2], docs_heading_anchors($docFile), true)) {
                $errors[] = \sprintf('%s: %s matches no heading of docs/%s', $skill, $match[0], substr($docFile, \strlen(__DIR__ . '/docs/')));
            }
        }
    }

    if ([] !== $errors) {
        io()->error($errors);

        return 1;
    }

    io()->success(\sprintf('%d skills checked.', \count($skillFiles)));

    return 0;
}

/**
 * Anchors Zensical generates for the headings of a page (Python-Markdown `toc` default slugify).
 *
 * @return list<string>
 */
function docs_heading_anchors(string $docFile): array
{
    $anchors = [];
    $inFence = false;

    foreach (file($docFile, \FILE_IGNORE_NEW_LINES) as $line) {
        if (preg_match('/^\s*(```|~~~)/', $line)) {
            $inFence = !$inFence;

            continue;
        }

        if ($inFence || !preg_match('/^#{1,6}\s+(.+?)\s*#*\s*$/', $line, $matches)) {
            continue;
        }

        $text = preg_replace('/\[([^]]*)]\([^)]*\)/', '$1', $matches[1]);
        $text = preg_replace('/[^\w\s-]/u', '', str_replace(['`', '*'], '', $text));
        $anchors[] = preg_replace('/[-\s]+/', '-', strtolower(trim($text)));
    }

    return $anchors;
}

const DOC_DOCKER_IMAGE = 'jane-doc';

#[AsTask('docker-build', namespace: 'doc', description: 'Build the documentation docker image')]
function doc_docker_build(): void
{
    run(['docker', 'build', '-t', DOC_DOCKER_IMAGE, __DIR__ . '/docs']);
}

#[AsTask('build', namespace: 'doc', description: 'Build documentation')]
function doc_build(): void
{
    doc_run(['zensical', 'build', '--strict']);
}

#[AsTask('server', namespace: 'doc', description: 'Serve documentation and watch for changes')]
function doc_serve(): void
{
    doc_run(['zensical', 'serve', '--dev-addr', 'localhost:8000']);
}

function doc_run(array $command): void
{
    $image = run(['docker', 'image', 'inspect', DOC_DOCKER_IMAGE], context: context()->withAllowFailure()->withQuiet());
    if (!$image->isSuccessful()) {
        doc_docker_build();
    }

    run([
        'docker', 'run', '--init', '--rm', '--network=host',
        '--user', getmyuid() . ':' . getmygid(),
        '--env', 'HOME=/tmp',
        '--volume', __DIR__ . ':/app',
        DOC_DOCKER_IMAGE,
        ...$command,
    ]);
}

#[AsTask(description: 'Fetch external assets and customize theme', namespace: 'doc')]
function build_assets(): void
{
    io()->title('Fetching external assets for documentation');

    http_download('https://raw.githubusercontent.com/jolicode/oss-theme/refs/heads/main/Zensical/extra.css', __DIR__ . '/docs/assets/stylesheets/jolicode.css');
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

#[AsTask('build-github-pages', namespace: 'doc', description: 'Build every version of the documentation for GitHub Pages')]
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
    doc_run(['mike', 'deploy', '--push', '--remote', 'gh-pages', 'dev']);

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
        doc_run(['mike', 'deploy', '--push', '--remote', 'gh-pages', 'dev', 'latest']);
    } else {
        foreach ($buildTags as $tag) {
            run('git checkout tags/' . $tag);

            if ($tag === $latestVersion) {
                doc_run(['mike', 'deploy', '--push', '--remote', 'gh-pages', $tag, 'latest']);
            } else {
                doc_run(['mike', 'deploy', '--push', '--remote', 'gh-pages', '--update-aliases', $tag]);
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
