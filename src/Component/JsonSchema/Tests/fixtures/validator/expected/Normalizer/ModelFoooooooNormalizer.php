<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\JsonSchema\Tests\Expected\Model\ModelFooooooo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\ModelFooooooo;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $values = [];
            foreach ($data['arrayMinItems'] as $value_1) {
                $values[] = $value_1;
            }
            $object->setArrayMinItems($values);
        }
        if (\array_key_exists('arrayMaxItems', $data)) {
            $values_1 = [];
            foreach ($data['arrayMaxItems'] as $value_2) {
                $values_1[] = $value_2;
            }
            $object->setArrayMaxItems($values_1);
        }
        if (\array_key_exists('arrayMinMaxItems', $data)) {
            $values_2 = [];
            foreach ($data['arrayMinMaxItems'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setArrayMinMaxItems($values_2);
        }
        if (\array_key_exists('arrayUnique', $data)) {
            $values_3 = [];
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
            $object->setFoo($this->denormalizer->denormalize($data['foo'], \Jane\JsonSchema\Tests\Expected\Model\FooFooFoo::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('enumString') && null !== $data->getEnumString()) {
            $dataArray['enumString'] = $data->getEnumString();
        }
        if ($data->isInitialized('enumArrayString') && null !== $data->getEnumArrayString()) {
            $value = $data->getEnumArrayString();
            if (is_string($data->getEnumArrayString())) {
                $value = $data->getEnumArrayString();
            }
            $dataArray['enumArrayString'] = $value;
        }
        if ($data->isInitialized('enumNoType') && null !== $data->getEnumNoType()) {
            $dataArray['enumNoType'] = $data->getEnumNoType();
        }
        $dataArray['constString'] = $data->getConstString();
        if ($data->isInitialized('minLengthString') && null !== $data->getMinLengthString()) {
            $dataArray['minLengthString'] = $data->getMinLengthString();
        }
        if ($data->isInitialized('maxLengthString') && null !== $data->getMaxLengthString()) {
            $dataArray['maxLengthString'] = $data->getMaxLengthString();
        }
        if ($data->isInitialized('minMaxLengthString') && null !== $data->getMinMaxLengthString()) {
            $dataArray['minMaxLengthString'] = $data->getMinMaxLengthString();
        }
        $dataArray['patternString'] = $data->getPatternString();
        if ($data->isInitialized('arrayMinItems') && null !== $data->getArrayMinItems()) {
            $values = [];
            foreach ($data->getArrayMinItems() as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['arrayMinItems'] = $values;
        }
        if ($data->isInitialized('arrayMaxItems') && null !== $data->getArrayMaxItems()) {
            $values_1 = [];
            foreach ($data->getArrayMaxItems() as $value_2) {
                $values_1[] = $value_2;
            }
            $dataArray['arrayMaxItems'] = $values_1;
        }
        if ($data->isInitialized('arrayMinMaxItems') && null !== $data->getArrayMinMaxItems()) {
            $values_2 = [];
            foreach ($data->getArrayMinMaxItems() as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['arrayMinMaxItems'] = $values_2;
        }
        if ($data->isInitialized('arrayUnique') && null !== $data->getArrayUnique()) {
            $values_3 = [];
            foreach ($data->getArrayUnique() as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['arrayUnique'] = $values_3;
        }
        if ($data->isInitialized('numericMultipleOf') && null !== $data->getNumericMultipleOf()) {
            $dataArray['numericMultipleOf'] = $data->getNumericMultipleOf();
        }
        if ($data->isInitialized('numericMaximum') && null !== $data->getNumericMaximum()) {
            $dataArray['numericMaximum'] = $data->getNumericMaximum();
        }
        if ($data->isInitialized('numericExclusiveMaximum') && null !== $data->getNumericExclusiveMaximum()) {
            $dataArray['numericExclusiveMaximum'] = $data->getNumericExclusiveMaximum();
        }
        if ($data->isInitialized('numericMinimum') && null !== $data->getNumericMinimum()) {
            $dataArray['numericMinimum'] = $data->getNumericMinimum();
        }
        if ($data->isInitialized('numericExclusiveMinimum') && null !== $data->getNumericExclusiveMinimum()) {
            $dataArray['numericExclusiveMinimum'] = $data->getNumericExclusiveMinimum();
        }
        if ($data->isInitialized('emailFormat') && null !== $data->getEmailFormat()) {
            $dataArray['emailFormat'] = $data->getEmailFormat();
        }
        if ($data->isInitialized('ipv4Format') && null !== $data->getIpv4Format()) {
            $dataArray['ipv4Format'] = $data->getIpv4Format();
        }
        if ($data->isInitialized('ipv6Format') && null !== $data->getIpv6Format()) {
            $dataArray['ipv6Format'] = $data->getIpv6Format();
        }
        if ($data->isInitialized('uriFormat') && null !== $data->getUriFormat()) {
            $dataArray['uriFormat'] = $data->getUriFormat();
        }
        if ($data->isInitialized('iriFormat') && null !== $data->getIriFormat()) {
            $dataArray['iriFormat'] = $data->getIriFormat();
        }
        if ($data->isInitialized('uuidFormat') && null !== $data->getUuidFormat()) {
            $dataArray['uuidFormat'] = $data->getUuidFormat();
        }
        if ($data->isInitialized('foo') && null !== $data->getFoo()) {
            $dataArray['foo'] = $this->normalizer->normalize($data->getFoo(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\JsonSchema\Tests\Expected\Validator\ModelFoooooooConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\JsonSchema\Tests\Expected\Model\ModelFooooooo::class => false];
    }
}