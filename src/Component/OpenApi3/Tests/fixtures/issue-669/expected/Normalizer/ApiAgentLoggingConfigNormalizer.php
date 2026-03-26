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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig();
        if (\array_key_exists('insights_enabled', $data) && \is_int($data['insights_enabled'])) {
            $data['insights_enabled'] = (bool) $data['insights_enabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('galileo_project_id', $data)) {
            $object->setGalileoProjectId($data['galileo_project_id']);
            unset($data['galileo_project_id']);
        }
        if (\array_key_exists('galileo_project_name', $data)) {
            $object->setGalileoProjectName($data['galileo_project_name']);
            unset($data['galileo_project_name']);
        }
        if (\array_key_exists('insights_enabled', $data)) {
            $object->setInsightsEnabled($data['insights_enabled']);
            unset($data['insights_enabled']);
        }
        if (\array_key_exists('insights_enabled_at', $data)) {
            $object->setInsightsEnabledAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['insights_enabled_at']));
            unset($data['insights_enabled_at']);
        }
        if (\array_key_exists('log_stream_id', $data)) {
            $object->setLogStreamId($data['log_stream_id']);
            unset($data['log_stream_id']);
        }
        if (\array_key_exists('log_stream_name', $data)) {
            $object->setLogStreamName($data['log_stream_name']);
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
        if ($data->isInitialized('galileoProjectId') && null !== $data->getGalileoProjectId()) {
            $dataArray['galileo_project_id'] = $data->getGalileoProjectId();
        }
        if ($data->isInitialized('galileoProjectName') && null !== $data->getGalileoProjectName()) {
            $dataArray['galileo_project_name'] = $data->getGalileoProjectName();
        }
        if ($data->isInitialized('insightsEnabled') && null !== $data->getInsightsEnabled()) {
            $dataArray['insights_enabled'] = $data->getInsightsEnabled();
        }
        if ($data->isInitialized('insightsEnabledAt') && null !== $data->getInsightsEnabledAt()) {
            $dataArray['insights_enabled_at'] = $data->getInsightsEnabledAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('logStreamId') && null !== $data->getLogStreamId()) {
            $dataArray['log_stream_id'] = $data->getLogStreamId();
        }
        if ($data->isInitialized('logStreamName') && null !== $data->getLogStreamName()) {
            $dataArray['log_stream_name'] = $data->getLogStreamName();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class => false];
    }
}