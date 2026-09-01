<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessProcessNotificationUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('title', $data)) {
            $value = $data['title'];
            if (is_array($data['title']) && $this->isOnlyNumericKeys($data['title'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['title'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->title = $value;
            unset($data['title']);
        }
        if (\array_key_exists('message', $data)) {
            $value_2 = $data['message'];
            if (is_array($data['message']) && $this->isOnlyNumericKeys($data['message'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['message'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->message = $value_2;
            unset($data['message']);
        }
        if (\array_key_exists('navigationLink', $data) && $data['navigationLink'] !== null) {
            $object->navigationLink = $data['navigationLink'];
            unset($data['navigationLink']);
        }
        elseif (\array_key_exists('navigationLink', $data) && $data['navigationLink'] === null) {
            $object->navigationLink = null;
            unset($data['navigationLink']);
        }
        if (\array_key_exists('eventType', $data)) {
            $value_4 = $data['eventType'];
            if (is_string($data['eventType'])) {
                $value_4 = $data['eventType'];
            }
            $object->eventType = $value_4;
            unset($data['eventType']);
        }
        foreach ($data as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->title ?? null;
        if (is_object($data->title ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->title ?? null as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $value = $values;
        }
        $dataArray['title'] = $value;
        $value_2 = $data->message ?? null;
        if (is_object($data->message ?? null)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->message ?? null as $key_1 => $value_3) {
                $values_1[$key_1] = $value_3;
            }
            $value_2 = $values_1;
        }
        $dataArray['message'] = $value_2;
        if (array_key_exists('navigationLink', get_object_vars($data)) && null !== ($data->navigationLink ?? null)) {
            $dataArray['navigationLink'] = $data->navigationLink ?? null;
        }
        $value_4 = $data->eventType ?? null;
        if (is_string($data->eventType ?? null)) {
            $value_4 = $data->eventType ?? null;
        }
        $dataArray['eventType'] = $value_4;
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_5) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessNotificationUpdateRequest::class => false];
    }
}