<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BookingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\Booking::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\Booking::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\Booking();
        if (\array_key_exists('has_bicycle', $data) && \is_int($data['has_bicycle'])) {
            $data['has_bicycle'] = (bool) $data['has_bicycle'];
        }
        if (\array_key_exists('has_dog', $data) && \is_int($data['has_dog'])) {
            $data['has_dog'] = (bool) $data['has_dog'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\BookingConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('trip_id', $data)) {
            $object->setTripId($data['trip_id']);
        }
        if (\array_key_exists('passenger_name', $data)) {
            $object->setPassengerName($data['passenger_name']);
        }
        if (\array_key_exists('has_bicycle', $data)) {
            $object->setHasBicycle($data['has_bicycle']);
        }
        if (\array_key_exists('has_dog', $data)) {
            $object->setHasDog($data['has_dog']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('tripId') && null !== $data->getTripId()) {
            $dataArray['trip_id'] = $data->getTripId();
        }
        if ($data->isInitialized('passengerName') && null !== $data->getPassengerName()) {
            $dataArray['passenger_name'] = $data->getPassengerName();
        }
        if ($data->isInitialized('hasBicycle') && null !== $data->getHasBicycle()) {
            $dataArray['has_bicycle'] = $data->getHasBicycle();
        }
        if ($data->isInitialized('hasDog') && null !== $data->getHasDog()) {
            $dataArray['has_dog'] = $data->getHasDog();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\BookingConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\Booking::class => false];
    }
}