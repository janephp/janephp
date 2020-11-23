<?php

namespace Jane\Component\OpenApiCommon\Contracts;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiCommon\Registry\Registry;

interface WhitelistFetchInterface
{
    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry);
}
