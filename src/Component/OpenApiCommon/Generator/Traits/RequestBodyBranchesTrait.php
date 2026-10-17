<?php

namespace Jane\Component\OpenApiCommon\Generator\Traits;

use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\PrettyPrinter\Standard;

trait RequestBodyBranchesTrait
{
    /**
     * Order the `getBody()` branches so each one stays reachable: a content
     * type whose schema guesses no type gets the catch-all `isset($this->body)`
     * condition, so it goes after the typed ones (`instanceof`, `is_string`,
     * ...), and only the first of several catch-all branches is kept (two
     * untyped content types), as it always wins.
     *
     * @param list<Stmt\If_> $branches
     *
     * @return list<Stmt\If_>
     */
    private function orderRequestBodyBranches(array $branches): array
    {
        $printer = new Standard();
        $typed = [];
        $catchAll = [];

        foreach ($branches as $branch) {
            if (!$branch->cond instanceof Expr\Isset_ && !($branch->cond instanceof Expr\FuncCall && $branch->cond->name instanceof Name && 'isset' === $branch->cond->name->toString())) {
                $typed[] = $branch;

                continue;
            }

            $catchAll[$printer->prettyPrintExpr($branch->cond)] ??= $branch;
        }

        return [...$typed, ...array_values($catchAll)];
    }
}
