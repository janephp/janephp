<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WlanschedulerModifyWlanSchedulerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerModifyWlanScheduler::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerModifyWlanScheduler::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerModifyWlanScheduler();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('sun', $data)) {
            $values = [];
            foreach ($data['sun'] as $value) {
                $values[] = $value;
            }
            $object->sun = $values;
        }
        if (\array_key_exists('mon', $data)) {
            $values_1 = [];
            foreach ($data['mon'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->mon = $values_1;
        }
        if (\array_key_exists('tue', $data)) {
            $values_2 = [];
            foreach ($data['tue'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->tue = $values_2;
        }
        if (\array_key_exists('wed', $data)) {
            $values_3 = [];
            foreach ($data['wed'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->wed = $values_3;
        }
        if (\array_key_exists('thu', $data)) {
            $values_4 = [];
            foreach ($data['thu'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->thu = $values_4;
        }
        if (\array_key_exists('fri', $data)) {
            $values_5 = [];
            foreach ($data['fri'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->fri = $values_5;
        }
        if (\array_key_exists('sat', $data)) {
            $values_6 = [];
            foreach ($data['sat'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->sat = $values_6;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('sun', get_object_vars($data)) && null !== ($data->sun ?? null)) {
            $values = [];
            foreach ($data->sun ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['sun'] = $values;
        }
        if (array_key_exists('mon', get_object_vars($data)) && null !== ($data->mon ?? null)) {
            $values_1 = [];
            foreach ($data->mon ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['mon'] = $values_1;
        }
        if (array_key_exists('tue', get_object_vars($data)) && null !== ($data->tue ?? null)) {
            $values_2 = [];
            foreach ($data->tue ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tue'] = $values_2;
        }
        if (array_key_exists('wed', get_object_vars($data)) && null !== ($data->wed ?? null)) {
            $values_3 = [];
            foreach ($data->wed ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['wed'] = $values_3;
        }
        if (array_key_exists('thu', get_object_vars($data)) && null !== ($data->thu ?? null)) {
            $values_4 = [];
            foreach ($data->thu ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['thu'] = $values_4;
        }
        if (array_key_exists('fri', get_object_vars($data)) && null !== ($data->fri ?? null)) {
            $values_5 = [];
            foreach ($data->fri ?? null as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['fri'] = $values_5;
        }
        if (array_key_exists('sat', get_object_vars($data)) && null !== ($data->sat ?? null)) {
            $values_6 = [];
            foreach ($data->sat ?? null as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['sat'] = $values_6;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerModifyWlanScheduler::class => false];
    }
}