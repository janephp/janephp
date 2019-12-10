<?php

namespace Jane\OpenApi2\Tests\Expected\Api2\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        return $normalizers;
    }
}
