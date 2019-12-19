<?php

namespace ApiPlatform\Demo\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    protected $normalizers = array('ApiPlatform\\Demo\\Model\\Book' => 'ApiPlatform\\Demo\\Normalizer\\BookNormalizer', 'ApiPlatform\\Demo\\Model\\Parchment' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentNormalizer', 'ApiPlatform\\Demo\\Model\\Review' => 'ApiPlatform\\Demo\\Normalizer\\ReviewNormalizer', 'ApiPlatform\\Demo\\Model\\BooksGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetResponse200Normalizer', 'ApiPlatform\\Demo\\Model\\BooksGetResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetResponse200HydraViewNormalizer', 'ApiPlatform\\Demo\\Model\\BooksGetResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetResponse200HydraSearchNormalizer', 'ApiPlatform\\Demo\\Model\\BooksGetResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetResponse200HydraSearchHydraMappingItemNormalizer', 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksIdReviewsGetResponse200Normalizer', 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksIdReviewsGetResponse200HydraViewNormalizer', 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksIdReviewsGetResponse200HydraSearchNormalizer', 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksIdReviewsGetResponse200HydraSearchHydraMappingItemNormalizer', 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetResponse200Normalizer', 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetResponse200HydraViewNormalizer', 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetResponse200HydraSearchNormalizer', 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetResponse200HydraSearchHydraMappingItemNormalizer', 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetResponse200Normalizer', 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetResponse200HydraViewNormalizer', 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetResponse200HydraSearchNormalizer', 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetResponse200HydraSearchHydraMappingItemNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}