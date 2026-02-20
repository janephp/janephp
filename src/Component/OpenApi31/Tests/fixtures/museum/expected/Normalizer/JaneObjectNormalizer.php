<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\BuyMuseumTickets::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\BuyMuseumTicketsNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Ticket::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\TicketNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\MuseumTicketsConfirmationNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\MuseumDailyHoursNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\SpecialEventFieldsNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\SpecialEventNormalizer::class,
        
        \Jane\Component\OpenApi31\Tests\Expected\Model\Error::class => \Jane\Component\OpenApi31\Tests\Expected\Normalizer\ErrorNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ReferenceNormalizer::class,
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
        return [
            
            \Jane\Component\OpenApi31\Tests\Expected\Model\BuyMuseumTickets::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\Ticket::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent::class => false,
            \Jane\Component\OpenApi31\Tests\Expected\Model\Error::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}