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
class ClusterInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ClusterInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ClusterInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ClusterInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('RootRotationInProgress', $data) && \is_int($data['RootRotationInProgress'])) {
            $data['RootRotationInProgress'] = (bool) $data['RootRotationInProgress'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ClusterInfoConstraint());
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
            $object->spec = $this->denormalizer->denormalize($data['Spec'], \Docker\Api\Model\SwarmSpec::class, 'json', $context);
        }
        if (\array_key_exists('TLSInfo', $data)) {
            $object->tLSInfo = $this->denormalizer->denormalize($data['TLSInfo'], \Docker\Api\Model\TLSInfo::class, 'json', $context);
        }
        if (\array_key_exists('RootRotationInProgress', $data)) {
            $object->rootRotationInProgress = $data['RootRotationInProgress'];
        }
        if (\array_key_exists('DataPathPort', $data)) {
            $object->dataPathPort = $data['DataPathPort'];
        }
        if (\array_key_exists('DefaultAddrPool', $data)) {
            $values = [];
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->defaultAddrPool = $values;
        }
        if (\array_key_exists('SubnetSize', $data)) {
            $object->subnetSize = $data['SubnetSize'];
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
        if (array_key_exists('tLSInfo', get_object_vars($data)) && null !== ($data->tLSInfo ?? null)) {
            $dataArray['TLSInfo'] = ($data->tLSInfo ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->tLSInfo ?? null, 'json', $context));
        }
        if (array_key_exists('rootRotationInProgress', get_object_vars($data)) && null !== ($data->rootRotationInProgress ?? null)) {
            $dataArray['RootRotationInProgress'] = $data->rootRotationInProgress ?? null;
        }
        if (array_key_exists('dataPathPort', get_object_vars($data)) && null !== ($data->dataPathPort ?? null)) {
            $dataArray['DataPathPort'] = $data->dataPathPort ?? null;
        }
        if (array_key_exists('defaultAddrPool', get_object_vars($data)) && null !== ($data->defaultAddrPool ?? null)) {
            $values = [];
            foreach ($data->defaultAddrPool ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['DefaultAddrPool'] = $values;
        }
        if (array_key_exists('subnetSize', get_object_vars($data)) && null !== ($data->subnetSize ?? null)) {
            $dataArray['SubnetSize'] = $data->subnetSize ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ClusterInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ClusterInfo::class => false];
    }
}