<?php

declare(strict_types=1);

/*
 * Corpus smoke job — `castor qa:corpus` (docs/contributing/tests.md).
 *
 * For every entry of corpus/specs.json: fetch the pinned spec, generate a
 * client for it in a child process (corpus/generate.php), run the php-parser
 * syntax gate over the output and report Mago's findings per code, with no
 * baseline. Nothing is committed but the list; results go to stdout and, on
 * GitHub Actions, to the step summary.
 *
 * Exit code 1 when an entry without a `known-failure` marker crashed, timed
 * out or produced PHP that does not parse; a `rejected` spec (refused with a
 * clean Jane error) and Mago findings never fail the run.
 *
 * Usage: php corpus/run.php [--spec=<name>[,<name>...]] [--timeout=<seconds>]
 */

use Jane\Component\JsonSchema\Tests\PhpSyntaxGate;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Process\Exception\ProcessTimedOutException;
use Symfony\Component\Process\Process;

require __DIR__ . '/../vendor/autoload.php';

const ROOT = __DIR__ . '/..';
const WORK_DIR = ROOT . '/.corpus';
const MAGO_CONFIG = ROOT . '/mago-generated.toml';

/**
 * @return array{spec: list<string>, timeout: int}
 */
function parseArguments(array $argv): array
{
    $options = ['spec' => [], 'timeout' => 900];

    foreach (array_slice($argv, 1) as $argument) {
        if (preg_match('/^--spec=(.+)$/', $argument, $matches)) {
            $options['spec'] = array_values(array_filter(array_map('trim', explode(',', $matches[1]))));
        } elseif (preg_match('/^--timeout=(\d+)$/', $argument, $matches)) {
            $options['timeout'] = (int) $matches[1];
        } else {
            fwrite(\STDERR, "Unknown argument $argument\nUsage: php corpus/run.php [--spec=<name>[,<name>...]] [--timeout=<seconds>]\n");
            exit(1);
        }
    }

    return $options;
}

/**
 * @return list<array<string, string>> validated entries: name, repo, sha, path, why and the optional known-failure
 */
function loadCorpus(array $onlySpecs): array
{
    $corpus = json_decode(file_get_contents(__DIR__ . '/specs.json'), true, 512, \JSON_THROW_ON_ERROR);
    $entries = [];

    foreach ($corpus['specs'] as $entry) {
        foreach (['name', 'repo', 'sha', 'path'] as $key) {
            if (!isset($entry[$key]) || !is_string($entry[$key]) || '' === $entry[$key]) {
                throw new RuntimeException(sprintf('corpus/specs.json: entry %s misses "%s"', json_encode($entry), $key));
            }
        }
        if (!preg_match('/^[a-z0-9][a-z0-9-]*$/', $entry['name'])) {
            throw new RuntimeException(sprintf('corpus/specs.json: name "%s" must be lowercase letters, digits and dashes', $entry['name']));
        }
        if (!preg_match('/^[0-9a-f]{40}$/', $entry['sha'])) {
            throw new RuntimeException(sprintf('corpus/specs.json: %s: "sha" must be a full 40-character commit SHA', $entry['name']));
        }

        $entries[] = $entry;
    }

    $names = array_column($entries, 'name');
    if (count($names) !== count(array_unique($names))) {
        throw new RuntimeException('corpus/specs.json: duplicate names');
    }

    if ([] === $onlySpecs) {
        return $entries;
    }

    $unknown = array_diff($onlySpecs, $names);
    if ([] !== $unknown) {
        throw new RuntimeException(sprintf('Unknown spec(s) %s; known: %s', implode(', ', $unknown), implode(', ', $names)));
    }

    return array_values(array_filter($entries, static fn (array $entry): bool => in_array($entry['name'], $onlySpecs, true)));
}

/**
 * Downloads the pinned file once; the cache key carries the SHA, so a bump is
 * a new download.
 */
function fetchSpec(array $entry): string
{
    $extension = pathinfo($entry['path'], \PATHINFO_EXTENSION);
    $file = sprintf('%s/cache/%s-%s.%s', WORK_DIR, $entry['name'], substr($entry['sha'], 0, 7), '' === $extension ? 'txt' : $extension);

    if (is_file($file)) {
        return $file;
    }

    $url = sprintf('https://raw.githubusercontent.com/%s/%s/%s', $entry['repo'], $entry['sha'], $entry['path']);
    $content = HttpClient::create()->request('GET', $url)->getContent();

    (new Filesystem())->dumpFile($file, $content);

    return $file;
}

/**
 * The version the document declares, read from the raw file: Jane detects
 * the component itself, this is only for the report.
 */
