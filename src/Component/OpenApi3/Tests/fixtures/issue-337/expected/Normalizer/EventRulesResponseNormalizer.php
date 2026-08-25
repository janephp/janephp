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
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->setRuleCode($data['ruleCode']);
            unset($data['ruleCode']);
        }
        if (\array_key_exists('ruleCountryCode', $data)) {
            $object->setRuleCountryCode($data['ruleCountryCode']);
            unset($data['ruleCountryCode']);
        }
        if (\array_key_exists('ruleType', $data)) {
            $object->setRuleType($data['ruleType']);
            unset($data['ruleType']);
        }
        if (\array_key_exists('ruleTypeName', $data)) {
            $object->setRuleTypeName($data['ruleTypeName']);
            unset($data['ruleTypeName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('param0', $data)) {
            $object->setParam0($data['param0']);
            unset($data['param0']);
        }
        if (\array_key_exists('param1', $data)) {
            $object->setParam1($data['param1']);
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
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['isActive'] = $data->getIsActive();
        }
        if ($data->isInitialized('ruleCode') && null !== $data->getRuleCode()) {
            $dataArray['ruleCode'] = $data->getRuleCode();
        }
        if ($data->isInitialized('ruleCountryCode') && null !== $data->getRuleCountryCode()) {
            $dataArray['ruleCountryCode'] = $data->getRuleCountryCode();
        }
        if ($data->isInitialized('ruleType') && null !== $data->getRuleType()) {
            $dataArray['ruleType'] = $data->getRuleType();
        }
        if ($data->isInitialized('ruleTypeName') && null !== $data->getRuleTypeName()) {
            $dataArray['ruleTypeName'] = $data->getRuleTypeName();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('param0') && null !== $data->getParam0()) {
            $dataArray['param0'] = $data->getParam0();
        }
        if ($data->isInitialized('param1') && null !== $data->getParam1()) {
            $dataArray['param1'] = $data->getParam1();
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