<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_bicycle', $data) && \is_int($data['has_bicycle'])) {
            $data['has_bicycle'] = (bool) $data['has_bicycle'];
        }
        if (\array_key_exists('has_dog', $data) && \is_int($data['has_dog'])) {
            $data['has_dog'] = (bool) $data['has_dog'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Validator\BookingConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('trip_id', $data)) {
            $object->tripId = $data['trip_id'];
            unset($data['trip_id']);
        }
        if (\array_key_exists('passenger_name', $data)) {
            $object->passengerName = $data['passenger_name'];
            unset($data['passenger_name']);
        }
        if (\array_key_exists('has_bicycle', $data)) {
            $object->hasBicycle = $data['has_bicycle'];
            unset($data['has_bicycle']);
        }
        if (\array_key_exists('has_dog', $data)) {
            $object->hasDog = $data['has_dog'];
            unset($data['has_dog']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('tripId', get_object_vars($data)) && null !== ($data->tripId ?? null)) {
            $dataArray['trip_id'] = $data->tripId ?? null;
        }
        if (array_key_exists('passengerName', get_object_vars($data)) && null !== ($data->passengerName ?? null)) {
            $dataArray['passenger_name'] = $data->passengerName ?? null;
        }
        if (array_key_exists('hasBicycle', get_object_vars($data)) && null !== ($data->hasBicycle ?? null)) {
            $dataArray['has_bicycle'] = $data->hasBicycle ?? null;
        }
        if (array_key_exists('hasDog', get_object_vars($data)) && null !== ($data->hasDog ?? null)) {
            $dataArray['has_dog'] = $data->hasDog ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Validator\BookingConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking::class => false];
    }
}