<?php

namespace Jane\Component\OpenApiCommon\Tests\Generator\Endpoint;

use Jane\Component\OpenApiCommon\Generator\Endpoint\UnmatchedResponseStatementTrait;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\TestCase;

final class UnmatchedResponseStatementTraitTest extends TestCase
{
    public function testTheStatementIsAppendedAfterAConditionalBranch(): void
    {
        $subject = $this->subject();

        $statements = $subject->append([$this->ifBranch()], $this->returnNull());

        self::assertSame(['if (200 === $status) {', '    return $value;', '}', 'return null;'], $this->print($statements));
    }

    public function testTheStatementIsAppendedToAnEmptyChain(): void
    {
        $subject = $this->subject();

        $statements = $subject->append([], $this->throwBadResponse());

        self::assertSame(['throw new BadResponseException($status);'], $this->print($statements));
    }

    /**
     * A `default` response without content ends the chain with an
     * unconditional return: anything appended after it would be unreachable.
     */
    public function testNothingIsAppendedAfterAnUnconditionalReturn(): void
    {
        $subject = $this->subject();

        $statements = $subject->append([$this->ifBranch(), $this->returnNull()], $this->throwBadResponse());

        self::assertSame(['if (200 === $status) {', '    return $value;', '}', 'return null;'], $this->print($statements));
    }

    public function testNothingIsAppendedAfterAnUnconditionalThrow(): void
    {
        $subject = $this->subject();

        $statements = $subject->append([$this->throwBadResponse()], $this->returnNull());

        self::assertSame(['throw new BadResponseException($status);'], $this->print($statements));
    }

    /**
     * A bare json_decode() response is wrapped in try/catch: the try block
     * returns and the catch block throws, so the chain is already closed.
     */
    public function testNothingIsAppendedAfterATryCatchWhoseEveryBranchIsTerminal(): void
    {
        $subject = $this->subject();
        $tryCatch = new Stmt\TryCatch(
            [$this->returnNull()],
            [new Stmt\Catch_([new Name('\\JsonException')], new Expr\Variable('e'), [$this->throwBadResponse()])]
        );

        $statements = $subject->append([$tryCatch], $this->returnNull());

        self::assertSame(
            ['try {', '    return null;', '} catch (\\JsonException $e) {', '    throw new BadResponseException($status);', '}'],
            $this->print($statements)
        );
    }

    public function testTheStatementIsAppendedAfterATryCatchWithANonTerminalBranch(): void
    {
        $subject = $this->subject();
        $tryCatch = new Stmt\TryCatch(
            [$this->returnNull()],
            [new Stmt\Catch_([new Name('\\JsonException')], new Expr\Variable('e'), [new Stmt\Expression(new Expr\Assign(new Expr\Variable('value'), new Expr\ConstFetch(new Name('null'))))])]
        );

        $statements = $subject->append([$tryCatch], $this->returnNull());

        self::assertSame('return null;', $this->print($statements)[5]);
    }

    private function subject(): object
    {
        return new class() {
            use UnmatchedResponseStatementTrait;

            /**
             * @param Stmt[] $statements
             *
             * @return Stmt[]
             */
            public function append(array $statements, Stmt $statement): array
            {
                return $this->appendUnmatchedResponseStatement($statements, $statement);
            }
        };
    }

    private function ifBranch(): Stmt\If_
    {
        return new Stmt\If_(
            new Expr\BinaryOp\Identical(new \PhpParser\Node\Scalar\LNumber(200), new Expr\Variable('status')),
            ['stmts' => [new Stmt\Return_(new Expr\Variable('value'))]]
        );
    }

    private function returnNull(): Stmt\Return_
    {
        return new Stmt\Return_(new Expr\ConstFetch(new Name('null')));
    }

    private function throwBadResponse(): Stmt\Expression
    {
        return new Stmt\Expression(new Expr\Throw_(new Expr\New_(new Name('BadResponseException'), [new \PhpParser\Node\Arg(new Expr\Variable('status'))])));
    }

    /**
     * @param Stmt[] $statements
     *
     * @return string[]
     */
    private function print(array $statements): array
    {
        return explode("\n", (new Standard())->prettyPrint($statements));
    }
}
