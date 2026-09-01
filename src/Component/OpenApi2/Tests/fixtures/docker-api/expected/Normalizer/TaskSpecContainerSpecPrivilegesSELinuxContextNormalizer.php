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
class TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('Disable', $data) && \is_int($data['Disable'])) {
            $data['Disable'] = (bool) $data['Disable'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecContainerSpecPrivilegesSELinuxContextConstraint());
        }
        if (\array_key_exists('Disable', $data)) {
            $object->disable = $data['Disable'];
        }
        if (\array_key_exists('User', $data)) {
            $object->user = $data['User'];
        }
        if (\array_key_exists('Role', $data)) {
            $object->role = $data['Role'];
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('Level', $data)) {
            $object->level = $data['Level'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('disable', get_object_vars($data)) && null !== ($data->disable ?? null)) {
            $dataArray['Disable'] = $data->disable ?? null;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = $data->user ?? null;
        }
        if (array_key_exists('role', get_object_vars($data)) && null !== ($data->role ?? null)) {
            $dataArray['Role'] = $data->role ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type ?? null;
        }
        if (array_key_exists('level', get_object_vars($data)) && null !== ($data->level ?? null)) {
            $dataArray['Level'] = $data->level ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecContainerSpecPrivilegesSELinuxContextConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false];
    }
}