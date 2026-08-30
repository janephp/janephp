<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer;

use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Station::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\StationNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\LinksSelf::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\LinksSelfNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\LinksDestination::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\LinksDestinationNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\LinksOrigin::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\LinksOriginNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\LinksPagination::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\LinksPaginationNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\ProblemNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Trip::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\WrapperCollection::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\WrapperCollectionNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingPayment::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingPaymentNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\LinksBooking::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\LinksBookingNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\StationsGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\StationsGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\StationsGetJsonResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\StationsGetJsonResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\StationsGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\StationsGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\StationsGetXmlResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\StationsGetXmlResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripsGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200DataItem::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripsGetJsonResponse200DataItemNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripsGetJsonResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripsGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetXmlResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\TripsGetXmlResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsGetJsonResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsGetJsonResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsGetXmlResponse200Links::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsGetXmlResponse200LinksNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsPostJsonResponse201::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsPostJsonResponse201Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsPostXmlResponse201::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsPostXmlResponse201Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdGetJsonResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsBookingIdGetJsonResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdGetXmlResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsBookingIdGetXmlResponse200Normalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdPaymentPostResponse200::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\BookingsBookingIdPaymentPostResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Normalizer\ReferenceNormalizer::class,
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