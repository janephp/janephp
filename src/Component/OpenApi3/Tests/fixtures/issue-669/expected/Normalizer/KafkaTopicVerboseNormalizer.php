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
class KafkaTopicVerboseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $object->state = $data['state'];
            unset($data['state']);
        }
        if (\array_key_exists('replication_factor', $data)) {
            $object->replicationFactor = $data['replication_factor'];
            unset($data['replication_factor']);
        }
        if (\array_key_exists('partitions', $data)) {
            $values = [];
            foreach ($data['partitions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class, 'json', $context);
            }
            $object->partitions = $values;
            unset($data['partitions']);
        }
        if (\array_key_exists('config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class, 'json', $context);
            unset($data['config']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['state'] = $data->state ?? null;
        }
        if (array_key_exists('replicationFactor', get_object_vars($data)) && null !== ($data->replicationFactor ?? null)) {
            $dataArray['replication_factor'] = $data->replicationFactor ?? null;
        }
        if (array_key_exists('partitions', get_object_vars($data)) && null !== ($data->partitions ?? null)) {
            $values = [];
            foreach ($data->partitions ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['partitions'] = $values;
        }
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $dataArray['config'] = ($data->config ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose::class => false];
    }
}