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
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \ApiPlatform\Demo\Model\Book::class => \ApiPlatform\Demo\Normalizer\BookNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookBookRead::class => \ApiPlatform\Demo\Normalizer\BookBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookReviewRead::class => \ApiPlatform\Demo\Normalizer\BookReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhal::class => \ApiPlatform\Demo\Normalizer\BookJsonhalNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalLinks::class => \ApiPlatform\Demo\Normalizer\BookJsonhalLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalLinksSelf::class => \ApiPlatform\Demo\Normalizer\BookJsonhalLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalBookRead::class => \ApiPlatform\Demo\Normalizer\BookJsonhalBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalBookReadLinks::class => \ApiPlatform\Demo\Normalizer\BookJsonhalBookReadLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalBookReadLinksSelf::class => \ApiPlatform\Demo\Normalizer\BookJsonhalBookReadLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalReviewRead::class => \ApiPlatform\Demo\Normalizer\BookJsonhalReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalReviewReadLinks::class => \ApiPlatform\Demo\Normalizer\BookJsonhalReviewReadLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonhalReviewReadLinksSelf::class => \ApiPlatform\Demo\Normalizer\BookJsonhalReviewReadLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonld::class => \ApiPlatform\Demo\Normalizer\BookJsonldNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonldBookRead::class => \ApiPlatform\Demo\Normalizer\BookJsonldBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\BookJsonldReviewRead::class => \ApiPlatform\Demo\Normalizer\BookJsonldReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\Parchment::class => \ApiPlatform\Demo\Normalizer\ParchmentNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentJsonhal::class => \ApiPlatform\Demo\Normalizer\ParchmentJsonhalNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentJsonhalLinks::class => \ApiPlatform\Demo\Normalizer\ParchmentJsonhalLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentJsonhalLinksSelf::class => \ApiPlatform\Demo\Normalizer\ParchmentJsonhalLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentJsonld::class => \ApiPlatform\Demo\Normalizer\ParchmentJsonldNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewBookRead::class => \ApiPlatform\Demo\Normalizer\ReviewBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewReviewRead::class => \ApiPlatform\Demo\Normalizer\ReviewReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewReviewWrite::class => \ApiPlatform\Demo\Normalizer\ReviewReviewWriteNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalBookRead::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalBookReadLinks::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalBookReadLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalBookReadLinksSelf::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalBookReadLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewRead::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewReadLinks::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewReadLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewReadLinksSelf::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewReadLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewWrite::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewWriteNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewWriteLinks::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewWriteLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonhalReviewWriteLinksSelf::class => \ApiPlatform\Demo\Normalizer\ReviewJsonhalReviewWriteLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonldBookRead::class => \ApiPlatform\Demo\Normalizer\ReviewJsonldBookReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonldReviewRead::class => \ApiPlatform\Demo\Normalizer\ReviewJsonldReviewReadNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewJsonldReviewWrite::class => \ApiPlatform\Demo\Normalizer\ReviewJsonldReviewWriteNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBook::class => \ApiPlatform\Demo\Normalizer\TopBookNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBookJsonhal::class => \ApiPlatform\Demo\Normalizer\TopBookJsonhalNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBookJsonhalLinks::class => \ApiPlatform\Demo\Normalizer\TopBookJsonhalLinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBookJsonhalLinksSelf::class => \ApiPlatform\Demo\Normalizer\TopBookJsonhalLinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBookJsonld::class => \ApiPlatform\Demo\Normalizer\TopBookJsonldNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetLdjsonResponse200::class => \ApiPlatform\Demo\Normalizer\BooksGetLdjsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetLdjsonResponse200HydraView::class => \ApiPlatform\Demo\Normalizer\BooksGetLdjsonResponse200HydraViewNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetLdjsonResponse200HydraSearch::class => \ApiPlatform\Demo\Normalizer\BooksGetLdjsonResponse200HydraSearchNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetLdjsonResponse200HydraSearchHydraMappingItem::class => \ApiPlatform\Demo\Normalizer\BooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200Links::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200LinksSelf::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200LinksFirst::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksFirstNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200LinksLast::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksLastNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200LinksNext::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksNextNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksGetHaljsonResponse200LinksPrevious::class => \ApiPlatform\Demo\Normalizer\BooksGetHaljsonResponse200LinksPreviousNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetLdjsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraView::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetLdjsonResponse200HydraViewNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearch::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetLdjsonResponse200HydraSearchNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItem::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksSelf::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksFirst::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksFirstNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksLast::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksLastNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksNext::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksNextNormalizer::class,
        
        \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious::class => \ApiPlatform\Demo\Normalizer\BooksBookIdReviewsGetHaljsonResponse200LinksPreviousNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetLdjsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraView::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetLdjsonResponse200HydraViewNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearch::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetLdjsonResponse200HydraSearchNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200Links::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200LinksSelf::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200LinksFirst::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksFirstNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200LinksLast::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksLastNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200LinksNext::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksNextNormalizer::class,
        
        \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200LinksPrevious::class => \ApiPlatform\Demo\Normalizer\ParchmentsGetHaljsonResponse200LinksPreviousNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetLdjsonResponse200::class => \ApiPlatform\Demo\Normalizer\ReviewsGetLdjsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetLdjsonResponse200HydraView::class => \ApiPlatform\Demo\Normalizer\ReviewsGetLdjsonResponse200HydraViewNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetLdjsonResponse200HydraSearch::class => \ApiPlatform\Demo\Normalizer\ReviewsGetLdjsonResponse200HydraSearchNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItem::class => \ApiPlatform\Demo\Normalizer\ReviewsGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200Links::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200LinksSelf::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200LinksFirst::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksFirstNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200LinksLast::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksLastNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200LinksNext::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksNextNormalizer::class,
        
        \ApiPlatform\Demo\Model\ReviewsGetHaljsonResponse200LinksPrevious::class => \ApiPlatform\Demo\Normalizer\ReviewsGetHaljsonResponse200LinksPreviousNormalizer::class,
        
        \ApiPlatform\Demo\Model\StatsGetResponse200::class => \ApiPlatform\Demo\Normalizer\StatsGetResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200::class => \ApiPlatform\Demo\Normalizer\TopBooksGetLdjsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraView::class => \ApiPlatform\Demo\Normalizer\TopBooksGetLdjsonResponse200HydraViewNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraSearch::class => \ApiPlatform\Demo\Normalizer\TopBooksGetLdjsonResponse200HydraSearchNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItem::class => \ApiPlatform\Demo\Normalizer\TopBooksGetLdjsonResponse200HydraSearchHydraMappingItemNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200Normalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200Links::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksSelf::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksSelfNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksFirst::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksFirstNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksLast::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksLastNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksNext::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksNextNormalizer::class,
        
        \ApiPlatform\Demo\Model\TopBooksGetHaljsonResponse200LinksPrevious::class => \ApiPlatform\Demo\Normalizer\TopBooksGetHaljsonResponse200LinksPreviousNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \ApiPlatform\Demo\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}