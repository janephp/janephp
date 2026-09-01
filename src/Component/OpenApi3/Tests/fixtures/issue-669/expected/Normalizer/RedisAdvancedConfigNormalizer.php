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
class RedisAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('redis_ssl', $data) && \is_int($data['redis_ssl'])) {
            $data['redis_ssl'] = (bool) $data['redis_ssl'];
        }
        if (\array_key_exists('redis_maxmemory_policy', $data)) {
            $object->redisMaxmemoryPolicy = $data['redis_maxmemory_policy'];
            unset($data['redis_maxmemory_policy']);
        }
        if (\array_key_exists('redis_pubsub_client_output_buffer_limit', $data)) {
            $object->redisPubsubClientOutputBufferLimit = $data['redis_pubsub_client_output_buffer_limit'];
            unset($data['redis_pubsub_client_output_buffer_limit']);
        }
        if (\array_key_exists('redis_number_of_databases', $data)) {
            $object->redisNumberOfDatabases = $data['redis_number_of_databases'];
            unset($data['redis_number_of_databases']);
        }
        if (\array_key_exists('redis_io_threads', $data)) {
            $object->redisIoThreads = $data['redis_io_threads'];
            unset($data['redis_io_threads']);
        }
        if (\array_key_exists('redis_lfu_log_factor', $data)) {
            $object->redisLfuLogFactor = $data['redis_lfu_log_factor'];
            unset($data['redis_lfu_log_factor']);
        }
        if (\array_key_exists('redis_lfu_decay_time', $data)) {
            $object->redisLfuDecayTime = $data['redis_lfu_decay_time'];
            unset($data['redis_lfu_decay_time']);
        }
        if (\array_key_exists('redis_ssl', $data)) {
            $object->redisSsl = $data['redis_ssl'];
            unset($data['redis_ssl']);
        }
        if (\array_key_exists('redis_timeout', $data)) {
            $object->redisTimeout = $data['redis_timeout'];
            unset($data['redis_timeout']);
        }
        if (\array_key_exists('redis_notify_keyspace_events', $data)) {
            $object->redisNotifyKeyspaceEvents = $data['redis_notify_keyspace_events'];
            unset($data['redis_notify_keyspace_events']);
        }
        if (\array_key_exists('redis_persistence', $data)) {
            $object->redisPersistence = $data['redis_persistence'];
            unset($data['redis_persistence']);
        }
        if (\array_key_exists('redis_acl_channels_default', $data)) {
            $object->redisAclChannelsDefault = $data['redis_acl_channels_default'];
            unset($data['redis_acl_channels_default']);
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
        if (array_key_exists('redisMaxmemoryPolicy', get_object_vars($data)) && null !== ($data->redisMaxmemoryPolicy ?? null)) {
            $dataArray['redis_maxmemory_policy'] = $data->redisMaxmemoryPolicy ?? null;
        }
        if (array_key_exists('redisPubsubClientOutputBufferLimit', get_object_vars($data)) && null !== ($data->redisPubsubClientOutputBufferLimit ?? null)) {
            $dataArray['redis_pubsub_client_output_buffer_limit'] = $data->redisPubsubClientOutputBufferLimit ?? null;
        }
        if (array_key_exists('redisNumberOfDatabases', get_object_vars($data)) && null !== ($data->redisNumberOfDatabases ?? null)) {
            $dataArray['redis_number_of_databases'] = $data->redisNumberOfDatabases ?? null;
        }
        if (array_key_exists('redisIoThreads', get_object_vars($data)) && null !== ($data->redisIoThreads ?? null)) {
            $dataArray['redis_io_threads'] = $data->redisIoThreads ?? null;
        }
        if (array_key_exists('redisLfuLogFactor', get_object_vars($data)) && null !== ($data->redisLfuLogFactor ?? null)) {
            $dataArray['redis_lfu_log_factor'] = $data->redisLfuLogFactor ?? null;
        }
        if (array_key_exists('redisLfuDecayTime', get_object_vars($data)) && null !== ($data->redisLfuDecayTime ?? null)) {
            $dataArray['redis_lfu_decay_time'] = $data->redisLfuDecayTime ?? null;
        }
        if (array_key_exists('redisSsl', get_object_vars($data)) && null !== ($data->redisSsl ?? null)) {
            $dataArray['redis_ssl'] = $data->redisSsl ?? null;
        }
        if (array_key_exists('redisTimeout', get_object_vars($data)) && null !== ($data->redisTimeout ?? null)) {
            $dataArray['redis_timeout'] = $data->redisTimeout ?? null;
        }
        if (array_key_exists('redisNotifyKeyspaceEvents', get_object_vars($data)) && null !== ($data->redisNotifyKeyspaceEvents ?? null)) {
            $dataArray['redis_notify_keyspace_events'] = $data->redisNotifyKeyspaceEvents ?? null;
        }
        if (array_key_exists('redisPersistence', get_object_vars($data)) && null !== ($data->redisPersistence ?? null)) {
            $dataArray['redis_persistence'] = $data->redisPersistence ?? null;
        }
        if (array_key_exists('redisAclChannelsDefault', get_object_vars($data)) && null !== ($data->redisAclChannelsDefault ?? null)) {
            $dataArray['redis_acl_channels_default'] = $data->redisAclChannelsDefault ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class => false];
    }
}