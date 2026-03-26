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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AppInstance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('component_name', $data)) {
            $object->setComponentName($data['component_name']);
            unset($data['component_name']);
        }
        if (\array_key_exists('component_type', $data)) {
            $object->setComponentType($data['component_type']);
            unset($data['component_type']);
        }
        if (\array_key_exists('instance_name', $data)) {
            $object->setInstanceName($data['instance_name']);
            unset($data['instance_name']);
        }
        if (\array_key_exists('instance_alias', $data)) {
            $object->setInstanceAlias($data['instance_alias']);
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
        if ($data->isInitialized('componentName') && null !== $data->getComponentName()) {
            $dataArray['component_name'] = $data->getComponentName();
        }
        if ($data->isInitialized('componentType') && null !== $data->getComponentType()) {
            $dataArray['component_type'] = $data->getComponentType();
        }
        if ($data->isInitialized('instanceName') && null !== $data->getInstanceName()) {
            $dataArray['instance_name'] = $data->getInstanceName();
        }
        if ($data->isInitialized('instanceAlias') && null !== $data->getInstanceAlias()) {
            $dataArray['instance_alias'] = $data->getInstanceAlias();
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
        return [\Jane\Generated\DigitalOcean\Model\AppInstance::class => false];
    }
}