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
class AppLogDestinationDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('papertrail', $data)) {
            $object->papertrail = $this->denormalizer->denormalize($data['papertrail'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationPapertrailSpec::class, 'json', $context);
            unset($data['papertrail']);
        }
        if (\array_key_exists('datadog', $data)) {
            $object->datadog = $this->denormalizer->denormalize($data['datadog'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationDatadogSpec::class, 'json', $context);
            unset($data['datadog']);
        }
        if (\array_key_exists('logtail', $data)) {
            $object->logtail = $this->denormalizer->denormalize($data['logtail'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationLogtailSpec::class, 'json', $context);
            unset($data['logtail']);
        }
        if (\array_key_exists('open_search', $data)) {
            $object->openSearch = $this->denormalizer->denormalize($data['open_search'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class, 'json', $context);
            unset($data['open_search']);
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
        $dataArray['name'] = $data->name;
        if (array_key_exists('papertrail', get_object_vars($data)) && null !== ($data->papertrail ?? null)) {
            $normalized = $this->normalizer->normalize($data->papertrail, 'json', $context);
            $dataArray['papertrail'] = \is_iterable($normalized) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('datadog', get_object_vars($data)) && null !== ($data->datadog ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->datadog, 'json', $context);
            $dataArray['datadog'] = \is_iterable($normalized_1) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('logtail', get_object_vars($data)) && null !== ($data->logtail ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->logtail, 'json', $context);
            $dataArray['logtail'] = \is_iterable($normalized_2) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('openSearch', get_object_vars($data)) && null !== ($data->openSearch ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->openSearch, 'json', $context);
            $dataArray['open_search'] = \is_iterable($normalized_3) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_3) : $normalized_3;
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
        return [\Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class => false];
    }
}