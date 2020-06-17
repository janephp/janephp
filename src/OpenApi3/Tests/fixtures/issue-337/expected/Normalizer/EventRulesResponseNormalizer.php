<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\EventRulesResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\EventRulesResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\EventRulesResponse();
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->setRuleCode($data['ruleCode']);
        }
        if (\array_key_exists('ruleCountryCode', $data)) {
            $object->setRuleCountryCode($data['ruleCountryCode']);
        }
        if (\array_key_exists('ruleType', $data)) {
            $object->setRuleType($data['ruleType']);
        }
        if (\array_key_exists('ruleTypeName', $data)) {
            $object->setRuleTypeName($data['ruleTypeName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('param0', $data)) {
            $object->setParam0($data['param0']);
        }
        if (\array_key_exists('param1', $data)) {
            $object->setParam1($data['param1']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsActive()) {
            $data['isActive'] = $object->getIsActive();
        }
        if (null !== $object->getRuleCode()) {
            $data['ruleCode'] = $object->getRuleCode();
        }
        if (null !== $object->getRuleCountryCode()) {
            $data['ruleCountryCode'] = $object->getRuleCountryCode();
        }
        if (null !== $object->getRuleType()) {
            $data['ruleType'] = $object->getRuleType();
        }
        if (null !== $object->getRuleTypeName()) {
            $data['ruleTypeName'] = $object->getRuleTypeName();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getParam0()) {
            $data['param0'] = $object->getParam0();
        }
        if (null !== $object->getParam1()) {
            $data['param1'] = $object->getParam1();
        }
        return $data;
    }
}