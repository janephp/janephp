<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Endpoint;

use Jane\Component\OpenApiCommon\Generator\Endpoint\ConstructorParametersTrait;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;

final class ConstructorParametersTraitTest extends TestCase
{
    public function testOptionsArrayParameterIsOptionalUnlessAKeyIsRequired(): void
    {
        $subject = $this->subject();

        self::assertSame('array $queryParameters = []', $this->print($subject->options('queryParameters', false)));
        self::assertSame('array $queryParameters', $this->print($subject->options('queryParameters', true)));
    }

    /**
     * PHP treats an optional parameter declared before a required one as
     * required anyway (and deprecates the declaration): the signature says so
     * explicitly instead.
     */
    public function testDefaultsBeforeARequiredParameterAreDropped(): void
    {
        $subject = $this->subject();

        $params = $subject->dropDefaults([
            new Node\Param(new Expr\Variable('id'), null, new Name('string')),
            new Node\Param(new Expr\Variable('format'), new Node\Scalar\String_('json'), new Name('string')),
            new Node\Param(new Expr\Variable('requestBody'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name('Body'))),
            new Node\Param(new Expr\Variable('queryParameters'), null, new Name('array')),
            new Node\Param(new Expr\Variable('headerParameters'), new Expr\Array_(), new Name('array')),
        ]);

        self::assertSame(
            ['string $id', 'string $format', '?Body $requestBody', 'array $queryParameters', 'array $headerParameters = []'],
            array_map(fn (Node\Param $param): string => $this->print($param), $params)
        );
    }

    public function testDefaultsAreKeptWhenNothingRequiredFollows(): void
    {
        $subject = $this->subject();

        $params = $subject->dropDefaults([
            new Node\Param(new Expr\Variable('id'), null, new Name('string')),
            new Node\Param(new Expr\Variable('requestBody'), new Expr\ConstFetch(new Name('null')), new Node\NullableType(new Name('Body'))),
            new Node\Param(new Expr\Variable('queryParameters'), new Expr\Array_(), new Name('array')),
        ]);

        self::assertSame(
            ['string $id', '?Body $requestBody = null', 'array $queryParameters = []'],
            array_map(fn (Node\Param $param): string => $this->print($param), $params)
        );
    }

    private function subject(): object
    {
        return new class() {
            use ConstructorParametersTrait;

            public function options(string $name, bool $required): Node\Param
            {
                return $this->optionsArrayParameter($name, $required);
            }

            /**
             * @param Node\Param[] $params
             *
             * @return Node\Param[]
             */
            public function dropDefaults(array $params): array
            {
                return $this->dropDefaultsBeforeRequired($params);
            }
        };
    }

    private function print(Node\Param $param): string
    {
        return (new Standard())->prettyPrint([$param]);
    }
}
