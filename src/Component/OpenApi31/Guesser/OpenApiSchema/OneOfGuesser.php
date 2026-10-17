<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\OneOfGuesser as BaseOneOfGuesser;

/**
 * OpenAPI 3.1 oneOf guesser for unions not driven by references (e.g. `int|string`).
 *
 * Registered after OneOfReferenceGuesser; unions with inline object branches are left untouched
 * as no class is guessed for those branches.
 */
class OneOfGuesser extends BaseOneOfGuesser
{
    public function supportObject($object): bool
    {
        return parent::supportObject($object) && self::hasOnlyNonObjectBranches($object);
    }
}
