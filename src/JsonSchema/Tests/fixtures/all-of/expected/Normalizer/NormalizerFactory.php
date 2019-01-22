<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestNormalizer();
        $normalizers[] = new OtherchildtypeNormalizer();
        $normalizers[] = new ChildtypeNormalizer();
        $normalizers[] = new ParenttypeNormalizer();
        $normalizers[] = new FooNormalizer();
        $normalizers[] = new BarNormalizer();
        $normalizers[] = new BazNormalizer();
        $normalizers[] = new BazBazNormalizer();
        return $normalizers;
    }
}