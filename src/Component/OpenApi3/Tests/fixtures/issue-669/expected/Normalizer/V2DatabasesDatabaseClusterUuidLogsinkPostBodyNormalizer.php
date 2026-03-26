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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sink_name', $data)) {
            $object->setSinkName($data['sink_name']);
            unset($data['sink_name']);
        }
        if (\array_key_exists('sink_type', $data)) {
            $object->setSinkType($data['sink_type']);
            unset($data['sink_type']);
        }
        if (\array_key_exists('config', $data)) {
            $value = $data['config'];
            if (is_array($data['config']) and isset($data['config']['server']) and isset($data['config']['port']) and isset($data['config']['tls']) and (isset($data['config']['format']) and ($data['config']['format'] == 'rfc5424' or $data['config']['format'] == 'rfc3164' or $data['config']['format'] == 'custom'))) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and isset($data['config']['url']) and isset($data['config']['index_prefix'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and isset($data['config']['url']) and isset($data['config']['index_prefix'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class, 'json', $context);
            } elseif (is_array($data['config']) and isset($data['config']['site']) and isset($data['config']['datadog_api_key'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\DatadogLogsink::class, 'json', $context);
            }
            $object->setConfig($value);
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
        if ($data->isInitialized('sinkName') && null !== $data->getSinkName()) {
            $dataArray['sink_name'] = $data->getSinkName();
        }
        if ($data->isInitialized('sinkType') && null !== $data->getSinkType()) {
            $dataArray['sink_type'] = $data->getSinkType();
        }
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $value = $data->getConfig();
            if (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            }
            $dataArray['config'] = $value;
        }
        foreach ($data as $key => $value_1) {
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