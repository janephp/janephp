<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EventRulesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\EventRulesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\EventRulesResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\EventRulesResponse();
            if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
                $data['ruleCode'] = (double) $data['ruleCode'];
            }
            if (\array_key_exists('ruleType', $data) && \is_int($data['ruleType'])) {
                $data['ruleType'] = (double) $data['ruleType'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['isActive'] = $object->getIsActive();
            }
            if ($object->isInitialized('ruleCode') && null !== $object->getRuleCode()) {
                $data['ruleCode'] = $object->getRuleCode();
            }
            if ($object->isInitialized('ruleCountryCode') && null !== $object->getRuleCountryCode()) {
                $data['ruleCountryCode'] = $object->getRuleCountryCode();
            }
            if ($object->isInitialized('ruleType') && null !== $object->getRuleType()) {
                $data['ruleType'] = $object->getRuleType();
            }
            if ($object->isInitialized('ruleTypeName') && null !== $object->getRuleTypeName()) {
                $data['ruleTypeName'] = $object->getRuleTypeName();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('param0') && null !== $object->getParam0()) {
                $data['param0'] = $object->getParam0();
            }
            if ($object->isInitialized('param1') && null !== $object->getParam1()) {
                $data['param1'] = $object->getParam1();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\EventRulesResponse' => false];
        }
    }
} else {
    class EventRulesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\EventRulesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\EventRulesResponse';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\EventRulesResponse();
            if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
                $data['ruleCode'] = (double) $data['ruleCode'];
            }
            if (\array_key_exists('ruleType', $data) && \is_int($data['ruleType'])) {
                $data['ruleType'] = (double) $data['ruleType'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['isActive'] = $object->getIsActive();
            }
            if ($object->isInitialized('ruleCode') && null !== $object->getRuleCode()) {
                $data['ruleCode'] = $object->getRuleCode();
            }
            if ($object->isInitialized('ruleCountryCode') && null !== $object->getRuleCountryCode()) {
                $data['ruleCountryCode'] = $object->getRuleCountryCode();
            }
            if ($object->isInitialized('ruleType') && null !== $object->getRuleType()) {
                $data['ruleType'] = $object->getRuleType();
            }
            if ($object->isInitialized('ruleTypeName') && null !== $object->getRuleTypeName()) {
                $data['ruleTypeName'] = $object->getRuleTypeName();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('param0') && null !== $object->getParam0()) {
                $data['param0'] = $object->getParam0();
            }
            if ($object->isInitialized('param1') && null !== $object->getParam1()) {
                $data['param1'] = $object->getParam1();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\EventRulesResponse' => false];
        }
    }
}