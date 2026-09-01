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
            $object->valkeyMaxmemoryPolicy = $data['valkey_maxmemory_policy'];
            unset($data['valkey_maxmemory_policy']);
        }
        if (\array_key_exists('valkey_pubsub_client_output_buffer_limit', $data)) {
            $object->valkeyPubsubClientOutputBufferLimit = $data['valkey_pubsub_client_output_buffer_limit'];
            unset($data['valkey_pubsub_client_output_buffer_limit']);
        }
        if (\array_key_exists('valkey_number_of_databases', $data)) {
            $object->valkeyNumberOfDatabases = $data['valkey_number_of_databases'];
            unset($data['valkey_number_of_databases']);
        }
        if (\array_key_exists('valkey_io_threads', $data)) {
            $object->valkeyIoThreads = $data['valkey_io_threads'];
            unset($data['valkey_io_threads']);
        }
        if (\array_key_exists('valkey_lfu_log_factor', $data)) {
            $object->valkeyLfuLogFactor = $data['valkey_lfu_log_factor'];
            unset($data['valkey_lfu_log_factor']);
        }
        if (\array_key_exists('valkey_lfu_decay_time', $data)) {
            $object->valkeyLfuDecayTime = $data['valkey_lfu_decay_time'];
            unset($data['valkey_lfu_decay_time']);
        }
        if (\array_key_exists('valkey_ssl', $data)) {
            $object->valkeySsl = $data['valkey_ssl'];
            unset($data['valkey_ssl']);
        }
        if (\array_key_exists('valkey_timeout', $data)) {
            $object->valkeyTimeout = $data['valkey_timeout'];
            unset($data['valkey_timeout']);
        }
        if (\array_key_exists('valkey_notify_keyspace_events', $data)) {
            $object->valkeyNotifyKeyspaceEvents = $data['valkey_notify_keyspace_events'];
            unset($data['valkey_notify_keyspace_events']);
        }
        if (\array_key_exists('valkey_persistence', $data)) {
            $object->valkeyPersistence = $data['valkey_persistence'];
            unset($data['valkey_persistence']);
        }
        if (\array_key_exists('valkey_acl_channels_default', $data)) {
            $object->valkeyAclChannelsDefault = $data['valkey_acl_channels_default'];
            unset($data['valkey_acl_channels_default']);
        }
        if (\array_key_exists('frequent_snapshots', $data)) {
            $object->frequentSnapshots = $data['frequent_snapshots'];
            unset($data['frequent_snapshots']);
        }
        if (\array_key_exists('valkey_active_expire_effort', $data)) {
            $object->valkeyActiveExpireEffort = $data['valkey_active_expire_effort'];
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
        if (array_key_exists('valkeyMaxmemoryPolicy', get_object_vars($data)) && null !== ($data->valkeyMaxmemoryPolicy ?? null)) {
            $dataArray['valkey_maxmemory_policy'] = $data->valkeyMaxmemoryPolicy ?? null;
        }
        if (array_key_exists('valkeyPubsubClientOutputBufferLimit', get_object_vars($data)) && null !== ($data->valkeyPubsubClientOutputBufferLimit ?? null)) {
            $dataArray['valkey_pubsub_client_output_buffer_limit'] = $data->valkeyPubsubClientOutputBufferLimit ?? null;
        }
        if (array_key_exists('valkeyNumberOfDatabases', get_object_vars($data)) && null !== ($data->valkeyNumberOfDatabases ?? null)) {
            $dataArray['valkey_number_of_databases'] = $data->valkeyNumberOfDatabases ?? null;
        }
        if (array_key_exists('valkeyIoThreads', get_object_vars($data)) && null !== ($data->valkeyIoThreads ?? null)) {
            $dataArray['valkey_io_threads'] = $data->valkeyIoThreads ?? null;
        }
        if (array_key_exists('valkeyLfuLogFactor', get_object_vars($data)) && null !== ($data->valkeyLfuLogFactor ?? null)) {
            $dataArray['valkey_lfu_log_factor'] = $data->valkeyLfuLogFactor ?? null;
        }
        if (array_key_exists('valkeyLfuDecayTime', get_object_vars($data)) && null !== ($data->valkeyLfuDecayTime ?? null)) {
            $dataArray['valkey_lfu_decay_time'] = $data->valkeyLfuDecayTime ?? null;
        }
        if (array_key_exists('valkeySsl', get_object_vars($data)) && null !== ($data->valkeySsl ?? null)) {
            $dataArray['valkey_ssl'] = $data->valkeySsl ?? null;
        }
        if (array_key_exists('valkeyTimeout', get_object_vars($data)) && null !== ($data->valkeyTimeout ?? null)) {
            $dataArray['valkey_timeout'] = $data->valkeyTimeout ?? null;
        }
        if (array_key_exists('valkeyNotifyKeyspaceEvents', get_object_vars($data)) && null !== ($data->valkeyNotifyKeyspaceEvents ?? null)) {
            $dataArray['valkey_notify_keyspace_events'] = $data->valkeyNotifyKeyspaceEvents ?? null;
        }
        if (array_key_exists('valkeyPersistence', get_object_vars($data)) && null !== ($data->valkeyPersistence ?? null)) {
            $dataArray['valkey_persistence'] = $data->valkeyPersistence ?? null;
        }
        if (array_key_exists('valkeyAclChannelsDefault', get_object_vars($data)) && null !== ($data->valkeyAclChannelsDefault ?? null)) {
            $dataArray['valkey_acl_channels_default'] = $data->valkeyAclChannelsDefault ?? null;
        }
        if (array_key_exists('frequentSnapshots', get_object_vars($data)) && null !== ($data->frequentSnapshots ?? null)) {
            $dataArray['frequent_snapshots'] = $data->frequentSnapshots ?? null;
        }
        if (array_key_exists('valkeyActiveExpireEffort', get_object_vars($data)) && null !== ($data->valkeyActiveExpireEffort ?? null)) {
            $dataArray['valkey_active_expire_effort'] = $data->valkeyActiveExpireEffort ?? null;
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