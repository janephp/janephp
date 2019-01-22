<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestNormalizer();
        $normalizers[] = new TestFooNormalizer();
        return $normalizers;
    }
}