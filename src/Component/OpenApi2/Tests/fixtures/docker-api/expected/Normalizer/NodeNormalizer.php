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
class NodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Node::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Node::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Node();
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
            $this->validate($data, new \Docker\Api\Validator\NodeConstraint());
        }
        if (\array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
        }
        if (\array_key_exists('Version', $data)) {
            $object->version = $this->denormalizer->denormalize($data['Version'], \Docker\Api\Model\ObjectVersion::class, 'json', $context);
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->createdAt = $data['CreatedAt'];
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->updatedAt = $data['UpdatedAt'];
        }
        if (\array_key_exists('Spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \Docker\Api\Model\NodeSpec::class, 'json', $context);
        }
        if (\array_key_exists('Description', $data)) {
            $object->description = $this->denormalizer->denormalize($data['Description'], \Docker\Api\Model\NodeDescription::class, 'json', $context);
        }
        if (\array_key_exists('Status', $data)) {
            $object->status = $this->denormalizer->denormalize($data['Status'], \Docker\Api\Model\NodeStatus::class, 'json', $context);
        }
        if (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] !== null) {
            $object->managerStatus = $this->denormalizer->denormalize($data['ManagerStatus'], \Docker\Api\Model\ManagerStatus::class, 'json', $context);
        }
        elseif (\array_key_exists('ManagerStatus', $data)) {
            $object->managerStatus = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $normalized = $this->normalizer->normalize($data->version, 'json', $context);
            $dataArray['Version'] = \is_iterable($normalized) ? new \Docker\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['UpdatedAt'] = $data->updatedAt;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->spec, 'json', $context);
            $dataArray['Spec'] = \is_iterable($normalized_1) ? new \Docker\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->description, 'json', $context);
            $dataArray['Description'] = \is_iterable($normalized_2) ? new \Docker\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->status, 'json', $context);
            $dataArray['Status'] = \is_iterable($normalized_3) ? new \Docker\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('managerStatus', get_object_vars($data)) && null !== ($data->managerStatus ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->managerStatus, 'json', $context);
            $dataArray['ManagerStatus'] = \is_iterable($normalized_4) ? new \Docker\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NodeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Node::class => false];
    }
}