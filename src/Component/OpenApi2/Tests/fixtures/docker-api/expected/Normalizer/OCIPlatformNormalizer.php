<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OCIPlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\OCIPlatform::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\OCIPlatform::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\OCIPlatform();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\OCIPlatformConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('architecture', $data)) {
            $object->setArchitecture($data['architecture']);
        }
        if (\array_key_exists('os', $data)) {
            $object->setOs($data['os']);
        }
        if (\array_key_exists('os.version', $data)) {
            $object->setOsVersion($data['os.version']);
        }
        if (\array_key_exists('os.features', $data)) {
            $values = [];
            foreach ($data['os.features'] as $value) {
                $values[] = $value;
            }
            $object->setOsFeatures($values);
        }
        if (\array_key_exists('variant', $data)) {
            $object->setVariant($data['variant']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('os') && null !== $data->getOs()) {
            $dataArray['os'] = $data->getOs();
        }
        if ($data->isInitialized('osVersion') && null !== $data->getOsVersion()) {
            $dataArray['os.version'] = $data->getOsVersion();
        }
        if ($data->isInitialized('osFeatures') && null !== $data->getOsFeatures()) {
            $values = [];
            foreach ($data->getOsFeatures() as $value) {
                $values[] = $value;
            }
            $dataArray['os.features'] = $values;
        }
        if ($data->isInitialized('variant') && null !== $data->getVariant()) {
            $dataArray['variant'] = $data->getVariant();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\OCIPlatformConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\OCIPlatform::class => false];
    }
}