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
        elseif (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] === null) {
            $object->managerStatus = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['Version'] = ($data->version ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->version ?? null, 'json', $context));
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['UpdatedAt'] = $data->updatedAt ?? null;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['Spec'] = ($data->spec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['Description'] = ($data->description ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->description ?? null, 'json', $context));
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['Status'] = ($data->status ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->status ?? null, 'json', $context));
        }
        if (array_key_exists('managerStatus', get_object_vars($data)) && null !== ($data->managerStatus ?? null)) {
            $dataArray['ManagerStatus'] = ($data->managerStatus ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->managerStatus ?? null, 'json', $context));
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