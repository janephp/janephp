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
class ServiceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ServiceSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ServiceSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ServiceSpec();
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
            $this->validate($data, new \Docker\Api\Validator\ServiceSpecConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('TaskTemplate', $data)) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \Docker\Api\Model\TaskSpec::class, 'json', $context));
        }
        if (\array_key_exists('Mode', $data)) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], \Docker\Api\Model\ServiceSpecMode::class, 'json', $context));
        }
        if (\array_key_exists('UpdateConfig', $data)) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \Docker\Api\Model\ServiceSpecUpdateConfig::class, 'json', $context));
        }
        if (\array_key_exists('RollbackConfig', $data)) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], \Docker\Api\Model\ServiceSpecRollbackConfig::class, 'json', $context));
        }
        if (\array_key_exists('Networks', $data)) {
            $values_1 = [];
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (\array_key_exists('EndpointSpec', $data)) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \Docker\Api\Model\EndpointSpec::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if ($data->isInitialized('taskTemplate') && null !== $data->getTaskTemplate()) {
            $dataArray['TaskTemplate'] = $this->normalizer->normalize($data->getTaskTemplate(), 'json', $context);
        }
        if ($data->isInitialized('mode') && null !== $data->getMode()) {
            $dataArray['Mode'] = $this->normalizer->normalize($data->getMode(), 'json', $context);
        }
        if ($data->isInitialized('updateConfig') && null !== $data->getUpdateConfig()) {
            $dataArray['UpdateConfig'] = $this->normalizer->normalize($data->getUpdateConfig(), 'json', $context);
        }
        if ($data->isInitialized('rollbackConfig') && null !== $data->getRollbackConfig()) {
            $dataArray['RollbackConfig'] = $this->normalizer->normalize($data->getRollbackConfig(), 'json', $context);
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values_1 = [];
            foreach ($data->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['Networks'] = $values_1;
        }
        if ($data->isInitialized('endpointSpec') && null !== $data->getEndpointSpec()) {
            $dataArray['EndpointSpec'] = $this->normalizer->normalize($data->getEndpointSpec(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServiceSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ServiceSpec::class => false];
    }
}