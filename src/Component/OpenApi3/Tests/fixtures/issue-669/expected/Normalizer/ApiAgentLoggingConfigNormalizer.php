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
class ApiAgentLoggingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('insights_enabled', $data) && \is_int($data['insights_enabled'])) {
            $data['insights_enabled'] = (bool) $data['insights_enabled'];
        }
        if (\array_key_exists('galileo_project_id', $data)) {
            $object->galileoProjectId = $data['galileo_project_id'];
            unset($data['galileo_project_id']);
        }
        if (\array_key_exists('galileo_project_name', $data)) {
            $object->galileoProjectName = $data['galileo_project_name'];
            unset($data['galileo_project_name']);
        }
        if (\array_key_exists('insights_enabled', $data)) {
            $object->insightsEnabled = $data['insights_enabled'];
            unset($data['insights_enabled']);
        }
        if (\array_key_exists('insights_enabled_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['insights_enabled_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['insights_enabled_at'], 'Y-m-d\TH:i:sP');
            }
            $object->insightsEnabledAt = $date;
            unset($data['insights_enabled_at']);
        }
        if (\array_key_exists('log_stream_id', $data)) {
            $object->logStreamId = $data['log_stream_id'];
            unset($data['log_stream_id']);
        }
        if (\array_key_exists('log_stream_name', $data)) {
            $object->logStreamName = $data['log_stream_name'];
            unset($data['log_stream_name']);
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
        if (array_key_exists('galileoProjectId', get_object_vars($data)) && null !== ($data->galileoProjectId ?? null)) {
            $dataArray['galileo_project_id'] = $data->galileoProjectId ?? null;
        }
        if (array_key_exists('galileoProjectName', get_object_vars($data)) && null !== ($data->galileoProjectName ?? null)) {
            $dataArray['galileo_project_name'] = $data->galileoProjectName ?? null;
        }
        if (array_key_exists('insightsEnabled', get_object_vars($data)) && null !== ($data->insightsEnabled ?? null)) {
            $dataArray['insights_enabled'] = $data->insightsEnabled ?? null;
        }
        if (array_key_exists('insightsEnabledAt', get_object_vars($data)) && null !== ($data->insightsEnabledAt ?? null)) {
            $dataArray['insights_enabled_at'] = ($data->insightsEnabledAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('logStreamId', get_object_vars($data)) && null !== ($data->logStreamId ?? null)) {
            $dataArray['log_stream_id'] = $data->logStreamId ?? null;
        }
        if (array_key_exists('logStreamName', get_object_vars($data)) && null !== ($data->logStreamName ?? null)) {
            $dataArray['log_stream_name'] = $data->logStreamName ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class => false];
    }
}