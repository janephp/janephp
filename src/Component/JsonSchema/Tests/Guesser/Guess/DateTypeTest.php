<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Guess\DateType;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Expr\Variable;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;

class DateTypeTest extends TestCase
{
    private Context $context;

    protected function setUp(): void
    {
        $registry = new Registry();
        $schema = new Schema('/schema.json', 'Jane\Test', '/tmp', 'Test');
        $this->context = new Context($registry);
        $this->context->setCurrentSchema($schema);
    }

    public function testDenormalizationStatementThrowsOnInvalidDate(): void
    {
        $type = new DateType(new JsonSchema());
        $input = new Variable('input');

        [$statements, $output] = $type->createDenormalizationStatement($this->context, $input);

        $printer = new Standard();
        $code = $printer->prettyPrint($statements);

        self::assertStringContainsString("\\DateTime::createFromFormat('Y-m-d', \$input)", $code);
        self::assertStringContainsString('if (false === $date) {', $code);
        self::assertStringContainsString("throw new \\Jane\\Test\\Runtime\\Normalizer\\InvalidDateException(\$input, 'Y-m-d');", $code);
        self::assertStringContainsString('$date->setTime(0, 0, 0)', $printer->prettyPrintExpr($output));
    }

    public function testConditionStatementDoesNotChainSetTimeOnParseResult(): void
    {
        $type = new DateType(new JsonSchema());

        $code = (new Standard())->prettyPrintExpr($type->createConditionStatement(new Variable('input')));

        self::assertStringContainsString("false !== \\DateTime::createFromFormat('Y-m-d', \$input)", $code);
        self::assertStringNotContainsString('setTime', $code);
    }
}
