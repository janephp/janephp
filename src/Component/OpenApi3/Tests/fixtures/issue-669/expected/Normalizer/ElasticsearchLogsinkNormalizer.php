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
class ElasticsearchLogsinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink();
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
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('index_prefix', $data)) {
            $object->setIndexPrefix($data['index_prefix']);
            unset($data['index_prefix']);
        }
        if (\array_key_exists('index_days_max', $data)) {
            $object->setIndexDaysMax($data['index_days_max']);
            unset($data['index_days_max']);
        }
        if (\array_key_exists('timeout', $data)) {
            $object->setTimeout($data['timeout']);
            unset($data['timeout']);
        }
        if (\array_key_exists('ca', $data)) {
            $object->setCa($data['ca']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['index_prefix'] = $data->getIndexPrefix();
        if ($data->isInitialized('indexDaysMax') && null !== $data->getIndexDaysMax()) {
            $dataArray['index_days_max'] = $data->getIndexDaysMax();
        }
        if ($data->isInitialized('timeout') && null !== $data->getTimeout()) {
            $dataArray['timeout'] = $data->getTimeout();
        }
        if ($data->isInitialized('ca') && null !== $data->getCa()) {
            $dataArray['ca'] = $data->getCa();
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
        return [\Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class => false];
    }
}