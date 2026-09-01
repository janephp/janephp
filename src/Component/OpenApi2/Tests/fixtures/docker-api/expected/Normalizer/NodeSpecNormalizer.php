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
class NodeSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\NodeSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\NodeSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\NodeSpec();
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
            $this->validate($data, new \Docker\Api\Validator\NodeSpecConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->labels = $values;
        }
        if (\array_key_exists('Role', $data)) {
            $object->role = $data['Role'];
        }
        if (\array_key_exists('Availability', $data)) {
            $object->availability = $data['Availability'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if (array_key_exists('role', get_object_vars($data)) && null !== ($data->role ?? null)) {
            $dataArray['Role'] = $data->role ?? null;
        }
        if (array_key_exists('availability', get_object_vars($data)) && null !== ($data->availability ?? null)) {
            $dataArray['Availability'] = $data->availability ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NodeSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\NodeSpec::class => false];
    }
}