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
class AppLogDestinationOpenSearchSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->endpoint = $data['endpoint'];
            unset($data['endpoint']);
        }
        if (\array_key_exists('basic_auth', $data)) {
            $object->basicAuth = $this->denormalizer->denormalize($data['basic_auth'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpecBasicAuth::class, 'json', $context);
            unset($data['basic_auth']);
        }
        if (\array_key_exists('index_name', $data)) {
            $object->indexName = $data['index_name'];
            unset($data['index_name']);
        }
        if (\array_key_exists('cluster_name', $data)) {
            $object->clusterName = $data['cluster_name'];
            unset($data['cluster_name']);
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
        if (array_key_exists('endpoint', get_object_vars($data)) && null !== ($data->endpoint ?? null)) {
            $dataArray['endpoint'] = $data->endpoint ?? null;
        }
        if (array_key_exists('basicAuth', get_object_vars($data)) && null !== ($data->basicAuth ?? null)) {
            $dataArray['basic_auth'] = ($data->basicAuth ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->basicAuth ?? null, 'json', $context));
        }
        if (array_key_exists('indexName', get_object_vars($data)) && null !== ($data->indexName ?? null)) {
            $dataArray['index_name'] = $data->indexName ?? null;
        }
        if (array_key_exists('clusterName', get_object_vars($data)) && null !== ($data->clusterName ?? null)) {
            $dataArray['cluster_name'] = $data->clusterName ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class => false];
    }
}