function declaredVersion(string $file): string
{
    $handle = fopen($file, 'r');
    $version = '?';

    if (false === $handle) {
        return $version;
    }

    while (false !== ($line = fgets($handle))) {
        if (preg_match('/^ {0,2}"?(openapi|swagger)"?\s*:\s*"?(\d[\d.]*)/', $line, $matches)) {
            $version = ('swagger' === $matches[1] ? 'Swagger ' : 'OpenAPI ') . $matches[2];
            break;
        }
    }
    fclose($handle);

    return $version;
}

function studly(string $name): string
{
    return str_replace('-', '', ucwords($name, '-'));
}

/**
 * @return array{status: string, seconds: float, files: int, log: string}
 */
function generate(array $entry, string $specFile, string $outputDir, int $timeout): array
{
    $filesystem = new Filesystem();
    $filesystem->remove($outputDir);
    $filesystem->mkdir($outputDir);

    $configFile = sprintf('%s/config/%s.php', WORK_DIR, $entry['name']);
    $filesystem->dumpFile($configFile, sprintf(
        "<?php\n\nreturn [\n    'openapi-file' => %s,\n    'namespace' => %s,\n    'directory' => %s,\n    'validation' => true,\n];\n",
        var_export($specFile, true),
        var_export('Jane\\Corpus\\' . studly($entry['name']), true),
        var_export($outputDir, true),
    ));

    $process = new Process([\PHP_BINARY, '-d', 'memory_limit=-1', __DIR__ . '/generate.php', $configFile], ROOT, null, null, (float) $timeout);
    $start = microtime(true);

    try {
        $exitCode = $process->run();
        $status = match ($exitCode) {
            0 => 'generated',
            2 => 'rejected',
            3 => 'crashed',
            default => sprintf('crashed (exit %d)', $exitCode),
        };
    } catch (ProcessTimedOutException) {
        $status = sprintf('timeout (%ds)', $timeout);
    }

    return [
        'status' => $status,
        'seconds' => microtime(true) - $start,
        'files' => is_dir($outputDir) ? (new Finder())->in($outputDir)->files()->name('*.php')->count() : 0,
        'log' => $process->getOutput() . $process->getErrorOutput(),
    ];
}

/**
 * @return array{total: int, codes: array<string, int>, error: ?string}
 */
function magoReport(string $outputDir): array
{
    // The rules of mago-generated.toml (its ignore list is the preference /
    // defect split of ADR 0011, its includes resolve the runtime symbols), the
    // generated tree instead of the fixture roots, and no baseline.
    $process = new Process([ROOT . '/vendor/bin/mago', '--workspace', ROOT, '--config', MAGO_CONFIG, 'analyze', '--ignore-baseline', '--reporting-format', 'json', $outputDir], ROOT, null, null, 600.0);
    $process->run();

    $report = json_decode($process->getOutput(), true);
    if (!is_array($report)) {
        return ['total' => 0, 'codes' => [], 'error' => 'no JSON report: ' . trim($process->getErrorOutput() . $process->getOutput())];
    }

    $codes = [];
    $walk = static function (array $node) use (&$walk, &$codes): void {
        if (isset($node['code']) && is_string($node['code']) && isset($node['message'])) {
            $codes[$node['code']] = ($codes[$node['code']] ?? 0) + 1;

            return;
        }
        foreach ($node as $child) {
            if (is_array($child)) {
                $walk($child);
            }
        }
    };
    $walk($report);
    arsort($codes);

    return ['total' => (int) array_sum($codes), 'codes' => $codes, 'error' => null];
}

function formatCodes(array $codes, int $keep = 3): string
{
    if ([] === $codes) {
        return '—';
    }

    $parts = [];
    foreach (array_slice($codes, 0, $keep, true) as $code => $count) {
        $parts[] = sprintf('`%s` %d', $code, $count);
    }
    if (count($codes) > $keep) {
        $parts[] = sprintf('+%d codes', count($codes) - $keep);
    }

    return implode(', ', $parts);
}

function printIndented(string $text): void
{
    $text = trim((string) preg_replace('/[ \t]+$/m', '', $text));

    if ('' !== $text) {
        fwrite(\STDOUT, (string) preg_replace('/^/m', '     ', $text) . "\n");
    }
}

