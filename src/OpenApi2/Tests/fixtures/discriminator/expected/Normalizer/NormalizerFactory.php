<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PetNormalizer();
        $normalizers[] = new CatNormalizer();
        $normalizers[] = new DogNormalizer();
        return $normalizers;
    }
}
