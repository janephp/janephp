<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new EmptySpaceNormalizer();
        $normalizers[] = new SchemaNormalizer();
        $normalizers[] = new SchemaObjectPropertyNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new TestIdGetResponse200Normalizer();
        return $normalizers;
    }
}