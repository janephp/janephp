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
class TaskSpecContainerSpecConfigsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpecContainerSpecConfigsItem();
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
            $this->validate($data, new \Docker\Api\Validator\TaskSpecContainerSpecConfigsItemConstraint());
        }
        if (\array_key_exists('File', $data)) {
            $object->file = $this->denormalizer->denormalize($data['File'], \Docker\Api\Model\TaskSpecContainerSpecConfigsItemFile::class, 'json', $context);
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->runtime = $data['Runtime'];
        }
        if (\array_key_exists('ConfigID', $data)) {
            $object->configID = $data['ConfigID'];
        }
        if (\array_key_exists('ConfigName', $data)) {
            $object->configName = $data['ConfigName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('file', get_object_vars($data)) && null !== ($data->file ?? null)) {
            $dataArray['File'] = ($data->file ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->file ?? null, 'json', $context));
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $dataArray['Runtime'] = $data->runtime ?? null;
        }
        if (array_key_exists('configID', get_object_vars($data)) && null !== ($data->configID ?? null)) {
            $dataArray['ConfigID'] = $data->configID ?? null;
        }
        if (array_key_exists('configName', get_object_vars($data)) && null !== ($data->configName ?? null)) {
            $dataArray['ConfigName'] = $data->configName ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecContainerSpecConfigsItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class => false];
    }
}