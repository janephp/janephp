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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\ContainerSummary();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainerSummaryConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (\array_key_exists('Names', $data)) {
            $values = [];
            foreach ($data['Names'] as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('ImageID', $data)) {
            $object->setImageID($data['ImageID']);
        }
        if (\array_key_exists('Command', $data)) {
            $object->setCommand($data['Command']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Ports', $data)) {
            $values_1 = [];
            foreach ($data['Ports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\Port::class, 'json', $context);
            }
            $object->setPorts($values_1);
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->setSizeRw($data['SizeRw']);
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->setSizeRootFs($data['SizeRootFs']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Docker\Api\Model\ContainerSummaryHostConfig::class, 'json', $context));
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], \Docker\Api\Model\ContainerSummaryNetworkSettings::class, 'json', $context));
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_3 = [];
            foreach ($data['Mounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->setMounts($values_3);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['Id'] = $data->getId();
        }
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $values = [];
            foreach ($data->getNames() as $value) {
                $values[] = $value;
            }
            $dataArray['Names'] = $values;
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('imageID') && null !== $data->getImageID()) {
            $dataArray['ImageID'] = $data->getImageID();
        }
        if ($data->isInitialized('command') && null !== $data->getCommand()) {
            $dataArray['Command'] = $data->getCommand();
        }
        if ($data->isInitialized('created') && null !== $data->getCreated()) {
            $dataArray['Created'] = $data->getCreated();
        }
        if ($data->isInitialized('ports') && null !== $data->getPorts()) {
            $values_1 = [];
            foreach ($data->getPorts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Ports'] = $values_1;
        }
        if ($data->isInitialized('sizeRw') && null !== $data->getSizeRw()) {
            $dataArray['SizeRw'] = $data->getSizeRw();
        }
        if ($data->isInitialized('sizeRootFs') && null !== $data->getSizeRootFs()) {
            $dataArray['SizeRootFs'] = $data->getSizeRootFs();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_2 = [];
            foreach ($data->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['Labels'] = $values_2;
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['State'] = $data->getState();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $data->getStatus();
        }
        if ($data->isInitialized('hostConfig') && null !== $data->getHostConfig()) {
            $dataArray['HostConfig'] = $this->normalizer->normalize($data->getHostConfig(), 'json', $context);
        }
        if ($data->isInitialized('networkSettings') && null !== $data->getNetworkSettings()) {
            $dataArray['NetworkSettings'] = $this->normalizer->normalize($data->getNetworkSettings(), 'json', $context);
        }
        if ($data->isInitialized('mounts') && null !== $data->getMounts()) {
            $values_3 = [];
            foreach ($data->getMounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
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