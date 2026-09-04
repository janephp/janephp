<?php

namespace Jane\Component\OpenApiCommon\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
use PhpParser\Node;
use PhpParser\Parser;

abstract class ParameterGenerator
{
    use InflectorTrait;

    public function __construct(
        protected Parser $parser,
    ) {
    }

    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        return null;
    }

    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        return '';
    }

    /**
     * @return Node\Expr[]
     */
    protected function generateInputParamArguments($parameter): array
    {
        return [];
    }

    /**
     * The `@param array{...} $variableName` tag documenting an options array
     * (query, header or form parameters), one entry per parameter as built
     * by formatOptionDocEntry().
     *
     * @param list<string> $entries
     */
    public function generateOptionsArrayDocParameter(string $variableName, array $entries): string
    {
        return \sprintf(" * @param array{\n%s\n * } $%s", implode("\n", $entries), $variableName);
    }

    /**
     * One entry of that array shape: the key quoted (parameter names are not
     * identifiers: `keep-storage`, `filters[]`, `$top`), `?` when the
     * parameter is optional, the PHP type, and the description as a `//`
     * comment. Every further description line is a `//` line of its own,
     * aligned under the first one — a line without the marker is read as
     * part of the shape and invalidates the whole docblock for every PHPDoc
     * parser (PHPStan, Mago, IDEs), `@throws` and `@return` included.
     */
    protected function formatOptionDocEntry(string $name, bool $required, string $type, ?string $description): string
    {
        $entry = \sprintf(' *    "%s"%s: %s,', str_replace('*/', '*\\/', $name), $required ? '' : '?', $type);

        $lines = array_map(static fn (string $line): string => str_replace('*/', '*\\/', rtrim($line)), explode("\n", (string) $description));
        while ([] !== $lines && '' === end($lines)) {
            array_pop($lines);
        }
        while ([] !== $lines && '' === reset($lines)) {
            array_shift($lines);
        }

        if ([] === $lines) {
            return $entry;
        }

        $continuation = "\n *" . str_repeat(' ', \strlen($entry) - 1) . '//';

        return $entry . ' //' . array_shift($lines) . implode('', array_map(static fn (string $line): string => $continuation . $line, $lines));
    }
}
