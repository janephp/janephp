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
        $object = new \Docker\Api\Model\OCIPlatform();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\OCIPlatformConstraint());
        }
        if (\array_key_exists('architecture', $data)) {
            $object->architecture = $data['architecture'];
        }
        if (\array_key_exists('os', $data)) {
            $object->os = $data['os'];
        }
        if (\array_key_exists('os.version', $data)) {
            $object->osVersion = $data['os.version'];
        }
        if (\array_key_exists('os.features', $data)) {
            $values = [];
            foreach ($data['os.features'] as $value) {
                $values[] = $value;
            }
            $object->osFeatures = $values;
        }
        if (\array_key_exists('variant', $data)) {
            $object->variant = $data['variant'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $dataArray['architecture'] = $data->architecture ?? null;
        }
        if (array_key_exists('os', get_object_vars($data)) && null !== ($data->os ?? null)) {
            $dataArray['os'] = $data->os ?? null;
        }
        if (array_key_exists('osVersion', get_object_vars($data)) && null !== ($data->osVersion ?? null)) {
            $dataArray['os.version'] = $data->osVersion ?? null;
        }
        if (array_key_exists('osFeatures', get_object_vars($data)) && null !== ($data->osFeatures ?? null)) {
            $values = [];
            foreach ($data->osFeatures ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['os.features'] = $values;
        }
        if (array_key_exists('variant', get_object_vars($data)) && null !== ($data->variant ?? null)) {
            $dataArray['variant'] = $data->variant ?? null;
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