<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventRulesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\EventRulesResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\EventRulesResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\EventRulesResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
            $data['ruleCode'] = (float) $data['ruleCode'];
        }
        if (\array_key_exists('ruleType', $data) && \is_int($data['ruleType'])) {
            $data['ruleType'] = (float) $data['ruleType'];
        }
        if (\array_key_exists('isActive', $data) && \is_int($data['isActive'])) {
            $data['isActive'] = (bool) $data['isActive'];
        }
        if (\array_key_exists('isActive', $data)) {
            $object->isActive = $data['isActive'];
            unset($data['isActive']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->ruleCode = $data['ruleCode'];
            unset($data['ruleCode']);
        }
        if (\array_key_exists('ruleCountryCode', $data)) {
            $object->ruleCountryCode = $data['ruleCountryCode'];
            unset($data['ruleCountryCode']);
        }
        if (\array_key_exists('ruleType', $data)) {
            $object->ruleType = $data['ruleType'];
            unset($data['ruleType']);
        }
        if (\array_key_exists('ruleTypeName', $data)) {
            $object->ruleTypeName = $data['ruleTypeName'];
            unset($data['ruleTypeName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('param0', $data)) {
            $object->param0 = $data['param0'];
            unset($data['param0']);
        }
        if (\array_key_exists('param1', $data)) {
            $object->param1 = $data['param1'];
            unset($data['param1']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('isActive', get_object_vars($data)) && null !== ($data->isActive ?? null)) {
            $dataArray['isActive'] = $data->isActive ?? null;
        }
        if (array_key_exists('ruleCode', get_object_vars($data)) && null !== ($data->ruleCode ?? null)) {
            $dataArray['ruleCode'] = $data->ruleCode ?? null;
        }
        if (array_key_exists('ruleCountryCode', get_object_vars($data)) && null !== ($data->ruleCountryCode ?? null)) {
            $dataArray['ruleCountryCode'] = $data->ruleCountryCode ?? null;
        }
        if (array_key_exists('ruleType', get_object_vars($data)) && null !== ($data->ruleType ?? null)) {
            $dataArray['ruleType'] = $data->ruleType ?? null;
        }
        if (array_key_exists('ruleTypeName', get_object_vars($data)) && null !== ($data->ruleTypeName ?? null)) {
            $dataArray['ruleTypeName'] = $data->ruleTypeName ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('param0', get_object_vars($data)) && null !== ($data->param0 ?? null)) {
            $dataArray['param0'] = $data->param0 ?? null;
        }
        if (array_key_exists('param1', get_object_vars($data)) && null !== ($data->param1 ?? null)) {
            $dataArray['param1'] = $data->param1 ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\EventRulesResponse::class => false];
    }
}