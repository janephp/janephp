<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PetNormalizer();
        $normalizers[] = new CatInSnakeCaseNormalizer();
        $normalizers[] = new DogInSnakeCaseNormalizer();
        return $normalizers;
    }
}