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
        self::assertStringContainsString("throw new \\Jane\\Test\\Runtime\\Normalizer\\InvalidDateException(\$input, 'Y-m-d\\TH:i:sP');", $code);
        self::assertInstanceOf(Variable::class, $output);
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
