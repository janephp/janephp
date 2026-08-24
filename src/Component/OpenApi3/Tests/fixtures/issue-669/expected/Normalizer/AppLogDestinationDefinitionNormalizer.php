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
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('papertrail', $data)) {
            $object->setPapertrail($this->denormalizer->denormalize($data['papertrail'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationPapertrailSpec::class, 'json', $context));
            unset($data['papertrail']);
        }
        if (\array_key_exists('datadog', $data)) {
            $object->setDatadog($this->denormalizer->denormalize($data['datadog'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationDatadogSpec::class, 'json', $context));
            unset($data['datadog']);
        }
        if (\array_key_exists('logtail', $data)) {
            $object->setLogtail($this->denormalizer->denormalize($data['logtail'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationLogtailSpec::class, 'json', $context));
            unset($data['logtail']);
        }
        if (\array_key_exists('open_search', $data)) {
            $object->setOpenSearch($this->denormalizer->denormalize($data['open_search'], \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class, 'json', $context));
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
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('papertrail') && null !== $data->getPapertrail()) {
            $dataArray['papertrail'] = $data->getPapertrail() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPapertrail(), 'json', $context));
        }
        if ($data->isInitialized('datadog') && null !== $data->getDatadog()) {
            $dataArray['datadog'] = $data->getDatadog() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getDatadog(), 'json', $context));
        }
        if ($data->isInitialized('logtail') && null !== $data->getLogtail()) {
            $dataArray['logtail'] = $data->getLogtail() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getLogtail(), 'json', $context));
        }
        if ($data->isInitialized('openSearch') && null !== $data->getOpenSearch()) {
            $dataArray['open_search'] = $data->getOpenSearch() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getOpenSearch(), 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class => false];
    }
}