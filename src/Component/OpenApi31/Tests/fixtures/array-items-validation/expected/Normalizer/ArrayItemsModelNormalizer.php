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
            $object->uuidArray = $values;
            unset($data['uuidArray']);
        }
        if (\array_key_exists('emailArray', $data)) {
            $values_1 = [];
            foreach ($data['emailArray'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->emailArray = $values_1;
            unset($data['emailArray']);
        }
        if (\array_key_exists('enumArray', $data)) {
            $values_2 = [];
            foreach ($data['enumArray'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->enumArray = $values_2;
            unset($data['enumArray']);
        }
        if (\array_key_exists('integerArray', $data)) {
            $values_3 = [];
            foreach ($data['integerArray'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->integerArray = $values_3;
            unset($data['integerArray']);
        }
        if (\array_key_exists('constrainedStringArray', $data)) {
            $values_4 = [];
            foreach ($data['constrainedStringArray'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->constrainedStringArray = $values_4;
            unset($data['constrainedStringArray']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('uuidArray', get_object_vars($data)) && null !== ($data->uuidArray ?? null)) {
            $values = [];
            foreach ($data->uuidArray ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['uuidArray'] = $values;
        }
        if (array_key_exists('emailArray', get_object_vars($data)) && null !== ($data->emailArray ?? null)) {
            $values_1 = [];
            foreach ($data->emailArray ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['emailArray'] = $values_1;
        }
        if (array_key_exists('enumArray', get_object_vars($data)) && null !== ($data->enumArray ?? null)) {
            $values_2 = [];
            foreach ($data->enumArray ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['enumArray'] = $values_2;
        }
        if (array_key_exists('integerArray', get_object_vars($data)) && null !== ($data->integerArray ?? null)) {
            $values_3 = [];
            foreach ($data->integerArray ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['integerArray'] = $values_3;
        }
        if (array_key_exists('constrainedStringArray', get_object_vars($data)) && null !== ($data->constrainedStringArray ?? null)) {
            $values_4 = [];
            foreach ($data->constrainedStringArray ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['constrainedStringArray'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
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