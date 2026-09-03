<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SpecialEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Museum\Validator\SpecialEventConstraint());
        }
        if (\array_key_exists('eventId', $data)) {
            $object->eventId = $data['eventId'];
            unset($data['eventId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('location', $data)) {
            $object->location = $data['location'];
            unset($data['location']);
        }
        if (\array_key_exists('eventDescription', $data)) {
            $object->eventDescription = $data['eventDescription'];
            unset($data['eventDescription']);
        }
        if (\array_key_exists('dates', $data)) {
            $values = [];
            foreach ($data['dates'] as $value) {
                $date = \DateTime::createFromFormat('Y-m-d', $value);
                if (false === $date) {
                    throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\InvalidDateException($value, 'Y-m-d');
                }
                $values[] = $date->setTime(0, 0, 0);
            }
            $object->dates = $values;
            unset($data['dates']);
        }
        if (\array_key_exists('price', $data)) {
            $object->price = $data['price'];
            unset($data['price']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('eventId', get_object_vars($data)) && null !== ($data->eventId ?? null)) {
            $dataArray['eventId'] = $data->eventId ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        $dataArray['location'] = $data->location ?? null;
        $dataArray['eventDescription'] = $data->eventDescription ?? null;
        $values = [];
        foreach ($data->dates ?? null as $value) {
            $values[] = $value->format('Y-m-d');
        }
        $dataArray['dates'] = $values;
        $dataArray['price'] = $data->price ?? null;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Museum\Validator\SpecialEventConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent::class => false];
    }
}