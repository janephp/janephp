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
class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ServicesIdUpdatePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ServicesIdUpdatePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ServicesIdUpdatePostBody();
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
            $this->validate($data, new \Docker\Api\Validator\ServicesIdUpdatePostBodyConstraint());
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
        if (\array_key_exists('TaskTemplate', $data)) {
            $object->taskTemplate = $this->denormalizer->denormalize($data['TaskTemplate'], \Docker\Api\Model\TaskSpec::class, 'json', $context);
        }
        if (\array_key_exists('Mode', $data)) {
            $object->mode = $this->denormalizer->denormalize($data['Mode'], \Docker\Api\Model\ServiceSpecMode::class, 'json', $context);
        }
        if (\array_key_exists('UpdateConfig', $data)) {
            $object->updateConfig = $this->denormalizer->denormalize($data['UpdateConfig'], \Docker\Api\Model\ServiceSpecUpdateConfig::class, 'json', $context);
        }
        if (\array_key_exists('RollbackConfig', $data)) {
            $object->rollbackConfig = $this->denormalizer->denormalize($data['RollbackConfig'], \Docker\Api\Model\ServiceSpecRollbackConfig::class, 'json', $context);
        }
        if (\array_key_exists('Networks', $data)) {
            $values_1 = [];
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->networks = $values_1;
        }
        if (\array_key_exists('EndpointSpec', $data)) {
            $object->endpointSpec = $this->denormalizer->denormalize($data['EndpointSpec'], \Docker\Api\Model\EndpointSpec::class, 'json', $context);
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
        if (array_key_exists('taskTemplate', get_object_vars($data)) && null !== ($data->taskTemplate ?? null)) {
            $dataArray['TaskTemplate'] = ($data->taskTemplate ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->taskTemplate ?? null, 'json', $context));
        }
        if (array_key_exists('mode', get_object_vars($data)) && null !== ($data->mode ?? null)) {
            $dataArray['Mode'] = ($data->mode ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->mode ?? null, 'json', $context));
        }
        if (array_key_exists('updateConfig', get_object_vars($data)) && null !== ($data->updateConfig ?? null)) {
            $dataArray['UpdateConfig'] = ($data->updateConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->updateConfig ?? null, 'json', $context));
        }
        if (array_key_exists('rollbackConfig', get_object_vars($data)) && null !== ($data->rollbackConfig ?? null)) {
            $dataArray['RollbackConfig'] = ($data->rollbackConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->rollbackConfig ?? null, 'json', $context));
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values_1 = [];
            foreach ($data->networks ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['Networks'] = $values_1;
        }
        if (array_key_exists('endpointSpec', get_object_vars($data)) && null !== ($data->endpointSpec ?? null)) {
            $dataArray['EndpointSpec'] = ($data->endpointSpec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->endpointSpec ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServicesIdUpdatePostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ServicesIdUpdatePostBody::class => false];
    }
}