<?php

namespace Jane\OpenApi2\Tests\Expected\One\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestOneGetResponse200Normalizer();
        return $normalizers;
    }
}