<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Guess\DateTimeType;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Expr\Variable;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;

class DateTimeTypeTest extends TestCase
{
    private Context $context;

    protected function setUp(): void
    {
        $registry = new Registry();
        $schema = new Schema('/schema.json', 'Jane\Test', '/tmp', 'Test');
        $this->context = new Context($registry);
        $this->context->setCurrentSchema($schema);
    }

    public function testDenormalizationStatementThrowsOnInvalidDateTime(): void
    {
        $type = new DateTimeType(new JsonSchema(), \DateTimeInterface::RFC3339);
        $input = new Variable('input');

        [$statements, $output] = $type->createDenormalizationStatement($this->context, $input);

        $printer = new Standard();
        $code = $printer->prettyPrint($statements);

        self::assertStringContainsString("\\DateTime::createFromFormat('Y-m-d\\TH:i:sP', \$input)", $code);
        self::assertStringContainsString('if (false === $date) {', $code);
        self::assertStringContainsString('throw new \\Jane\\Test\\Runtime\\Normalizer\\InvalidDateException($input, \'Y-m-d\\TH:i:sP\');', $code);
        self::assertInstanceOf(Variable::class, $output);
    }

    public function testDenormalizationStatementFallsBackToLenientParseForRfc3339(): void
    {
        $type = new DateTimeType(new JsonSchema(), \DateTimeInterface::RFC3339);
        $input = new Variable('input');

        [$statements, $output] = $type->createDenormalizationStatement($this->context, $input);

        $code = (new Standard())->prettyPrint($statements);

        // strict parse first...
        self::assertStringContainsString("\\DateTime::createFromFormat('Y-m-d\\TH:i:sP', \$input)", $code);
        // ...then a lenient fallback gated on a strict RFC 3339 shape (Z / fractional seconds)...
        self::assertStringContainsString('new \\DateTime($input)', $code);
        self::assertStringContainsString("1 === preg_match('/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(?:\\.\\d+)?(?:Z|[+-]\\d{2}:\\d{2})\$/', \$input)", $code);
        // ...and malformed input still gets the clean exception.
        self::assertStringContainsString('throw new \\Jane\\Test\\Runtime\\Normalizer\\InvalidDateException($input, \'Y-m-d\\TH:i:sP\');', $code);
        self::assertInstanceOf(Variable::class, $output);
    }

    public function testLenientFallbackIsRestrictedToDefaultRfc3339Format(): void
    {
        $type = new DateTimeType(new JsonSchema(), 'Y-m-d\TH:i:s.uP');
        $input = new Variable('input');

        [$statements] = $type->createDenormalizationStatement($this->context, $input);
        $code = (new Standard())->prettyPrint($statements);

        self::assertStringNotContainsString('new \\DateTime($input)', $code);
        self::assertStringNotContainsString('preg_match', $code);
        self::assertStringContainsString('throw new \\Jane\\Test\\Runtime\\Normalizer\\InvalidDateException($input, \'Y-m-d\\TH:i:s.uP\');', $code);
    }

    public function testConditionStatementRoutesRfc3339ShapesWithoutParsing(): void
    {
        $type = new DateTimeType(new JsonSchema(), \DateTimeInterface::RFC3339);
        $input = new Variable('input');

        $code = (new Standard())->prettyPrintExpr($type->createConditionStatement($input));

        // strict parse branch...
        self::assertStringContainsString("false !== \\DateTime::createFromFormat('Y-m-d\\TH:i:sP', \$input)", $code);
        // ...OR a regex gate for Z / fractional seconds (no `new \DateTime` in the condition:
        // it would throw on malformed strings and accept relative dates).
        self::assertStringContainsString("1 === preg_match('/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(?:\\.\\d+)?(?:Z|[+-]\\d{2}:\\d{2})\$/', \$input)", $code);
        self::assertStringNotContainsString('new \\DateTime(', $code);
    }

    public function testConditionStatementStaysStrictForCustomFormat(): void
    {
        $type = new DateTimeType(new JsonSchema(), 'Y-m-d\TH:i:s.uP');
        $input = new Variable('input');

        $code = (new Standard())->prettyPrintExpr($type->createConditionStatement($input));

        self::assertStringContainsString("false !== \\DateTime::createFromFormat('Y-m-d\\TH:i:s.uP', \$input)", $code);
        self::assertStringNotContainsString('preg_match', $code);
    }

    public function testEmptyInputFormatKeepsPlainExpressionWithoutGuard(): void
    {
        $type = new DateTimeType(new JsonSchema(), \DateTimeInterface::RFC3339, '');
        $input = new Variable('input');

        [$statements, $output] = $type->createDenormalizationStatement($this->context, $input);

        self::assertCount(0, $statements);
        self::assertStringNotContainsString('throw', (new Standard())->prettyPrintExpr($output));
    }
}
