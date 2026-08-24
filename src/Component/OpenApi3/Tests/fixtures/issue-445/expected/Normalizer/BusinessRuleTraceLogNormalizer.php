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
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->setDocumentId($data['documentId']);
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->setDocumentId(null);
        }
        if (\array_key_exists('documentType', $data)) {
            $object->setDocumentType($data['documentType']);
        }
        if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
            $values = [];
            foreach ($data['ruleIds'] as $value) {
                $values[] = $value;
            }
            $object->setRuleIds($values);
        }
        elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
            $object->setRuleIds(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values_1 = [];
            foreach ($data['rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\BusinessRuleTracedRule::class, 'json', $context);
            }
            $object->setRules($values_1);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
            $values_2 = [];
            foreach ($data['validationErrors'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->setValidationErrors($values_2);
        }
        elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
            $object->setValidationErrors(null);
        }
        if (\array_key_exists('generalErrors', $data) && $data['generalErrors'] !== null) {
            $values_3 = [];
            foreach ($data['generalErrors'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->setGeneralErrors($values_3);
        }
        elseif (\array_key_exists('generalErrors', $data) && $data['generalErrors'] === null) {
            $object->setGeneralErrors(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('documentId') && null !== $data->getDocumentId()) {
            $dataArray['documentId'] = $data->getDocumentId();
        }
        $dataArray['documentType'] = $data->getDocumentType();
        if ($data->isInitialized('ruleIds') && null !== $data->getRuleIds()) {
            $values = [];
            foreach ($data->getRuleIds() as $value) {
                $values[] = $value;
            }
            $dataArray['ruleIds'] = $values;
        }
        if ($data->isInitialized('rules') && null !== $data->getRules()) {
            $values_1 = [];
            foreach ($data->getRules() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['rules'] = $values_1;
        }
        if ($data->isInitialized('validationErrors') && null !== $data->getValidationErrors()) {
            $values_2 = [];
            foreach ($data->getValidationErrors() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['validationErrors'] = $values_2;
        }
        if ($data->isInitialized('generalErrors') && null !== $data->getGeneralErrors()) {
            $values_3 = [];
            foreach ($data->getGeneralErrors() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['generalErrors'] = $values_3;
        }
        if ($data->isInitialized('audit') && null !== $data->getAudit()) {
            $dataArray['audit'] = $data->getAudit();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTraceLog::class => false];
    }
}