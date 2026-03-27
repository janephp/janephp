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
class KafkaTopicConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('min_cleanable_dirty_ratio', $data) && \is_int($data['min_cleanable_dirty_ratio'])) {
            $data['min_cleanable_dirty_ratio'] = (double) $data['min_cleanable_dirty_ratio'];
        }
        if (\array_key_exists('message_down_conversion_enable', $data) && \is_int($data['message_down_conversion_enable'])) {
            $data['message_down_conversion_enable'] = (bool) $data['message_down_conversion_enable'];
        }
        if (\array_key_exists('preallocate', $data) && \is_int($data['preallocate'])) {
            $data['preallocate'] = (bool) $data['preallocate'];
        }
        if (\array_key_exists('cleanup_policy', $data)) {
            $object->setCleanupPolicy($data['cleanup_policy']);
            unset($data['cleanup_policy']);
        }
        if (\array_key_exists('compression_type', $data)) {
            $object->setCompressionType($data['compression_type']);
            unset($data['compression_type']);
        }
        if (\array_key_exists('delete_retention_ms', $data)) {
            $object->setDeleteRetentionMs($data['delete_retention_ms']);
            unset($data['delete_retention_ms']);
        }
        if (\array_key_exists('file_delete_delay_ms', $data)) {
            $object->setFileDeleteDelayMs($data['file_delete_delay_ms']);
            unset($data['file_delete_delay_ms']);
        }
        if (\array_key_exists('flush_messages', $data)) {
            $object->setFlushMessages($data['flush_messages']);
            unset($data['flush_messages']);
        }
        if (\array_key_exists('flush_ms', $data)) {
            $object->setFlushMs($data['flush_ms']);
            unset($data['flush_ms']);
        }
        if (\array_key_exists('index_interval_bytes', $data)) {
            $object->setIndexIntervalBytes($data['index_interval_bytes']);
            unset($data['index_interval_bytes']);
        }
        if (\array_key_exists('max_compaction_lag_ms', $data)) {
            $object->setMaxCompactionLagMs($data['max_compaction_lag_ms']);
            unset($data['max_compaction_lag_ms']);
        }
        if (\array_key_exists('max_message_bytes', $data)) {
            $object->setMaxMessageBytes($data['max_message_bytes']);
            unset($data['max_message_bytes']);
        }
        if (\array_key_exists('message_down_conversion_enable', $data)) {
            $object->setMessageDownConversionEnable($data['message_down_conversion_enable']);
            unset($data['message_down_conversion_enable']);
        }
        if (\array_key_exists('message_format_version', $data)) {
            $object->setMessageFormatVersion($data['message_format_version']);
            unset($data['message_format_version']);
        }
        if (\array_key_exists('message_timestamp_type', $data)) {
            $object->setMessageTimestampType($data['message_timestamp_type']);
            unset($data['message_timestamp_type']);
        }
        if (\array_key_exists('min_cleanable_dirty_ratio', $data)) {
            $object->setMinCleanableDirtyRatio($data['min_cleanable_dirty_ratio']);
            unset($data['min_cleanable_dirty_ratio']);
        }
        if (\array_key_exists('min_compaction_lag_ms', $data)) {
            $object->setMinCompactionLagMs($data['min_compaction_lag_ms']);
            unset($data['min_compaction_lag_ms']);
        }
        if (\array_key_exists('min_insync_replicas', $data)) {
            $object->setMinInsyncReplicas($data['min_insync_replicas']);
            unset($data['min_insync_replicas']);
        }
        if (\array_key_exists('preallocate', $data)) {
            $object->setPreallocate($data['preallocate']);
            unset($data['preallocate']);
        }
        if (\array_key_exists('retention_bytes', $data)) {
            $object->setRetentionBytes($data['retention_bytes']);
            unset($data['retention_bytes']);
        }
        if (\array_key_exists('retention_ms', $data)) {
            $object->setRetentionMs($data['retention_ms']);
            unset($data['retention_ms']);
        }
        if (\array_key_exists('segment_bytes', $data)) {
            $object->setSegmentBytes($data['segment_bytes']);
            unset($data['segment_bytes']);
        }
        if (\array_key_exists('segment_jitter_ms', $data)) {
            $object->setSegmentJitterMs($data['segment_jitter_ms']);
            unset($data['segment_jitter_ms']);
        }
        if (\array_key_exists('segment_ms', $data)) {
            $object->setSegmentMs($data['segment_ms']);
            unset($data['segment_ms']);
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
        if ($data->isInitialized('cleanupPolicy') && null !== $data->getCleanupPolicy()) {
            $dataArray['cleanup_policy'] = $data->getCleanupPolicy();
        }
        if ($data->isInitialized('compressionType') && null !== $data->getCompressionType()) {
            $dataArray['compression_type'] = $data->getCompressionType();
        }
        if ($data->isInitialized('deleteRetentionMs') && null !== $data->getDeleteRetentionMs()) {
            $dataArray['delete_retention_ms'] = $data->getDeleteRetentionMs();
        }
        if ($data->isInitialized('fileDeleteDelayMs') && null !== $data->getFileDeleteDelayMs()) {
            $dataArray['file_delete_delay_ms'] = $data->getFileDeleteDelayMs();
        }
        if ($data->isInitialized('flushMessages') && null !== $data->getFlushMessages()) {
            $dataArray['flush_messages'] = $data->getFlushMessages();
        }
        if ($data->isInitialized('flushMs') && null !== $data->getFlushMs()) {
            $dataArray['flush_ms'] = $data->getFlushMs();
        }
        if ($data->isInitialized('indexIntervalBytes') && null !== $data->getIndexIntervalBytes()) {
            $dataArray['index_interval_bytes'] = $data->getIndexIntervalBytes();
        }
        if ($data->isInitialized('maxCompactionLagMs') && null !== $data->getMaxCompactionLagMs()) {
            $dataArray['max_compaction_lag_ms'] = $data->getMaxCompactionLagMs();
        }
        if ($data->isInitialized('maxMessageBytes') && null !== $data->getMaxMessageBytes()) {
            $dataArray['max_message_bytes'] = $data->getMaxMessageBytes();
        }
        if ($data->isInitialized('messageDownConversionEnable') && null !== $data->getMessageDownConversionEnable()) {
            $dataArray['message_down_conversion_enable'] = $data->getMessageDownConversionEnable();
        }
        if ($data->isInitialized('messageFormatVersion') && null !== $data->getMessageFormatVersion()) {
            $dataArray['message_format_version'] = $data->getMessageFormatVersion();
        }
        if ($data->isInitialized('messageTimestampType') && null !== $data->getMessageTimestampType()) {
            $dataArray['message_timestamp_type'] = $data->getMessageTimestampType();
        }
        if ($data->isInitialized('minCleanableDirtyRatio') && null !== $data->getMinCleanableDirtyRatio()) {
            $dataArray['min_cleanable_dirty_ratio'] = $data->getMinCleanableDirtyRatio();
        }
        if ($data->isInitialized('minCompactionLagMs') && null !== $data->getMinCompactionLagMs()) {
            $dataArray['min_compaction_lag_ms'] = $data->getMinCompactionLagMs();
        }
        if ($data->isInitialized('minInsyncReplicas') && null !== $data->getMinInsyncReplicas()) {
            $dataArray['min_insync_replicas'] = $data->getMinInsyncReplicas();
        }
        if ($data->isInitialized('preallocate') && null !== $data->getPreallocate()) {
            $dataArray['preallocate'] = $data->getPreallocate();
        }
        if ($data->isInitialized('retentionBytes') && null !== $data->getRetentionBytes()) {
            $dataArray['retention_bytes'] = $data->getRetentionBytes();
        }
        if ($data->isInitialized('retentionMs') && null !== $data->getRetentionMs()) {
            $dataArray['retention_ms'] = $data->getRetentionMs();
        }
        if ($data->isInitialized('segmentBytes') && null !== $data->getSegmentBytes()) {
            $dataArray['segment_bytes'] = $data->getSegmentBytes();
        }
        if ($data->isInitialized('segmentJitterMs') && null !== $data->getSegmentJitterMs()) {
            $dataArray['segment_jitter_ms'] = $data->getSegmentJitterMs();
        }
        if ($data->isInitialized('segmentMs') && null !== $data->getSegmentMs()) {
            $dataArray['segment_ms'] = $data->getSegmentMs();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class => false];
    }
}