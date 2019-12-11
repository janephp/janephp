<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new TestPostResponse201Normalizer();
        return $normalizers;
    }
}