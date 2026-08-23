<?php

namespace Jane\Component\OpenApiCommon\Generator;

final class ContentType
{
    public static function withoutParameters(string $contentType): string
    {
        $baseType = strstr($contentType, ';', true);

        return strtolower(trim(false === $baseType ? $contentType : $baseType));
    }
}
