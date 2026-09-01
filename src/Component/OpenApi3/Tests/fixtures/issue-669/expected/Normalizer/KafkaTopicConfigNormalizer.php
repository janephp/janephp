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
            $data['min_cleanable_dirty_ratio'] = (float) $data['min_cleanable_dirty_ratio'];
        }
        if (\array_key_exists('message_down_conversion_enable', $data) && \is_int($data['message_down_conversion_enable'])) {
            $data['message_down_conversion_enable'] = (bool) $data['message_down_conversion_enable'];
        }
        if (\array_key_exists('preallocate', $data) && \is_int($data['preallocate'])) {
            $data['preallocate'] = (bool) $data['preallocate'];
        }
        if (\array_key_exists('cleanup_policy', $data)) {
            $object->cleanupPolicy = $data['cleanup_policy'];
            unset($data['cleanup_policy']);
        }
        if (\array_key_exists('compression_type', $data)) {
            $object->compressionType = $data['compression_type'];
            unset($data['compression_type']);
        }
        if (\array_key_exists('delete_retention_ms', $data)) {
            $object->deleteRetentionMs = $data['delete_retention_ms'];
            unset($data['delete_retention_ms']);
        }
        if (\array_key_exists('file_delete_delay_ms', $data)) {
            $object->fileDeleteDelayMs = $data['file_delete_delay_ms'];
            unset($data['file_delete_delay_ms']);
        }
        if (\array_key_exists('flush_messages', $data)) {
            $object->flushMessages = $data['flush_messages'];
            unset($data['flush_messages']);
        }
        if (\array_key_exists('flush_ms', $data)) {
            $object->flushMs = $data['flush_ms'];
            unset($data['flush_ms']);
        }
        if (\array_key_exists('index_interval_bytes', $data)) {
            $object->indexIntervalBytes = $data['index_interval_bytes'];
            unset($data['index_interval_bytes']);
        }
        if (\array_key_exists('max_compaction_lag_ms', $data)) {
            $object->maxCompactionLagMs = $data['max_compaction_lag_ms'];
            unset($data['max_compaction_lag_ms']);
        }
        if (\array_key_exists('max_message_bytes', $data)) {
            $object->maxMessageBytes = $data['max_message_bytes'];
            unset($data['max_message_bytes']);
        }
        if (\array_key_exists('message_down_conversion_enable', $data)) {
            $object->messageDownConversionEnable = $data['message_down_conversion_enable'];
            unset($data['message_down_conversion_enable']);
        }
        if (\array_key_exists('message_format_version', $data)) {
            $object->messageFormatVersion = $data['message_format_version'];
            unset($data['message_format_version']);
        }
        if (\array_key_exists('message_timestamp_type', $data)) {
            $object->messageTimestampType = $data['message_timestamp_type'];
            unset($data['message_timestamp_type']);
        }
        if (\array_key_exists('min_cleanable_dirty_ratio', $data)) {
            $object->minCleanableDirtyRatio = $data['min_cleanable_dirty_ratio'];
            unset($data['min_cleanable_dirty_ratio']);
        }
        if (\array_key_exists('min_compaction_lag_ms', $data)) {
            $object->minCompactionLagMs = $data['min_compaction_lag_ms'];
            unset($data['min_compaction_lag_ms']);
        }
        if (\array_key_exists('min_insync_replicas', $data)) {
            $object->minInsyncReplicas = $data['min_insync_replicas'];
            unset($data['min_insync_replicas']);
        }
        if (\array_key_exists('preallocate', $data)) {
            $object->preallocate = $data['preallocate'];
            unset($data['preallocate']);
        }
        if (\array_key_exists('retention_bytes', $data)) {
            $object->retentionBytes = $data['retention_bytes'];
            unset($data['retention_bytes']);
        }
        if (\array_key_exists('retention_ms', $data)) {
            $object->retentionMs = $data['retention_ms'];
            unset($data['retention_ms']);
        }
        if (\array_key_exists('segment_bytes', $data)) {
            $object->segmentBytes = $data['segment_bytes'];
            unset($data['segment_bytes']);
        }
        if (\array_key_exists('segment_jitter_ms', $data)) {
            $object->segmentJitterMs = $data['segment_jitter_ms'];
            unset($data['segment_jitter_ms']);
        }
        if (\array_key_exists('segment_ms', $data)) {
            $object->segmentMs = $data['segment_ms'];
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
        if (array_key_exists('cleanupPolicy', get_object_vars($data)) && null !== ($data->cleanupPolicy ?? null)) {
            $dataArray['cleanup_policy'] = $data->cleanupPolicy ?? null;
        }
        if (array_key_exists('compressionType', get_object_vars($data)) && null !== ($data->compressionType ?? null)) {
            $dataArray['compression_type'] = $data->compressionType ?? null;
        }
        if (array_key_exists('deleteRetentionMs', get_object_vars($data)) && null !== ($data->deleteRetentionMs ?? null)) {
            $dataArray['delete_retention_ms'] = $data->deleteRetentionMs ?? null;
        }
        if (array_key_exists('fileDeleteDelayMs', get_object_vars($data)) && null !== ($data->fileDeleteDelayMs ?? null)) {
            $dataArray['file_delete_delay_ms'] = $data->fileDeleteDelayMs ?? null;
        }
        if (array_key_exists('flushMessages', get_object_vars($data)) && null !== ($data->flushMessages ?? null)) {
            $dataArray['flush_messages'] = $data->flushMessages ?? null;
        }
        if (array_key_exists('flushMs', get_object_vars($data)) && null !== ($data->flushMs ?? null)) {
            $dataArray['flush_ms'] = $data->flushMs ?? null;
        }
        if (array_key_exists('indexIntervalBytes', get_object_vars($data)) && null !== ($data->indexIntervalBytes ?? null)) {
            $dataArray['index_interval_bytes'] = $data->indexIntervalBytes ?? null;
        }
        if (array_key_exists('maxCompactionLagMs', get_object_vars($data)) && null !== ($data->maxCompactionLagMs ?? null)) {
            $dataArray['max_compaction_lag_ms'] = $data->maxCompactionLagMs ?? null;
        }
        if (array_key_exists('maxMessageBytes', get_object_vars($data)) && null !== ($data->maxMessageBytes ?? null)) {
            $dataArray['max_message_bytes'] = $data->maxMessageBytes ?? null;
        }
        if (array_key_exists('messageDownConversionEnable', get_object_vars($data)) && null !== ($data->messageDownConversionEnable ?? null)) {
            $dataArray['message_down_conversion_enable'] = $data->messageDownConversionEnable ?? null;
        }
        if (array_key_exists('messageFormatVersion', get_object_vars($data)) && null !== ($data->messageFormatVersion ?? null)) {
            $dataArray['message_format_version'] = $data->messageFormatVersion ?? null;
        }
        if (array_key_exists('messageTimestampType', get_object_vars($data)) && null !== ($data->messageTimestampType ?? null)) {
            $dataArray['message_timestamp_type'] = $data->messageTimestampType ?? null;
        }
        if (array_key_exists('minCleanableDirtyRatio', get_object_vars($data)) && null !== ($data->minCleanableDirtyRatio ?? null)) {
            $dataArray['min_cleanable_dirty_ratio'] = $data->minCleanableDirtyRatio ?? null;
        }
        if (array_key_exists('minCompactionLagMs', get_object_vars($data)) && null !== ($data->minCompactionLagMs ?? null)) {
            $dataArray['min_compaction_lag_ms'] = $data->minCompactionLagMs ?? null;
        }
        if (array_key_exists('minInsyncReplicas', get_object_vars($data)) && null !== ($data->minInsyncReplicas ?? null)) {
            $dataArray['min_insync_replicas'] = $data->minInsyncReplicas ?? null;
        }
        if (array_key_exists('preallocate', get_object_vars($data)) && null !== ($data->preallocate ?? null)) {
            $dataArray['preallocate'] = $data->preallocate ?? null;
        }
        if (array_key_exists('retentionBytes', get_object_vars($data)) && null !== ($data->retentionBytes ?? null)) {
            $dataArray['retention_bytes'] = $data->retentionBytes ?? null;
        }
        if (array_key_exists('retentionMs', get_object_vars($data)) && null !== ($data->retentionMs ?? null)) {
            $dataArray['retention_ms'] = $data->retentionMs ?? null;
        }
        if (array_key_exists('segmentBytes', get_object_vars($data)) && null !== ($data->segmentBytes ?? null)) {
            $dataArray['segment_bytes'] = $data->segmentBytes ?? null;
        }
        if (array_key_exists('segmentJitterMs', get_object_vars($data)) && null !== ($data->segmentJitterMs ?? null)) {
            $dataArray['segment_jitter_ms'] = $data->segmentJitterMs ?? null;
        }
        if (array_key_exists('segmentMs', get_object_vars($data)) && null !== ($data->segmentMs ?? null)) {
            $dataArray['segment_ms'] = $data->segmentMs ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class => false];
    }
}