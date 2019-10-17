<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ModelNormalizer();
        $normalizers[] = new ModelTranslationsItemNormalizer();
        $normalizers[] = new SubModelNormalizer();
        return $normalizers;
    }
}