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
class V2DatabasesDatabaseClusterUuidLogsinkPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sink_name', $data)) {
            $object->sinkName = $data['sink_name'];
            unset($data['sink_name']);
        }
        if (\array_key_exists('sink_type', $data)) {
            $object->sinkType = $data['sink_type'];
            unset($data['sink_type']);
        }
        if (\array_key_exists('config', $data)) {
            $value = $data['config'];
            if (is_array($data['config']) and \array_key_exists('server', $data['config']) and \array_key_exists('port', $data['config']) and \array_key_exists('tls', $data['config']) and (\array_key_exists('format', $data['config']) and ($data['config']['format'] == 'rfc5424' or $data['config']['format'] == 'rfc3164' or $data['config']['format'] == 'custom'))) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and \array_key_exists('url', $data['config']) and \array_key_exists('index_prefix', $data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and \array_key_exists('url', $data['config']) and \array_key_exists('index_prefix', $data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and \array_key_exists('site', $data['config']) and \array_key_exists('datadog_api_key', $data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\DatadogLogsink::class, 'json', $context);
            }
            $object->config = $value;
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
        if (array_key_exists('sinkName', get_object_vars($data)) && null !== ($data->sinkName ?? null)) {
            $dataArray['sink_name'] = $data->sinkName ?? null;
        }
        if (array_key_exists('sinkType', get_object_vars($data)) && null !== ($data->sinkType ?? null)) {
            $dataArray['sink_type'] = $data->sinkType ?? null;
        }
        if (array_key_exists('config', get_object_vars($data)) && null !== ($data->config ?? null)) {
            $value = $data->config ?? null;
            if (is_object($data->config ?? null)) {
                $value = ($data->config ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
            } elseif (is_object($data->config ?? null)) {
                $value = ($data->config ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
            } elseif (is_object($data->config ?? null)) {
                $value = ($data->config ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
            } elseif (is_object($data->config ?? null)) {
                $value = ($data->config ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->config ?? null, 'json', $context));
            }
            $dataArray['config'] = $value;
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
        return [\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody::class => false];
    }
}