function main(array $argv): int
{
    $options = parseArguments($argv);
    $entries = loadCorpus($options['spec']);
    $filesystem = new Filesystem();
    $filesystem->remove(WORK_DIR . '/failures');

    $rows = [];
    $unexpectedFailures = [];
    $unexpectedPasses = [];
    $codesAcrossCorpus = [];

    foreach ($entries as $entry) {
        $name = $entry['name'];
        fwrite(\STDOUT, sprintf("\n== %s (%s@%s %s)\n", $name, $entry['repo'], substr($entry['sha'], 0, 7), $entry['path']));

        try {
            $specFile = fetchSpec($entry);
        } catch (Throwable $exception) {
            fwrite(\STDOUT, '   fetch failed: ' . $exception->getMessage() . "\n");
            $rows[] = [$name, '?', 'fetch failed', '', '', '', ''];
            $unexpectedFailures[] = $name;
            continue;
        }

        $outputDir = WORK_DIR . '/out/' . $name;
        $generation = generate($entry, $specFile, $outputDir, $options['timeout']);
        $filesystem->dumpFile(sprintf('%s/out/%s.log', WORK_DIR, $name), $generation['log']);
        fwrite(\STDOUT, sprintf("   generation: %s, %d files, %.1fs\n", $generation['status'], $generation['files'], $generation['seconds']));

        $syntax = '';
        $findings = '';

        if ('generated' === $generation['status']) {
            $syntaxErrors = PhpSyntaxGate::errors($outputDir);
            $syntax = [] === $syntaxErrors ? 'ok' : sprintf('%d file(s) do not parse', count($syntaxErrors));
            fwrite(\STDOUT, '   syntax: ' . $syntax . "\n");
            foreach (array_slice($syntaxErrors, 0, 10) as $error) {
                fwrite(\STDOUT, '     ' . $error . "\n");
            }
            $failed = [] !== $syntaxErrors;

            $mago = magoReport($outputDir);
            $findings = null === $mago['error'] ? sprintf('%d — %s', $mago['total'], formatCodes($mago['codes'])) : $mago['error'];
            fwrite(\STDOUT, '   mago: ' . $findings . "\n");
            foreach ($mago['codes'] as $code => $count) {
                $codesAcrossCorpus[$code] = ($codesAcrossCorpus[$code] ?? 0) + $count;
            }
        } elseif ('rejected' === $generation['status']) {
            // Refusing a spec with a clean error is correct behaviour; the
            // [ERROR] block is the interesting part of the log.
            $failed = false;
            printIndented(substr($generation['log'], (int) strpos($generation['log'], '[ERROR]')));
        } else {
            $failed = true;
            printIndented(substr($generation['log'], -3000));
        }

        $knownFailure = $entry['known-failure'] ?? null;
        if ($failed) {
            $filesystem->mirror($outputDir, WORK_DIR . '/failures/' . $name);
            $filesystem->dumpFile(sprintf('%s/failures/%s/generation.log', WORK_DIR, $name), $generation['log']);
            if (null === $knownFailure) {
                $unexpectedFailures[] = $name;
            }
        } elseif (null !== $knownFailure) {
            $unexpectedPasses[] = $name;
        }

        $verdict = match (true) {
            $failed && null !== $knownFailure => 'known failure ' . $knownFailure,
            $failed => '**FAIL**',
            null !== $knownFailure => sprintf('**passes — drop known-failure %s**', $knownFailure),
            default => 'ok',
        };
        $rows[] = [$name, declaredVersion($specFile), $generation['status'], (string) $generation['files'], $syntax, $findings, sprintf('%.0fs', $generation['seconds']), $verdict];
    }

    $summary = "| spec | declared | generation | files | syntax | Mago findings (no baseline, report only) | time | verdict |\n|---|---|---|---:|---|---|---:|---|\n";
    foreach ($rows as $row) {
        $summary .= '| ' . implode(' | ', array_pad($row, 8, '')) . " |\n";
    }
    arsort($codesAcrossCorpus);
    $summary .= "\nMago findings across the corpus: " . formatCodes($codesAcrossCorpus, 8) . "\n";
    if ([] !== $unexpectedPasses) {
        $summary .= "\nUnexpected passes (remove their `known-failure` marker): " . implode(', ', $unexpectedPasses) . "\n";
    }
    if ([] !== $unexpectedFailures) {
        $summary .= "\nFailed: " . implode(', ', $unexpectedFailures) . " — generation output kept under `.corpus/failures/`\n";
    }

    fwrite(\STDOUT, "\n" . $summary);
    if (false !== ($stepSummary = getenv('GITHUB_STEP_SUMMARY')) && '' !== $stepSummary) {
        file_put_contents($stepSummary, "## Corpus smoke\n\n" . $summary, \FILE_APPEND);
    }

    return [] === $unexpectedFailures ? 0 : 1;
}

exit(main($argv));
