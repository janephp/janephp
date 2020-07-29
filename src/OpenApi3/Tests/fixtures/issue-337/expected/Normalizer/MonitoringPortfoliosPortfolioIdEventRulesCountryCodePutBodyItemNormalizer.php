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
class MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem();
        if (\array_key_exists('ruleCode', $data)) {
            $object->setRuleCode($data['ruleCode']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
        }
        if (\array_key_exists('param0', $data)) {
            $object->setParam0($data['param0']);
        }
        if (\array_key_exists('param1', $data)) {
            $object->setParam1($data['param1']);
        }
        if (\array_key_exists('param2...', $data)) {
            $object->setParam2($data['param2...']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRuleCode()) {
            $data['ruleCode'] = $object->getRuleCode();
        }
        if (null !== $object->getIsActive()) {
            $data['isActive'] = $object->getIsActive();
        }
        if (null !== $object->getParam0()) {
            $data['param0'] = $object->getParam0();
        }
        if (null !== $object->getParam1()) {
            $data['param1'] = $object->getParam1();
        }
        if (null !== $object->getParam2()) {
            $data['param2...'] = $object->getParam2();
        }
        return $data;
    }
}