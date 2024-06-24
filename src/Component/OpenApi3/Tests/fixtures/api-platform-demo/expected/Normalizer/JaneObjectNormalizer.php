<?php

namespace ApiPlatform\Demo\Normalizer;

use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'ApiPlatform\\Demo\\Model\\Book' => 'ApiPlatform\\Demo\\Normalizer\\BookNormalizer',
            'ApiPlatform\\Demo\\Model\\BookBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonld' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonldBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonldReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\Parchment' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonld' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBook' => 'ApiPlatform\\Demo\\Normalizer\\TopBookNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonld' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\StatsGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\StatsGetResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksPreviousNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\ApiPlatform\\Demo\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
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
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\Book' => false, 'ApiPlatform\\Demo\\Model\\BookBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookReviewRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhal' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonld' => false, 'ApiPlatform\\Demo\\Model\\BookJsonldBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonldReviewRead' => false, 'ApiPlatform\\Demo\\Model\\Parchment' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhal' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonld' => false, 'ApiPlatform\\Demo\\Model\\ReviewBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\TopBook' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhal' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonld' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\StatsGetResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksPrevious' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array(
            
            'ApiPlatform\\Demo\\Model\\Book' => 'ApiPlatform\\Demo\\Normalizer\\BookNormalizer',
            'ApiPlatform\\Demo\\Model\\BookBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalBookReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonhalReviewReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonld' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonldBookRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\BookJsonldReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\BookJsonldReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\Parchment' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentJsonld' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalBookReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewReadLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonhalReviewWriteLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldBookRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldBookReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewRead' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldReviewReadNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewWrite' => 'ApiPlatform\\Demo\\Normalizer\\ReviewJsonldReviewWriteNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBook' => 'ApiPlatform\\Demo\\Normalizer\\TopBookNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhal' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinks' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalLinksNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonhalLinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBookJsonld' => 'ApiPlatform\\Demo\\Normalizer\\TopBookJsonldNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\BooksGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\BooksBookIdReviewsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\ParchmentsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\ReviewsGetHaljsonResponse200LinksPreviousNormalizer',
            'ApiPlatform\\Demo\\Model\\StatsGetResponse200' => 'ApiPlatform\\Demo\\Normalizer\\StatsGetResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraView' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraViewNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearch' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraSearchNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItem' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200Normalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksSelf' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksSelfNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksFirst' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksFirstNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksLast' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksLastNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksNext' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksNextNormalizer',
            'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksPrevious' => 'ApiPlatform\\Demo\\Normalizer\\TopBooksGetHaljsonResponse200LinksPreviousNormalizer',
            '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\ApiPlatform\\Demo\\Runtime\\Normalizer\\ReferenceNormalizer',
        ), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
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
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\Book' => false, 'ApiPlatform\\Demo\\Model\\BookBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookReviewRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhal' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalBookReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinks' => false, 'ApiPlatform\\Demo\\Model\\BookJsonhalReviewReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BookJsonld' => false, 'ApiPlatform\\Demo\\Model\\BookJsonldBookRead' => false, 'ApiPlatform\\Demo\\Model\\BookJsonldReviewRead' => false, 'ApiPlatform\\Demo\\Model\\Parchment' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhal' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ParchmentJsonld' => false, 'ApiPlatform\\Demo\\Model\\ReviewBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalBookReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewReadLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinks' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonhalReviewWriteLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldBookRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewRead' => false, 'ApiPlatform\\Demo\\Model\\ReviewJsonldReviewWrite' => false, 'ApiPlatform\\Demo\\Model\\TopBook' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhal' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinks' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonhalLinksSelf' => false, 'ApiPlatform\\Demo\\Model\\TopBookJsonld' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\BooksGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\BooksGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\ReviewsGetHaljsonResponse200LinksPrevious' => false, 'ApiPlatform\\Demo\\Model\\StatsGetResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraView' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearch' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItem' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200Links' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksSelf' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksFirst' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksLast' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksNext' => false, 'ApiPlatform\\Demo\\Model\\TopBooksGetHaljsonResponse200LinksPrevious' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
}