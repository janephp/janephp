<?php

namespace Jane\OpenApi2\Tests\Expected\Two\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestTwoGetResponse200Normalizer();
        return $normalizers;
    }
}
