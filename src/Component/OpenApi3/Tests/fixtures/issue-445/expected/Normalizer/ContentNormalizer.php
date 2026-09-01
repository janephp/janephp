<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Content::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Content::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Content();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->contentSchemaId = $data['contentSchemaId'];
        }
        if (\array_key_exists('contentType', $data)) {
            $value_1 = $data['contentType'];
            if (is_string($data['contentType'])) {
                $value_1 = $data['contentType'];
            }
            $object->contentType = $value_1;
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = [];
            foreach ($data['layerSchemaIds'] as $value_2) {
                $values[] = $value_2;
            }
            $object->layerSchemaIds = $values;
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('displayValues', $data)) {
            $values_1 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['displayValues'] as $key => $value_3) {
                $values_1[$key] = $value_3;
            }
            $object->displayValues = $values_1;
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_2 = [];
            foreach ($data['brokenReferenceIds'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->brokenReferenceIds = $values_2;
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->brokenReferenceIds = null;
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_3 = [];
            foreach ($data['brokenIndirectReferenceIds'] as $value_5) {
                $values_3[] = $value_5;
            }
            $object->brokenIndirectReferenceIds = $values_3;
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->brokenIndirectReferenceIds = null;
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_4 = [];
            foreach ($data['brokenRelationTargetIds'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->brokenRelationTargetIds = $values_4;
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->brokenRelationTargetIds = null;
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_7 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_7 = $data['lifeCycle'];
            }
            $object->lifeCycle = $value_7;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value;
        }
        $dataArray['contentSchemaId'] = $data->contentSchemaId ?? null;
        $value_1 = $data->contentType ?? null;
        if (is_string($data->contentType ?? null)) {
            $value_1 = $data->contentType ?? null;
        }
        $dataArray['contentType'] = $value_1;
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values = [];
            foreach ($data->layerSchemaIds ?? null as $value_2) {
                $values[] = $value_2;
            }
            $dataArray['layerSchemaIds'] = $values;
        }
        $values_1 = new \PicturePark\API\Runtime\JsonObject();
        foreach ($data->displayValues ?? null as $key => $value_3) {
            $values_1[$key] = $value_3;
        }
        $dataArray['displayValues'] = $values_1;
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('brokenReferenceIds', get_object_vars($data)) && null !== ($data->brokenReferenceIds ?? null)) {
            $values_2 = [];
            foreach ($data->brokenReferenceIds ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['brokenReferenceIds'] = $values_2;
        }
        if (array_key_exists('brokenIndirectReferenceIds', get_object_vars($data)) && null !== ($data->brokenIndirectReferenceIds ?? null)) {
            $values_3 = [];
            foreach ($data->brokenIndirectReferenceIds ?? null as $value_5) {
                $values_3[] = $value_5;
            }
            $dataArray['brokenIndirectReferenceIds'] = $values_3;
        }
        if (array_key_exists('brokenRelationTargetIds', get_object_vars($data)) && null !== ($data->brokenRelationTargetIds ?? null)) {
            $values_4 = [];
            foreach ($data->brokenRelationTargetIds ?? null as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['brokenRelationTargetIds'] = $values_4;
        }
        $value_7 = $data->lifeCycle ?? null;
        if (is_string($data->lifeCycle ?? null)) {
            $value_7 = $data->lifeCycle ?? null;
        }
        $dataArray['lifeCycle'] = $value_7;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Content::class => false];
    }
}