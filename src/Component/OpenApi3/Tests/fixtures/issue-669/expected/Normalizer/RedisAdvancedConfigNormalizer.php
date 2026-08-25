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
            $object->setRedisMaxmemoryPolicy($data['redis_maxmemory_policy']);
            unset($data['redis_maxmemory_policy']);
        }
        if (\array_key_exists('redis_pubsub_client_output_buffer_limit', $data)) {
            $object->setRedisPubsubClientOutputBufferLimit($data['redis_pubsub_client_output_buffer_limit']);
            unset($data['redis_pubsub_client_output_buffer_limit']);
        }
        if (\array_key_exists('redis_number_of_databases', $data)) {
            $object->setRedisNumberOfDatabases($data['redis_number_of_databases']);
            unset($data['redis_number_of_databases']);
        }
        if (\array_key_exists('redis_io_threads', $data)) {
            $object->setRedisIoThreads($data['redis_io_threads']);
            unset($data['redis_io_threads']);
        }
        if (\array_key_exists('redis_lfu_log_factor', $data)) {
            $object->setRedisLfuLogFactor($data['redis_lfu_log_factor']);
            unset($data['redis_lfu_log_factor']);
        }
        if (\array_key_exists('redis_lfu_decay_time', $data)) {
            $object->setRedisLfuDecayTime($data['redis_lfu_decay_time']);
            unset($data['redis_lfu_decay_time']);
        }
        if (\array_key_exists('redis_ssl', $data)) {
            $object->setRedisSsl($data['redis_ssl']);
            unset($data['redis_ssl']);
        }
        if (\array_key_exists('redis_timeout', $data)) {
            $object->setRedisTimeout($data['redis_timeout']);
            unset($data['redis_timeout']);
        }
        if (\array_key_exists('redis_notify_keyspace_events', $data)) {
            $object->setRedisNotifyKeyspaceEvents($data['redis_notify_keyspace_events']);
            unset($data['redis_notify_keyspace_events']);
        }
        if (\array_key_exists('redis_persistence', $data)) {
            $object->setRedisPersistence($data['redis_persistence']);
            unset($data['redis_persistence']);
        }
        if (\array_key_exists('redis_acl_channels_default', $data)) {
            $object->setRedisAclChannelsDefault($data['redis_acl_channels_default']);
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
        if ($data->isInitialized('redisMaxmemoryPolicy') && null !== $data->getRedisMaxmemoryPolicy()) {
            $dataArray['redis_maxmemory_policy'] = $data->getRedisMaxmemoryPolicy();
        }
        if ($data->isInitialized('redisPubsubClientOutputBufferLimit') && null !== $data->getRedisPubsubClientOutputBufferLimit()) {
            $dataArray['redis_pubsub_client_output_buffer_limit'] = $data->getRedisPubsubClientOutputBufferLimit();
        }
        if ($data->isInitialized('redisNumberOfDatabases') && null !== $data->getRedisNumberOfDatabases()) {
            $dataArray['redis_number_of_databases'] = $data->getRedisNumberOfDatabases();
        }
        if ($data->isInitialized('redisIoThreads') && null !== $data->getRedisIoThreads()) {
            $dataArray['redis_io_threads'] = $data->getRedisIoThreads();
        }
        if ($data->isInitialized('redisLfuLogFactor') && null !== $data->getRedisLfuLogFactor()) {
            $dataArray['redis_lfu_log_factor'] = $data->getRedisLfuLogFactor();
        }
        if ($data->isInitialized('redisLfuDecayTime') && null !== $data->getRedisLfuDecayTime()) {
            $dataArray['redis_lfu_decay_time'] = $data->getRedisLfuDecayTime();
        }
        if ($data->isInitialized('redisSsl') && null !== $data->getRedisSsl()) {
            $dataArray['redis_ssl'] = $data->getRedisSsl();
        }
        if ($data->isInitialized('redisTimeout') && null !== $data->getRedisTimeout()) {
            $dataArray['redis_timeout'] = $data->getRedisTimeout();
        }
        if ($data->isInitialized('redisNotifyKeyspaceEvents') && null !== $data->getRedisNotifyKeyspaceEvents()) {
            $dataArray['redis_notify_keyspace_events'] = $data->getRedisNotifyKeyspaceEvents();
        }
        if ($data->isInitialized('redisPersistence') && null !== $data->getRedisPersistence()) {
            $dataArray['redis_persistence'] = $data->getRedisPersistence();
        }
        if ($data->isInitialized('redisAclChannelsDefault') && null !== $data->getRedisAclChannelsDefault()) {
            $dataArray['redis_acl_channels_default'] = $data->getRedisAclChannelsDefault();
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