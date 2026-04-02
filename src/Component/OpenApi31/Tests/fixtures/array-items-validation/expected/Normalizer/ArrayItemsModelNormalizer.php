<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ArrayItemsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\ArrayItemsModel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\ArrayItemsModel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\ArrayItemsModel();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ArrayItemsModelConstraint());
        }
        if (\array_key_exists('uuidArray', $data)) {
            $values = [];
            foreach ($data['uuidArray'] as $value) {
                $values[] = $value;
            }
            $object->setUuidArray($values);
        }
        if (\array_key_exists('emailArray', $data)) {
            $values_1 = [];
            foreach ($data['emailArray'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEmailArray($values_1);
        }
        if (\array_key_exists('enumArray', $data)) {
            $values_2 = [];
            foreach ($data['enumArray'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setEnumArray($values_2);
        }
        if (\array_key_exists('integerArray', $data)) {
            $values_3 = [];
            foreach ($data['integerArray'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setIntegerArray($values_3);
        }
        if (\array_key_exists('constrainedStringArray', $data)) {
            $values_4 = [];
            foreach ($data['constrainedStringArray'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setConstrainedStringArray($values_4);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('uuidArray') && null !== $data->getUuidArray()) {
            $values = [];
            foreach ($data->getUuidArray() as $value) {
                $values[] = $value;
            }
            $dataArray['uuidArray'] = $values;
        }
        if ($data->isInitialized('emailArray') && null !== $data->getEmailArray()) {
            $values_1 = [];
            foreach ($data->getEmailArray() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['emailArray'] = $values_1;
        }
        if ($data->isInitialized('enumArray') && null !== $data->getEnumArray()) {
            $values_2 = [];
            foreach ($data->getEnumArray() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['enumArray'] = $values_2;
        }
        if ($data->isInitialized('integerArray') && null !== $data->getIntegerArray()) {
            $values_3 = [];
            foreach ($data->getIntegerArray() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['integerArray'] = $values_3;
        }
        if ($data->isInitialized('constrainedStringArray') && null !== $data->getConstrainedStringArray()) {
            $values_4 = [];
            foreach ($data->getConstrainedStringArray() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['constrainedStringArray'] = $values_4;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ArrayItemsModelConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\ArrayItemsModel::class => false];
    }
}