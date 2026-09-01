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
class OpensearchLogsinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchLogsink();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('timeout', $data) && \is_int($data['timeout'])) {
            $data['timeout'] = (float) $data['timeout'];
        }
        if (\array_key_exists('url', $data)) {
            $object->url = $data['url'];
            unset($data['url']);
        }
        if (\array_key_exists('index_prefix', $data)) {
            $object->indexPrefix = $data['index_prefix'];
            unset($data['index_prefix']);
        }
        if (\array_key_exists('index_days_max', $data)) {
            $object->indexDaysMax = $data['index_days_max'];
            unset($data['index_days_max']);
        }
        if (\array_key_exists('timeout', $data)) {
            $object->timeout = $data['timeout'];
            unset($data['timeout']);
        }
        if (\array_key_exists('ca', $data)) {
            $object->ca = $data['ca'];
            unset($data['ca']);
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
        $dataArray['url'] = $data->url ?? null;
        $dataArray['index_prefix'] = $data->indexPrefix ?? null;
        if (array_key_exists('indexDaysMax', get_object_vars($data)) && null !== ($data->indexDaysMax ?? null)) {
            $dataArray['index_days_max'] = $data->indexDaysMax ?? null;
        }
        if (array_key_exists('timeout', get_object_vars($data)) && null !== ($data->timeout ?? null)) {
            $dataArray['timeout'] = $data->timeout ?? null;
        }
        if (array_key_exists('ca', get_object_vars($data)) && null !== ($data->ca ?? null)) {
            $dataArray['ca'] = $data->ca ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class => false];
    }
}