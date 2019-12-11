<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new FooNormalizer();
        $normalizers[] = new BarNormalizer();
        $normalizers[] = new TestGetBodyNormalizer();
        $normalizers[] = new TestGetBodyBazNormalizer();
        $normalizers[] = new TestPostBodyNormalizer();
        return $normalizers;
    }
}