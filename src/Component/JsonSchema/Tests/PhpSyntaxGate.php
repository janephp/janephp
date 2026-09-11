<?php

namespace Jane\Component\JsonSchema\Tests;

use PhpParser\Error;
use PhpParser\ParserFactory;
use Symfony\Component\Finder\Finder;

/**
 * Parses every generated `*.php` file below a directory with nikic/php-parser.
 *
 * Matching a baseline only proves generated output did not change, not that
 * it is valid PHP — this is the syntax gate of the fixture tests
 * (FixtureComparisonTrait) and of the corpus smoke job (corpus/run.php).
 */
final class PhpSyntaxGate
{
    /**
     * @return list<string> one "relative/path.php: message" line per file that does not parse, empty when everything does
     */
    public static function errors(string $directory): array
    {
        $parser = (new ParserFactory())->createForHostVersion();
        $errors = [];

        $finder = new Finder();
        $finder->in($directory)->files()->name('*.php');

        foreach ($finder as $file) {
            try {
                $parser->parse(file_get_contents($file->getRealPath()));
            } catch (Error $error) {
                $errors[] = \sprintf('%s: %s', $file->getRelativePathname(), $error->getMessage());
            }
        }

        return $errors;
    }
}
