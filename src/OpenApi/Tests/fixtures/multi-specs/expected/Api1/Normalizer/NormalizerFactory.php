<?php

namespace Jane\OpenApi\Tests\Expected\Api1\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new BodyNormalizer();
        return $normalizers;
    }
}