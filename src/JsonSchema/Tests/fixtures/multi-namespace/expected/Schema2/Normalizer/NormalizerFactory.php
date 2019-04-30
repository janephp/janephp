<?php

namespace Jane\JsonSchema\Tests\Expected\Schema2\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new FooNormalizer();
        return $normalizers;
    }
}