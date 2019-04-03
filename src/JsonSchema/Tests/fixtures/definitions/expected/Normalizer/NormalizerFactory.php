<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new \Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new FooNormalizer();
        $normalizers[] = new BarItemNormalizer();
        $normalizers[] = new HelloWorldNormalizer();
        return $normalizers;
    }
}