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
class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskStatus();
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
            $this->validate($data, new \Docker\Api\Validator\TaskStatusConstraint());
        }
        if (\array_key_exists('Timestamp', $data)) {
            $object->timestamp = $data['Timestamp'];
        }
        if (\array_key_exists('State', $data)) {
            $object->state = $data['State'];
        }
        if (\array_key_exists('Message', $data)) {
            $object->message = $data['Message'];
        }
        if (\array_key_exists('Err', $data)) {
            $object->err = $data['Err'];
        }
        if (\array_key_exists('ContainerStatus', $data)) {
            $object->containerStatus = $this->denormalizer->denormalize($data['ContainerStatus'], \Docker\Api\Model\TaskStatusContainerStatus::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['Timestamp'] = $data->timestamp ?? null;
        }
        if (array_key_exists('state', get_object_vars($data)) && null !== ($data->state ?? null)) {
            $dataArray['State'] = $data->state ?? null;
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $dataArray['Message'] = $data->message ?? null;
        }
        if (array_key_exists('err', get_object_vars($data)) && null !== ($data->err ?? null)) {
            $dataArray['Err'] = $data->err ?? null;
        }
        if (array_key_exists('containerStatus', get_object_vars($data)) && null !== ($data->containerStatus ?? null)) {
            $dataArray['ContainerStatus'] = ($data->containerStatus ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->containerStatus ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskStatusConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskStatus::class => false];
    }
}