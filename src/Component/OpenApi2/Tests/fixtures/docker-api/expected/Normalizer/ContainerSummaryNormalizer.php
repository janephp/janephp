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
class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainerSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainerSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ContainerSummary();
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
            $this->validate($data, new \Docker\Api\Validator\ContainerSummaryConstraint());
        }
        if (\array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
        }
        if (\array_key_exists('Names', $data)) {
            $values = [];
            foreach ($data['Names'] as $value) {
                $values[] = $value;
            }
            $object->names = $values;
        }
        if (\array_key_exists('Image', $data)) {
            $object->image = $data['Image'];
        }
        if (\array_key_exists('ImageID', $data)) {
            $object->imageID = $data['ImageID'];
        }
        if (\array_key_exists('Command', $data)) {
            $object->command = $data['Command'];
        }
        if (\array_key_exists('Created', $data)) {
            $object->created = $data['Created'];
        }
        if (\array_key_exists('Ports', $data)) {
            $values_1 = [];
            foreach ($data['Ports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\Port::class, 'json', $context);
            }
            $object->ports = $values_1;
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->sizeRw = $data['SizeRw'];
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->sizeRootFs = $data['SizeRootFs'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->labels = $values_2;
        }
        if (\array_key_exists('State', $data)) {
            $object->state = $data['State'];
        }
        if (\array_key_exists('Status', $data)) {
            $object->status = $data['Status'];
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->hostConfig = $this->denormalizer->denormalize($data['HostConfig'], \Docker\Api\Model\ContainerSummaryHostConfig::class, 'json', $context);
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->networkSettings = $this->denormalizer->denormalize($data['NetworkSettings'], \Docker\Api\Model\ContainerSummaryNetworkSettings::class, 'json', $context);
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_3 = [];
            foreach ($data['Mounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->mounts = $values_3;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['Id'] = $data->id ?? null;
        }
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $values = [];
            foreach ($data->names ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['Names'] = $values;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $dataArray['Image'] = $data->image ?? null;
        }
        if (array_key_exists('imageID', get_object_vars($data)) && null !== ($data->imageID ?? null)) {
            $dataArray['ImageID'] = $data->imageID ?? null;
        }
        if (array_key_exists('command', get_object_vars($data)) && null !== ($data->command ?? null)) {
            $dataArray['Command'] = $data->command ?? null;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created ?? null;
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $values_1 = [];
            foreach ($data->ports ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['Ports'] = $values_1;
        }
        if (array_key_exists('sizeRw', get_object_vars($data)) && null !== ($data->sizeRw ?? null)) {
            $dataArray['SizeRw'] = $data->sizeRw ?? null;
        }
        if (array_key_exists('sizeRootFs', get_object_vars($data)) && null !== ($data->sizeRootFs ?? null)) {
            $dataArray['SizeRootFs'] = $data->sizeRootFs ?? null;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['Labels'] = $values_2;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['State'] = $data->state ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['Status'] = $data->status ?? null;
        }
        if (array_key_exists('hostConfig', get_object_vars($data)) && null !== ($data->hostConfig ?? null)) {
            $dataArray['HostConfig'] = ($data->hostConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->hostConfig ?? null, 'json', $context));
        }
        if (array_key_exists('networkSettings', get_object_vars($data)) && null !== ($data->networkSettings ?? null)) {
            $dataArray['NetworkSettings'] = ($data->networkSettings ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->networkSettings ?? null, 'json', $context));
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_3 = [];
            foreach ($data->mounts ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['Mounts'] = $values_3;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainerSummaryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainerSummary::class => false];
    }
}