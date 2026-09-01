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
class AppInstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppInstance::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppInstance::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppInstance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('component_name', $data)) {
            $object->componentName = $data['component_name'];
            unset($data['component_name']);
        }
        if (\array_key_exists('component_type', $data)) {
            $object->componentType = $data['component_type'];
            unset($data['component_type']);
        }
        if (\array_key_exists('instance_name', $data)) {
            $object->instanceName = $data['instance_name'];
            unset($data['instance_name']);
        }
        if (\array_key_exists('instance_alias', $data)) {
            $object->instanceAlias = $data['instance_alias'];
            unset($data['instance_alias']);
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
        if (array_key_exists('componentName', get_object_vars($data)) && null !== ($data->componentName ?? null)) {
            $dataArray['component_name'] = $data->componentName ?? null;
        }
        if (array_key_exists('componentType', get_object_vars($data)) && null !== ($data->componentType ?? null)) {
            $dataArray['component_type'] = $data->componentType ?? null;
        }
        if (array_key_exists('instanceName', get_object_vars($data)) && null !== ($data->instanceName ?? null)) {
            $dataArray['instance_name'] = $data->instanceName ?? null;
        }
        if (array_key_exists('instanceAlias', get_object_vars($data)) && null !== ($data->instanceAlias ?? null)) {
            $dataArray['instance_alias'] = $data->instanceAlias ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppInstance::class => false];
    }
}