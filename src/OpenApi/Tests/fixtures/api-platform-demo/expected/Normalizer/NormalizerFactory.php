<?php

namespace ApiPlatform\Demo\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new BookNormalizer();
        $normalizers[] = new ParchmentNormalizer();
        $normalizers[] = new ReviewNormalizer();
        $normalizers[] = new BooksGetResponse200Normalizer();
        $normalizers[] = new BooksGetResponse200HydraViewNormalizer();
        $normalizers[] = new BooksGetResponse200HydraSearchNormalizer();
        $normalizers[] = new BooksGetResponse200HydraSearchHydraMappingItemNormalizer();
        $normalizers[] = new BooksIdReviewsGetResponse200Normalizer();
        $normalizers[] = new BooksIdReviewsGetResponse200HydraViewNormalizer();
        $normalizers[] = new BooksIdReviewsGetResponse200HydraSearchNormalizer();
        $normalizers[] = new BooksIdReviewsGetResponse200HydraSearchHydraMappingItemNormalizer();
        $normalizers[] = new ParchmentsGetResponse200Normalizer();
        $normalizers[] = new ParchmentsGetResponse200HydraViewNormalizer();
        $normalizers[] = new ParchmentsGetResponse200HydraSearchNormalizer();
        $normalizers[] = new ParchmentsGetResponse200HydraSearchHydraMappingItemNormalizer();
        $normalizers[] = new ReviewsGetResponse200Normalizer();
        $normalizers[] = new ReviewsGetResponse200HydraViewNormalizer();
        $normalizers[] = new ReviewsGetResponse200HydraSearchNormalizer();
        $normalizers[] = new ReviewsGetResponse200HydraSearchHydraMappingItemNormalizer();
        return $normalizers;
    }
}