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
class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ImageSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ImageSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ImageSummary();
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
            $this->validate($data, new \Docker\Api\Validator\ImageSummaryConstraint());
        }
        if (\array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
        }
        if (\array_key_exists('ParentId', $data)) {
            $object->parentId = $data['ParentId'];
        }
        if (\array_key_exists('RepoTags', $data)) {
            $values = [];
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->repoTags = $values;
        }
        if (\array_key_exists('RepoDigests', $data)) {
            $values_1 = [];
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->repoDigests = $values_1;
        }
        if (\array_key_exists('Created', $data)) {
            $object->created = $data['Created'];
        }
        if (\array_key_exists('Size', $data)) {
            $object->size = $data['Size'];
        }
        if (\array_key_exists('SharedSize', $data)) {
            $object->sharedSize = $data['SharedSize'];
        }
        if (\array_key_exists('VirtualSize', $data)) {
            $object->virtualSize = $data['VirtualSize'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->labels = $values_2;
        }
        if (\array_key_exists('Containers', $data)) {
            $object->containers = $data['Containers'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Id'] = $data->id ?? null;
        $dataArray['ParentId'] = $data->parentId ?? null;
        $values = [];
        foreach ($data->repoTags ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['RepoTags'] = $values;
        $values_1 = [];
        foreach ($data->repoDigests ?? null as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['RepoDigests'] = $values_1;
        $dataArray['Created'] = $data->created ?? null;
        $dataArray['Size'] = $data->size ?? null;
        $dataArray['SharedSize'] = $data->sharedSize ?? null;
        $dataArray['VirtualSize'] = $data->virtualSize ?? null;
        $values_2 = new \Docker\Api\Runtime\JsonObject();
        foreach ($data->labels ?? null as $key => $value_2) {
            $values_2[$key] = $value_2;
        }
        $dataArray['Labels'] = $values_2;
        $dataArray['Containers'] = $data->containers ?? null;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ImageSummaryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ImageSummary::class => false];
    }
}