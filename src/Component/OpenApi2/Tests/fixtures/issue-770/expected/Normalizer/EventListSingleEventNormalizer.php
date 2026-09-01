<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventListSingleEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\EventListSingleEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\EventListSingleEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\EventListSingleEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('activity', $data)) {
            $object->activity = $data['activity'];
        }
        if (\array_key_exists('category', $data)) {
            $object->category = $data['category'];
        }
        if (\array_key_exists('eventCode', $data)) {
            $object->eventCode = $data['eventCode'];
        }
        if (\array_key_exists('eventType', $data)) {
            $object->eventType = $data['eventType'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('insertionTime', $data)) {
            $object->insertionTime = $data['insertionTime'];
        }
        if (\array_key_exists('severity', $data)) {
            $object->severity = $data['severity'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('activity', get_object_vars($data)) && null !== ($data->activity ?? null)) {
            $dataArray['activity'] = $data->activity ?? null;
        }
        if (array_key_exists('category', get_object_vars($data)) && null !== ($data->category ?? null)) {
            $dataArray['category'] = $data->category ?? null;
        }
        if (array_key_exists('eventCode', get_object_vars($data)) && null !== ($data->eventCode ?? null)) {
            $dataArray['eventCode'] = $data->eventCode ?? null;
        }
        if (array_key_exists('eventType', get_object_vars($data)) && null !== ($data->eventType ?? null)) {
            $dataArray['eventType'] = $data->eventType ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('insertionTime', get_object_vars($data)) && null !== ($data->insertionTime ?? null)) {
            $dataArray['insertionTime'] = $data->insertionTime ?? null;
        }
        if (array_key_exists('severity', get_object_vars($data)) && null !== ($data->severity ?? null)) {
            $dataArray['severity'] = $data->severity ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\EventListSingleEvent::class => false];
    }
}