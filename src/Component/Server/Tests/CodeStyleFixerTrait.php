<?php

namespace Jane\Component\Server\Tests;

use Composer\InstalledVersions;
use PhpCsFixer\Cache\NullCacheManager;
use PhpCsFixer\Differ\NullDiffer;
use PhpCsFixer\Error\ErrorsManager;
use PhpCsFixer\Finder;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\Linter\Linter;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\Runner\Runner;

trait CodeStyleFixerTrait
{
    private array $excludeFromCodeStyleFixer = [
        __DIR__ . '/../../../../src/Component/OpenApi2/Tests/fixtures/docker-api',
        __DIR__ . '/../../../../src/Component/OpenApi3/Tests/fixtures/api-platform-demo',
        __DIR__ . '/../../../../src/Component/OpenApi3/Tests/fixtures/github',
        __DIR__ . '/../../../../src/Component/OpenApi3/Tests/fixtures/issue-445',
        __DIR__ . '/../../../../src/Component/OpenApi3/Tests/fixtures/issue-337',
        __DIR__ . '/../../../../src/Component/OpenApi3/Tests/fixtures/twitter',
    ];

    private function shouldSkipPathForCurrentPhpParserVersion(string $path): bool
    {
        if ($this->isLatestPhpParser()) {
            return false;
        }

        foreach ($this->excludeFromCodeStyleFixer as $excludePath) {
            if (str_starts_with($path, realpath($excludePath))) {
                return true;
            }
        }

        return false;
    }

    private function fixCodeStyle(string $path): array
    {
        if ($this->isLatestPhpParser()) {
            // don't run CS fixer latest PHP parser
            return [];
        }

        $fixers = (new FixerFactory())
            ->registerBuiltInFixers()
            ->useRuleSet(new RuleSet([
                '@Symfony' => true,
                'string_implicit_backslashes' => true,
            ]))
            ->getFixers();

        $runner = new Runner(
            Finder::create()->in($path),
            $fixers,
            new NullDiffer(),
            null,
            new ErrorsManager(),
            new Linter(),
            false,
            new NullCacheManager(),
        );

        return $runner->fix();
    }

    private function isLatestPhpParser(): bool
    {
        return version_compare(InstalledVersions::getVersion('nikic/php-parser'), '5.0', '>=');
    }
}
