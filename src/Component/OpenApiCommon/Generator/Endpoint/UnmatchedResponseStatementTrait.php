<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use PhpParser\Node\Expr;
use PhpParser\Node\Stmt;

/**
 * Closes the response chain of transformResponseBody(): whatever no declared
 * response matched must end in an explicit statement (a throw or a return),
 * never fall out of the method as an implicit null.
 */
trait UnmatchedResponseStatementTrait
{
    /**
     * Append the statement handling an unmatched response, unless the chain
     * already ends unconditionally (a `default` response without content
     * returns unconditionally): appending after that would be unreachable.
     *
     * @param Stmt[] $statements
     *
     * @return Stmt[]
     */
    protected function appendUnmatchedResponseStatement(array $statements, Stmt $statement): array
    {
        if ($this->endsWithTerminalStatement($statements)) {
            return $statements;
        }

        $statements[] = $statement;

        return $statements;
    }

    /**
     * @param Stmt[] $statements
     */
    private function endsWithTerminalStatement(array $statements): bool
    {
        $last = end($statements);

        if ($last instanceof Stmt\Return_) {
            return true;
        }

        if ($last instanceof Stmt\Expression && $last->expr instanceof Expr\Throw_) {
            return true;
        }

        if ($last instanceof Stmt\TryCatch) {
            foreach ($last->catches as $catch) {
                if (!$this->endsWithTerminalStatement($catch->stmts)) {
                    return false;
                }
            }

            return $this->endsWithTerminalStatement($last->stmts);
        }

        return false;
    }
}
