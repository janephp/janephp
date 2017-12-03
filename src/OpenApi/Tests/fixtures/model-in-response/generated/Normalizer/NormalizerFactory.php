<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new SchemaNormalizer();
        $normalizers[] = new SchemaObjectPropertyNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new TestIdGetResponse200Normalizer();

        return $normalizers;
    }
}
