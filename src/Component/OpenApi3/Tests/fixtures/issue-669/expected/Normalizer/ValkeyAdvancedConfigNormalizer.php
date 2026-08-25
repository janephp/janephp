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
class ValkeyAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('valkey_ssl', $data) && \is_int($data['valkey_ssl'])) {
            $data['valkey_ssl'] = (bool) $data['valkey_ssl'];
        }
        if (\array_key_exists('frequent_snapshots', $data) && \is_int($data['frequent_snapshots'])) {
            $data['frequent_snapshots'] = (bool) $data['frequent_snapshots'];
        }
        if (\array_key_exists('valkey_maxmemory_policy', $data)) {
            $object->setValkeyMaxmemoryPolicy($data['valkey_maxmemory_policy']);
            unset($data['valkey_maxmemory_policy']);
        }
        if (\array_key_exists('valkey_pubsub_client_output_buffer_limit', $data)) {
            $object->setValkeyPubsubClientOutputBufferLimit($data['valkey_pubsub_client_output_buffer_limit']);
            unset($data['valkey_pubsub_client_output_buffer_limit']);
        }
        if (\array_key_exists('valkey_number_of_databases', $data)) {
            $object->setValkeyNumberOfDatabases($data['valkey_number_of_databases']);
            unset($data['valkey_number_of_databases']);
        }
        if (\array_key_exists('valkey_io_threads', $data)) {
            $object->setValkeyIoThreads($data['valkey_io_threads']);
            unset($data['valkey_io_threads']);
        }
        if (\array_key_exists('valkey_lfu_log_factor', $data)) {
            $object->setValkeyLfuLogFactor($data['valkey_lfu_log_factor']);
            unset($data['valkey_lfu_log_factor']);
        }
        if (\array_key_exists('valkey_lfu_decay_time', $data)) {
            $object->setValkeyLfuDecayTime($data['valkey_lfu_decay_time']);
            unset($data['valkey_lfu_decay_time']);
        }
        if (\array_key_exists('valkey_ssl', $data)) {
            $object->setValkeySsl($data['valkey_ssl']);
            unset($data['valkey_ssl']);
        }
        if (\array_key_exists('valkey_timeout', $data)) {
            $object->setValkeyTimeout($data['valkey_timeout']);
            unset($data['valkey_timeout']);
        }
        if (\array_key_exists('valkey_notify_keyspace_events', $data)) {
            $object->setValkeyNotifyKeyspaceEvents($data['valkey_notify_keyspace_events']);
            unset($data['valkey_notify_keyspace_events']);
        }
        if (\array_key_exists('valkey_persistence', $data)) {
            $object->setValkeyPersistence($data['valkey_persistence']);
            unset($data['valkey_persistence']);
        }
        if (\array_key_exists('valkey_acl_channels_default', $data)) {
            $object->setValkeyAclChannelsDefault($data['valkey_acl_channels_default']);
            unset($data['valkey_acl_channels_default']);
        }
        if (\array_key_exists('frequent_snapshots', $data)) {
            $object->setFrequentSnapshots($data['frequent_snapshots']);
            unset($data['frequent_snapshots']);
        }
        if (\array_key_exists('valkey_active_expire_effort', $data)) {
            $object->setValkeyActiveExpireEffort($data['valkey_active_expire_effort']);
            unset($data['valkey_active_expire_effort']);
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
        if ($data->isInitialized('valkeyMaxmemoryPolicy') && null !== $data->getValkeyMaxmemoryPolicy()) {
            $dataArray['valkey_maxmemory_policy'] = $data->getValkeyMaxmemoryPolicy();
        }
        if ($data->isInitialized('valkeyPubsubClientOutputBufferLimit') && null !== $data->getValkeyPubsubClientOutputBufferLimit()) {
            $dataArray['valkey_pubsub_client_output_buffer_limit'] = $data->getValkeyPubsubClientOutputBufferLimit();
        }
        if ($data->isInitialized('valkeyNumberOfDatabases') && null !== $data->getValkeyNumberOfDatabases()) {
            $dataArray['valkey_number_of_databases'] = $data->getValkeyNumberOfDatabases();
        }
        if ($data->isInitialized('valkeyIoThreads') && null !== $data->getValkeyIoThreads()) {
            $dataArray['valkey_io_threads'] = $data->getValkeyIoThreads();
        }
        if ($data->isInitialized('valkeyLfuLogFactor') && null !== $data->getValkeyLfuLogFactor()) {
            $dataArray['valkey_lfu_log_factor'] = $data->getValkeyLfuLogFactor();
        }
        if ($data->isInitialized('valkeyLfuDecayTime') && null !== $data->getValkeyLfuDecayTime()) {
            $dataArray['valkey_lfu_decay_time'] = $data->getValkeyLfuDecayTime();
        }
        if ($data->isInitialized('valkeySsl') && null !== $data->getValkeySsl()) {
            $dataArray['valkey_ssl'] = $data->getValkeySsl();
        }
        if ($data->isInitialized('valkeyTimeout') && null !== $data->getValkeyTimeout()) {
            $dataArray['valkey_timeout'] = $data->getValkeyTimeout();
        }
        if ($data->isInitialized('valkeyNotifyKeyspaceEvents') && null !== $data->getValkeyNotifyKeyspaceEvents()) {
            $dataArray['valkey_notify_keyspace_events'] = $data->getValkeyNotifyKeyspaceEvents();
        }
        if ($data->isInitialized('valkeyPersistence') && null !== $data->getValkeyPersistence()) {
            $dataArray['valkey_persistence'] = $data->getValkeyPersistence();
        }
        if ($data->isInitialized('valkeyAclChannelsDefault') && null !== $data->getValkeyAclChannelsDefault()) {
            $dataArray['valkey_acl_channels_default'] = $data->getValkeyAclChannelsDefault();
        }
        if ($data->isInitialized('frequentSnapshots') && null !== $data->getFrequentSnapshots()) {
            $dataArray['frequent_snapshots'] = $data->getFrequentSnapshots();
        }
        if ($data->isInitialized('valkeyActiveExpireEffort') && null !== $data->getValkeyActiveExpireEffort()) {
            $dataArray['valkey_active_expire_effort'] = $data->getValkeyActiveExpireEffort();
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
        return [\Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class => false];
    }
}