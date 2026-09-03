<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableDate\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\NullableDate\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\NullableDate\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Model\Event::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Model\Event::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Model\Event();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Validator\EventConstraint());
        }
        if (\array_key_exists('eventDate', $data) && $data['eventDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['eventDate']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Runtime\Normalizer\InvalidDateException($data['eventDate'], 'Y-m-d');
            }
            $object->eventDate = $date->setTime(0, 0, 0);
            unset($data['eventDate']);
        }
        elseif (\array_key_exists('eventDate', $data) && $data['eventDate'] === null) {
            $object->eventDate = null;
            unset($data['eventDate']);
        }
        if (\array_key_exists('createdAt', $data) && $data['createdAt'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdAt']);
            if (false === $date_1) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Runtime\Normalizer\InvalidDateException($data['createdAt'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date_1;
            unset($data['createdAt']);
        }
        elseif (\array_key_exists('createdAt', $data) && $data['createdAt'] === null) {
            $object->createdAt = null;
            unset($data['createdAt']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updatedAt']);
            if (false === $date_2) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Runtime\Normalizer\InvalidDateException($data['updatedAt'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_2;
            unset($data['updatedAt']);
        }
        if (\array_key_exists('plainDate', $data) && $data['plainDate'] !== null) {
            $value = $data['plainDate'];
            if (is_string($data['plainDate'])) {
                $value = $data['plainDate'];
            } elseif (is_null($data['plainDate'])) {
                $value = $data['plainDate'];
            }
            $object->plainDate = $value;
            unset($data['plainDate']);
        }
        elseif (\array_key_exists('plainDate', $data) && $data['plainDate'] === null) {
            $object->plainDate = null;
            unset($data['plainDate']);
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
        if (array_key_exists('eventDate', get_object_vars($data)) && null !== ($data->eventDate ?? null)) {
            $dataArray['eventDate'] = ($data->eventDate ?? null)?->format('Y-m-d');
        }
        $dataArray['createdAt'] = ($data->createdAt ?? null)?->format('Y-m-d\TH:i:sP');
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updatedAt'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('plainDate', get_object_vars($data)) && null !== ($data->plainDate ?? null)) {
            $value = $data->plainDate ?? null;
            if (is_string($data->plainDate ?? null)) {
                $value = $data->plainDate ?? null;
            } elseif (is_null($data->plainDate ?? null)) {
                $value = $data->plainDate ?? null;
            }
            $dataArray['plainDate'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\NullableDate\Validator\EventConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\NullableDate\Model\Event::class => false];
    }
}