<?php

namespace Jane\OpenApiCommon\Contracts;

use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Registry;

interface WhitelistFetchInterface
{
    public function addOperationRelations(OperationGuess $operationGuess, Registry $registry);
}
