<?php

namespace Jane\JsonSchema\Tests\Expected\Validator\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Tests\Expected\Validator\Runtime\Normalizer\CheckArray;
use Jane\JsonSchema\Tests\Expected\Validator\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\JsonSchema\Tests\Expected\Validator\Model\ModelFooooooo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Validator\Model\ModelFooooooo;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\JsonSchema\Tests\Expected\Validator\Model\ModelFooooooo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\JsonSchema\Tests\Expected\Validator\Validator\ModelFoooooooConstraint());
        }
        if (\array_key_exists('enumString', $data)) {
            $object->enumString = $data['enumString'];
        }
        if (\array_key_exists('enumArrayString', $data)) {
            $value = $data['enumArrayString'];
            if (is_string($data['enumArrayString'])) {
                $value = $data['enumArrayString'];
            }
            $object->enumArrayString = $value;
        }
        if (\array_key_exists('enumNoType', $data)) {
            $object->enumNoType = $data['enumNoType'];
        }
        if (\array_key_exists('constString', $data)) {
            $object->constString = $data['constString'];
        }
        if (\array_key_exists('minLengthString', $data)) {
            $object->minLengthString = $data['minLengthString'];
        }
        if (\array_key_exists('maxLengthString', $data)) {
            $object->maxLengthString = $data['maxLengthString'];
        }
        if (\array_key_exists('minMaxLengthString', $data)) {
            $object->minMaxLengthString = $data['minMaxLengthString'];
        }
        if (\array_key_exists('patternString', $data)) {
            $object->patternString = $data['patternString'];
        }
        if (\array_key_exists('arrayMinItems', $data)) {
            $values = [];
            foreach ($data['arrayMinItems'] as $value_1) {
                $values[] = $value_1;
            }
            $object->arrayMinItems = $values;
        }
        if (\array_key_exists('arrayMaxItems', $data)) {
            $values_1 = [];
            foreach ($data['arrayMaxItems'] as $value_2) {
                $values_1[] = $value_2;
            }
            $object->arrayMaxItems = $values_1;
        }
        if (\array_key_exists('arrayMinMaxItems', $data)) {
            $values_2 = [];
            foreach ($data['arrayMinMaxItems'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->arrayMinMaxItems = $values_2;
        }
        if (\array_key_exists('arrayUnique', $data)) {
            $values_3 = [];
            foreach ($data['arrayUnique'] as $value_4) {
                $values_3[] = $value_4;
            }
            $object->arrayUnique = $values_3;
        }
        if (\array_key_exists('numericMultipleOf', $data)) {
            $object->numericMultipleOf = $data['numericMultipleOf'];
        }
        if (\array_key_exists('numericMaximum', $data)) {
            $object->numericMaximum = $data['numericMaximum'];
        }
        if (\array_key_exists('numericExclusiveMaximum', $data)) {
            $object->numericExclusiveMaximum = $data['numericExclusiveMaximum'];
        }
        if (\array_key_exists('numericMinimum', $data)) {
            $object->numericMinimum = $data['numericMinimum'];
        }
        if (\array_key_exists('numericExclusiveMinimum', $data)) {
            $object->numericExclusiveMinimum = $data['numericExclusiveMinimum'];
        }
        if (\array_key_exists('emailFormat', $data)) {
            $object->emailFormat = $data['emailFormat'];
        }
        if (\array_key_exists('ipv4Format', $data)) {
            $object->ipv4Format = $data['ipv4Format'];
        }
        if (\array_key_exists('ipv6Format', $data)) {
            $object->ipv6Format = $data['ipv6Format'];
        }
        if (\array_key_exists('uriFormat', $data)) {
            $object->uriFormat = $data['uriFormat'];
        }
        if (\array_key_exists('iriFormat', $data)) {
            $object->iriFormat = $data['iriFormat'];
        }
        if (\array_key_exists('uuidFormat', $data)) {
            $object->uuidFormat = $data['uuidFormat'];
        }
        if (\array_key_exists('dateFormat', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['dateFormat']);
            if (false === $date) {
                throw new \Jane\JsonSchema\Tests\Expected\Validator\Runtime\Normalizer\InvalidDateException($data['dateFormat'], 'Y-m-d');
            }
            $object->dateFormat = $date->setTime(0, 0, 0);
        }
        if (\array_key_exists('dateNullableFormat', $data) && $data['dateNullableFormat'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['dateNullableFormat']);
            if (false === $date_1) {
                throw new \Jane\JsonSchema\Tests\Expected\Validator\Runtime\Normalizer\InvalidDateException($data['dateNullableFormat'], 'Y-m-d');
            }
            $object->dateNullableFormat = $date_1->setTime(0, 0, 0);
        }
        elseif (\array_key_exists('dateNullableFormat', $data) && $data['dateNullableFormat'] === null) {
            $object->dateNullableFormat = null;
        }
        if (\array_key_exists('dateTimeFormat', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['dateTimeFormat']);
            if (false === $date_2) {
                throw new \Jane\JsonSchema\Tests\Expected\Validator\Runtime\Normalizer\InvalidDateException($data['dateTimeFormat'], 'Y-m-d\TH:i:sP');
            }
            $object->dateTimeFormat = $date_2;
        }
        if (\array_key_exists('foo', $data)) {
            $object->foo = $this->denormalizer->denormalize($data['foo'], \Jane\JsonSchema\Tests\Expected\Validator\Model\FooFooFoo::class, 'json', $context);
        }
        if (\array_key_exists('arrayEmptyItems', $data)) {
            $values_4 = [];
            foreach ($data['arrayEmptyItems'] as $value_5) {
                $values_4[] = $value_5;
            }
            $object->arrayEmptyItems = $values_4;
        }
        if (\array_key_exists('arrayBoolItems', $data)) {
            $values_5 = [];
            foreach ($data['arrayBoolItems'] as $value_6) {
                $values_5[] = $value_6;
            }
            $object->arrayBoolItems = $values_5;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('enumString', get_object_vars($data)) && null !== ($data->enumString ?? null)) {
            $dataArray['enumString'] = $data->enumString ?? null;
        }
        if (array_key_exists('enumArrayString', get_object_vars($data)) && null !== ($data->enumArrayString ?? null)) {
            $value = $data->enumArrayString ?? null;
            if (is_string($data->enumArrayString ?? null)) {
                $value = $data->enumArrayString ?? null;
            }
            $dataArray['enumArrayString'] = $value;
        }
        if (array_key_exists('enumNoType', get_object_vars($data)) && null !== ($data->enumNoType ?? null)) {
            $dataArray['enumNoType'] = $data->enumNoType ?? null;
        }
        $dataArray['constString'] = $data->constString ?? null;
        if (array_key_exists('minLengthString', get_object_vars($data)) && null !== ($data->minLengthString ?? null)) {
            $dataArray['minLengthString'] = $data->minLengthString ?? null;
        }
        if (array_key_exists('maxLengthString', get_object_vars($data)) && null !== ($data->maxLengthString ?? null)) {
            $dataArray['maxLengthString'] = $data->maxLengthString ?? null;
        }
        if (array_key_exists('minMaxLengthString', get_object_vars($data)) && null !== ($data->minMaxLengthString ?? null)) {
            $dataArray['minMaxLengthString'] = $data->minMaxLengthString ?? null;
        }
        $dataArray['patternString'] = $data->patternString ?? null;
        if (array_key_exists('arrayMinItems', get_object_vars($data)) && null !== ($data->arrayMinItems ?? null)) {
            $values = [];
            foreach ($data->arrayMinItems ?? null as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['arrayMinItems'] = $values;
        }
        if (array_key_exists('arrayMaxItems', get_object_vars($data)) && null !== ($data->arrayMaxItems ?? null)) {
            $values_1 = [];
            foreach ($data->arrayMaxItems ?? null as $value_2) {
                $values_1[] = $value_2;
            }
            $dataArray['arrayMaxItems'] = $values_1;
        }
        if (array_key_exists('arrayMinMaxItems', get_object_vars($data)) && null !== ($data->arrayMinMaxItems ?? null)) {
            $values_2 = [];
            foreach ($data->arrayMinMaxItems ?? null as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['arrayMinMaxItems'] = $values_2;
        }
        if (array_key_exists('arrayUnique', get_object_vars($data)) && null !== ($data->arrayUnique ?? null)) {
            $values_3 = [];
            foreach ($data->arrayUnique ?? null as $value_4) {
                $values_3[] = $value_4;
            }
            $dataArray['arrayUnique'] = $values_3;
        }
        if (array_key_exists('numericMultipleOf', get_object_vars($data)) && null !== ($data->numericMultipleOf ?? null)) {
            $dataArray['numericMultipleOf'] = $data->numericMultipleOf ?? null;
        }
        if (array_key_exists('numericMaximum', get_object_vars($data)) && null !== ($data->numericMaximum ?? null)) {
            $dataArray['numericMaximum'] = $data->numericMaximum ?? null;
        }
        if (array_key_exists('numericExclusiveMaximum', get_object_vars($data)) && null !== ($data->numericExclusiveMaximum ?? null)) {
            $dataArray['numericExclusiveMaximum'] = $data->numericExclusiveMaximum ?? null;
        }
        if (array_key_exists('numericMinimum', get_object_vars($data)) && null !== ($data->numericMinimum ?? null)) {
            $dataArray['numericMinimum'] = $data->numericMinimum ?? null;
        }
        if (array_key_exists('numericExclusiveMinimum', get_object_vars($data)) && null !== ($data->numericExclusiveMinimum ?? null)) {
            $dataArray['numericExclusiveMinimum'] = $data->numericExclusiveMinimum ?? null;
        }
        if (array_key_exists('emailFormat', get_object_vars($data)) && null !== ($data->emailFormat ?? null)) {
            $dataArray['emailFormat'] = $data->emailFormat ?? null;
        }
        if (array_key_exists('ipv4Format', get_object_vars($data)) && null !== ($data->ipv4Format ?? null)) {
            $dataArray['ipv4Format'] = $data->ipv4Format ?? null;
        }
        if (array_key_exists('ipv6Format', get_object_vars($data)) && null !== ($data->ipv6Format ?? null)) {
            $dataArray['ipv6Format'] = $data->ipv6Format ?? null;
        }
        if (array_key_exists('uriFormat', get_object_vars($data)) && null !== ($data->uriFormat ?? null)) {
            $dataArray['uriFormat'] = $data->uriFormat ?? null;
        }
        if (array_key_exists('iriFormat', get_object_vars($data)) && null !== ($data->iriFormat ?? null)) {
            $dataArray['iriFormat'] = $data->iriFormat ?? null;
        }
        if (array_key_exists('uuidFormat', get_object_vars($data)) && null !== ($data->uuidFormat ?? null)) {
            $dataArray['uuidFormat'] = $data->uuidFormat ?? null;
        }
        if (array_key_exists('dateFormat', get_object_vars($data)) && null !== ($data->dateFormat ?? null)) {
            $dataArray['dateFormat'] = ($data->dateFormat ?? null)->format('Y-m-d');
        }
        if (array_key_exists('dateNullableFormat', get_object_vars($data)) && null !== ($data->dateNullableFormat ?? null)) {
            $dataArray['dateNullableFormat'] = ($data->dateNullableFormat ?? null)?->format('Y-m-d');
        }
        if (array_key_exists('dateTimeFormat', get_object_vars($data)) && null !== ($data->dateTimeFormat ?? null)) {
            $dataArray['dateTimeFormat'] = ($data->dateTimeFormat ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('foo', get_object_vars($data)) && null !== ($data->foo ?? null)) {
            $dataArray['foo'] = ($data->foo ?? null) === null ? null : new \Jane\JsonSchema\Tests\Expected\Validator\Runtime\JsonObject($this->normalizer->normalize($data->foo ?? null, 'json', $context));
        }
        if (array_key_exists('arrayEmptyItems', get_object_vars($data)) && null !== ($data->arrayEmptyItems ?? null)) {
            $values_4 = [];
            foreach ($data->arrayEmptyItems ?? null as $value_5) {
                $values_4[] = $value_5;
            }
            $dataArray['arrayEmptyItems'] = $values_4;
        }
        if (array_key_exists('arrayBoolItems', get_object_vars($data)) && null !== ($data->arrayBoolItems ?? null)) {
            $values_5 = [];
            foreach ($data->arrayBoolItems ?? null as $value_6) {
                $values_5[] = $value_6;
            }
            $dataArray['arrayBoolItems'] = $values_5;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\JsonSchema\Tests\Expected\Validator\Validator\ModelFoooooooConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\JsonSchema\Tests\Expected\Validator\Model\ModelFooooooo::class => false];
    }
}