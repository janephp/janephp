<?php

namespace Jane\JsonSchema\Tests\Expected\Schema1\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestNormalizer();
        return $normalizers;
    }
}