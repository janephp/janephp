<?php

namespace Jane\Component\OpenApiCommon\Generator\RequestBodyContent;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node;

/**
 * Generates the request body payload handling for a given media type.
 *
 * Implementations type-hint the version specific MediaType model; the shared
 * interface keeps the parameter untyped (with `mixed` shape): the concrete
 * generators live in the JsonSchema/OpenAPI components and the media type
 * objects are never inspected by the common generated pipeline directly.
 */
interface RequestBodyContentGeneratorInterface
{
    /**
     * @return array{0: string[], 1: bool} the PHP types for the media type payload and whether it is an array
     */
    public function getTypes($content, string $reference, Context $context): array;

    /**
     * @return Node condition testing whether the payload matches the media type
     */
    public function getTypeCondition($content, string $reference, Context $context): Node;

    /**
     * @return Node[] statements producing [headers, body]
     */
    public function getSerializeStatements($content, string $contentType, string $reference, Context $context): array;
}
