<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ModelFoooooooNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\ModelFooooooo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\ModelFooooooo;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\ModelFooooooo();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\JsonSchema\Tests\Expected\Validator\ModelFoooooooConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enumString', $data)) {
            $object->setEnumString($data['enumString']);
        }
        if (\array_key_exists('enumArrayString', $data)) {
            $value = $data['enumArrayString'];
            if (is_string($data['enumArrayString'])) {
                $value = $data['enumArrayString'];
            }
            $object->setEnumArrayString($value);
        }
        if (\array_key_exists('enumNoType', $data)) {
            $object->setEnumNoType($data['enumNoType']);
        }
        if (\array_key_exists('constString', $data)) {
            $object->setConstString($data['constString']);
        }
        if (\array_key_exists('minLengthString', $data)) {
            $object->setMinLengthString($data['minLengthString']);
        }
        if (\array_key_exists('maxLengthString', $data)) {
            $object->setMaxLengthString($data['maxLengthString']);
        }
        if (\array_key_exists('minMaxLengthString', $data)) {
            $object->setMinMaxLengthString($data['minMaxLengthString']);
        }
        if (\array_key_exists('patternString', $data)) {
            $object->setPatternString($data['patternString']);
        }
        if (\array_key_exists('arrayMinItems', $data)) {
            $values = array();
            foreach ($data['arrayMinItems'] as $value_1) {
                $values[] = $value_1;
            }
            $object->setArrayMinItems($values);
        }
        if (\array_key_exists('arrayMaxItems', $data)) {
            $values_1 = array();
            foreach ($data['arrayMaxItems'] as $value_2) {
                $values_1[] = $value_2;
            }
            $object->setArrayMaxItems($values_1);
        }
        if (\array_key_exists('arrayMinMaxItems', $data)) {
            $values_2 = array();
            foreach ($data['arrayMinMaxItems'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setArrayMinMaxItems($values_2);
        }
        if (\array_key_exists('arrayUnique', $data)) {
            $values_3 = array();
            foreach ($data['arrayUnique'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->setArrayUnique($values_3);
        }
        if (\array_key_exists('numericMultipleOf', $data)) {
            $object->setNumericMultipleOf($data['numericMultipleOf']);
        }
        if (\array_key_exists('numericMaximum', $data)) {
            $object->setNumericMaximum($data['numericMaximum']);
        }
        if (\array_key_exists('numericExclusiveMaximum', $data)) {
            $object->setNumericExclusiveMaximum($data['numericExclusiveMaximum']);
        }
        if (\array_key_exists('numericMinimum', $data)) {
            $object->setNumericMinimum($data['numericMinimum']);
        }
        if (\array_key_exists('numericExclusiveMinimum', $data)) {
            $object->setNumericExclusiveMinimum($data['numericExclusiveMinimum']);
        }
        if (\array_key_exists('emailFormat', $data)) {
            $object->setEmailFormat($data['emailFormat']);
        }
        if (\array_key_exists('ipv4Format', $data)) {
            $object->setIpv4Format($data['ipv4Format']);
        }
        if (\array_key_exists('ipv6Format', $data)) {
            $object->setIpv6Format($data['ipv6Format']);
        }
        if (\array_key_exists('uriFormat', $data)) {
            $object->setUriFormat($data['uriFormat']);
        }
        if (\array_key_exists('iriFormat', $data)) {
            $object->setIriFormat($data['iriFormat']);
        }
        if (\array_key_exists('uuidFormat', $data)) {
            $object->setUuidFormat($data['uuidFormat']);
        }
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($this->denormalizer->denormalize($data['foo'], 'Jane\\JsonSchema\\Tests\\Expected\\Model\\FooFooFoo', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('enumString') && null !== $object->getEnumString()) {
            $data['enumString'] = $object->getEnumString();
        }
        if ($object->isInitialized('enumArrayString') && null !== $object->getEnumArrayString()) {
            $value = $object->getEnumArrayString();
            if (is_string($object->getEnumArrayString())) {
                $value = $object->getEnumArrayString();
            }
            $data['enumArrayString'] = $value;
        }
        if ($object->isInitialized('enumNoType') && null !== $object->getEnumNoType()) {
            $data['enumNoType'] = $object->getEnumNoType();
        }
        $data['constString'] = $object->getConstString();
        if ($object->isInitialized('minLengthString') && null !== $object->getMinLengthString()) {
            $data['minLengthString'] = $object->getMinLengthString();
        }
        if ($object->isInitialized('maxLengthString') && null !== $object->getMaxLengthString()) {
            $data['maxLengthString'] = $object->getMaxLengthString();
        }
        if ($object->isInitialized('minMaxLengthString') && null !== $object->getMinMaxLengthString()) {
            $data['minMaxLengthString'] = $object->getMinMaxLengthString();
        }
        $data['patternString'] = $object->getPatternString();
        if ($object->isInitialized('arrayMinItems') && null !== $object->getArrayMinItems()) {
            $values = array();
            foreach ($object->getArrayMinItems() as $value_1) {
                $values[] = $value_1;
            }
            $data['arrayMinItems'] = $values;
        }
        if ($object->isInitialized('arrayMaxItems') && null !== $object->getArrayMaxItems()) {
            $values_1 = array();
            foreach ($object->getArrayMaxItems() as $value_2) {
                $values_1[] = $value_2;
            }
            $data['arrayMaxItems'] = $values_1;
        }
        if ($object->isInitialized('arrayMinMaxItems') && null !== $object->getArrayMinMaxItems()) {
            $values_2 = array();
            foreach ($object->getArrayMinMaxItems() as $value_3) {
                $values_2[] = $value_3;
            }
            $data['arrayMinMaxItems'] = $values_2;
        }
        if ($object->isInitialized('arrayUnique') && null !== $object->getArrayUnique()) {
            $values_3 = array();
            foreach ($object->getArrayUnique() as $value_4) {
                $values_3[] = $value_4;
            }
            $data['arrayUnique'] = $values_3;
        }
        if ($object->isInitialized('numericMultipleOf') && null !== $object->getNumericMultipleOf()) {
            $data['numericMultipleOf'] = $object->getNumericMultipleOf();
        }
        if ($object->isInitialized('numericMaximum') && null !== $object->getNumericMaximum()) {
            $data['numericMaximum'] = $object->getNumericMaximum();
        }
        if ($object->isInitialized('numericExclusiveMaximum') && null !== $object->getNumericExclusiveMaximum()) {
            $data['numericExclusiveMaximum'] = $object->getNumericExclusiveMaximum();
        }
        if ($object->isInitialized('numericMinimum') && null !== $object->getNumericMinimum()) {
            $data['numericMinimum'] = $object->getNumericMinimum();
        }
        if ($object->isInitialized('numericExclusiveMinimum') && null !== $object->getNumericExclusiveMinimum()) {
            $data['numericExclusiveMinimum'] = $object->getNumericExclusiveMinimum();
        }
        if ($object->isInitialized('emailFormat') && null !== $object->getEmailFormat()) {
            $data['emailFormat'] = $object->getEmailFormat();
        }
        if ($object->isInitialized('ipv4Format') && null !== $object->getIpv4Format()) {
            $data['ipv4Format'] = $object->getIpv4Format();
        }
        if ($object->isInitialized('ipv6Format') && null !== $object->getIpv6Format()) {
            $data['ipv6Format'] = $object->getIpv6Format();
        }
        if ($object->isInitialized('uriFormat') && null !== $object->getUriFormat()) {
            $data['uriFormat'] = $object->getUriFormat();
        }
        if ($object->isInitialized('iriFormat') && null !== $object->getIriFormat()) {
            $data['iriFormat'] = $object->getIriFormat();
        }
        if ($object->isInitialized('uuidFormat') && null !== $object->getUuidFormat()) {
            $data['uuidFormat'] = $object->getUuidFormat();
        }
        if ($object->isInitialized('foo') && null !== $object->getFoo()) {
            $data['foo'] = $this->normalizer->normalize($object->getFoo(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\JsonSchema\Tests\Expected\Validator\ModelFoooooooConstraint());
        }
        return $data;
    }
}