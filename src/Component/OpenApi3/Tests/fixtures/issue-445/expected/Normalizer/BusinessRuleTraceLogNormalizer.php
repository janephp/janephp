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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleTraceLog();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $value = $data['documentType'];
            if (is_string($data['documentType'])) {
                $value = $data['documentType'];
            }
            $object->setDocumentType($value);
        }
        if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
            $values = [];
            foreach ($data['ruleIds'] as $value_1) {
                $values[] = $value_1;
            }
            $object->setRuleIds($values);
        }
        elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
            $object->setRuleIds(null);
        }
        if (\array_key_exists('rules', $data) && $data['rules'] !== null) {
            $values_1 = [];
            foreach ($data['rules'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessRuleTracedRule::class, 'json', $context);
            }
            $object->setRules($values_1);
        }
        elseif (\array_key_exists('rules', $data) && $data['rules'] === null) {
            $object->setRules(null);
        }
        if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
            $values_2 = [];
            foreach ($data['validationErrors'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->setValidationErrors($values_2);
        }
        elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
            $object->setValidationErrors(null);
        }
        if (\array_key_exists('generalErrors', $data) && $data['generalErrors'] !== null) {
            $values_3 = [];
            foreach ($data['generalErrors'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\ErrorResponse::class, 'json', $context);
            }
            $object->setGeneralErrors($values_3);
        }
        elseif (\array_key_exists('generalErrors', $data) && $data['generalErrors'] === null) {
            $object->setGeneralErrors(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value_5 = $data['audit'];
            if (is_array($data['audit']) and isset($data['audit']['creationDate']) and isset($data['audit']['modificationDate'])) {
                $value_5 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->setAudit($value_5);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('documentId')) {
            $dataArray['documentId'] = $data->getDocumentId();
        }
        $value = $data->getDocumentType();
        if (is_string($data->getDocumentType())) {
            $value = $data->getDocumentType();
        }
        $dataArray['documentType'] = $value;
        if ($data->isInitialized('ruleIds')) {
            $values = [];
            foreach ($data->getRuleIds() as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['ruleIds'] = $values;
        }
        if ($data->isInitialized('rules')) {
            $values_1 = [];
            foreach ($data->getRules() as $value_2) {
                $values_1[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['rules'] = $values_1;
        }
        if ($data->isInitialized('validationErrors')) {
            $values_2 = [];
            foreach ($data->getValidationErrors() as $value_3) {
                $values_2[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['validationErrors'] = $values_2;
        }
        if ($data->isInitialized('generalErrors')) {
            $values_3 = [];
            foreach ($data->getGeneralErrors() as $value_4) {
                $values_3[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['generalErrors'] = $values_3;
        }
        if ($data->isInitialized('audit')) {
            $value_5 = $data->getAudit();
            if (is_object($data->getAudit())) {
                $value_5 = $this->normalizer->normalize($data->getAudit(), 'json', $context);
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