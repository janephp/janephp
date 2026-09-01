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
class BusinessRuleTraceLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTraceLog::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTraceLog::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTraceLog();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->documentId = $data['documentId'];
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->documentId = null;
        }
        if (\array_key_exists('documentType', $data)) {
            $value = $data['documentType'];
            if (is_string($data['documentType'])) {
                $value = $data['documentType'];
            }
            $object->documentType = $value;
        }
        if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
            $values = [];
            foreach ($data['ruleIds'] as $value_1) {
                $values[] = $value_1;
            }
            $object->ruleIds = $values;
        }
        elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
            $object->ruleIds = null;
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values_1 = [];
            foreach ($data['rules'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessRuleTracedRule::class, 'json', $context);
            }
            $object->rules = $values_1;
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->rules = null;
        }
        if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
            $values_2 = [];
            foreach ($data['validationErrors'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->validationErrors = $values_2;
        }
        elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
            $object->validationErrors = null;
        }
        if (\array_key_exists('generalErrors', $data) && $data['generalErrors'] !== null) {
            $values_3 = [];
            foreach ($data['generalErrors'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->generalErrors = $values_3;
        }
        elseif (\array_key_exists('generalErrors', $data) && $data['generalErrors'] === null) {
            $object->generalErrors = null;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_5 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_5 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value_5;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        $value = $data->documentType ?? null;
        if (is_string($data->documentType ?? null)) {
            $value = $data->documentType ?? null;
        }
        $dataArray['documentType'] = $value;
        if (array_key_exists('ruleIds', get_object_vars($data)) && null !== ($data->ruleIds ?? null)) {
            $values = [];
            foreach ($data->ruleIds ?? null as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['ruleIds'] = $values;
        }
        if (array_key_exists('rules', get_object_vars($data)) && null !== ($data->rules ?? null)) {
            $values_1 = [];
            foreach ($data->rules ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['rules'] = $values_1;
        }
        if (array_key_exists('validationErrors', get_object_vars($data)) && null !== ($data->validationErrors ?? null)) {
            $values_2 = [];
            foreach ($data->validationErrors ?? null as $value_3) {
                $values_2[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['validationErrors'] = $values_2;
        }
        if (array_key_exists('generalErrors', get_object_vars($data)) && null !== ($data->generalErrors ?? null)) {
            $values_3 = [];
            foreach ($data->generalErrors ?? null as $value_4) {
                $values_3[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['generalErrors'] = $values_3;
        }
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value_5 = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value_5 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value_5;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTraceLog::class => false];
    }
}