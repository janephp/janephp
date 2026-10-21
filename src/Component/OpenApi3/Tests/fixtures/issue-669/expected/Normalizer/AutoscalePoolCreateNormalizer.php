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
class AutoscalePoolCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!\array_key_exists('name', $data)) {
            throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\MissingRequiredPropertyException('name', \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (!\array_key_exists('config', $data)) {
            throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\MissingRequiredPropertyException('config', \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class);
        }
        if (\array_key_exists('config', $data)) {
            $value = $data['config'];
            if (is_array($data['config']) and \array_key_exists('target_number_instances', $data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\AutoscalePoolStaticConfig::class, 'json', $context);
            } elseif (is_array($data['config']) and \array_key_exists('min_instances', $data['config']) and \array_key_exists('max_instances', $data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class, 'json', $context);
            }
            $object->config = $value;
            unset($data['config']);
        }
        if (!\array_key_exists('droplet_template', $data)) {
            throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\MissingRequiredPropertyException('droplet_template', \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class);
        }
        if (\array_key_exists('droplet_template', $data)) {
            $object->dropletTemplate = $this->denormalizer->denormalize($data['droplet_template'], \Jane\Generated\DigitalOcean\Model\AutoscalePoolDropletTemplate::class, 'json', $context);
            unset($data['droplet_template']);
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
        $dataArray['name'] = $data->name;
        $value = $data->config;
        if (is_object($data->config)) {
            $normalized = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized) : $normalized;
        } elseif (is_object($data->config)) {
            $normalized_1 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_1) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['config'] = $value;
        $normalized_2 = $data->dropletTemplate === null ? null : $this->normalizer->normalize($data->dropletTemplate, 'json', $context);
        $dataArray['droplet_template'] = \is_iterable($normalized_2) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_2) : $normalized_2;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class => false];
    }
}