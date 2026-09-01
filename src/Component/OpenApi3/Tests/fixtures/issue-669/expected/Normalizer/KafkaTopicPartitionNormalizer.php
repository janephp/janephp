<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class KafkaTopicPartitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('in_sync_replicas', $data)) {
            $object->inSyncReplicas = $data['in_sync_replicas'];
            unset($data['in_sync_replicas']);
        }
        if (\array_key_exists('earliest_offset', $data)) {
            $object->earliestOffset = $data['earliest_offset'];
            unset($data['earliest_offset']);
        }
        if (\array_key_exists('consumer_groups', $data) && $data['consumer_groups'] !== null) {
            $values = [];
            foreach ($data['consumer_groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\KafkaTopicPartitionConsumerGroupsItem::class, 'json', $context);
            }
            $object->consumerGroups = $values;
            unset($data['consumer_groups']);
        }
        elseif (\array_key_exists('consumer_groups', $data) && $data['consumer_groups'] === null) {
            $object->consumerGroups = null;
            unset($data['consumer_groups']);
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
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('inSyncReplicas', get_object_vars($data)) && null !== ($data->inSyncReplicas ?? null)) {
            $dataArray['in_sync_replicas'] = $data->inSyncReplicas ?? null;
        }
        if (array_key_exists('earliestOffset', get_object_vars($data)) && null !== ($data->earliestOffset ?? null)) {
            $dataArray['earliest_offset'] = $data->earliestOffset ?? null;
        }
        if (array_key_exists('consumerGroups', get_object_vars($data)) && null !== ($data->consumerGroups ?? null)) {
            $values = [];
            foreach ($data->consumerGroups ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['consumer_groups'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class => false];
    }
}