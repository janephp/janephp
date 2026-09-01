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
class TestFormPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('testFloat', $data) && \is_int($data['testFloat'])) {
            $data['testFloat'] = (float) $data['testFloat'];
        }
        if (\array_key_exists('testString', $data)) {
            $object->testString = $data['testString'];
            unset($data['testString']);
        }
        if (\array_key_exists('testInteger', $data)) {
            $object->testInteger = $data['testInteger'];
            unset($data['testInteger']);
        }
        if (\array_key_exists('testFloat', $data)) {
            $object->testFloat = $data['testFloat'];
            unset($data['testFloat']);
        }
        if (\array_key_exists('testArray', $data)) {
            $values = [];
            foreach ($data['testArray'] as $value) {
                $values[] = $value;
            }
            $object->testArray = $values;
            unset($data['testArray']);
        }
        if (\array_key_exists('testRequired', $data)) {
            $object->testRequired = $data['testRequired'];
            unset($data['testRequired']);
        }
        if (\array_key_exists('testDefault', $data)) {
            $object->testDefault = $data['testDefault'];
            unset($data['testDefault']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('testString', get_object_vars($data)) && null !== ($data->testString ?? null)) {
            $dataArray['testString'] = $data->testString ?? null;
        }
        if (array_key_exists('testInteger', get_object_vars($data)) && null !== ($data->testInteger ?? null)) {
            $dataArray['testInteger'] = $data->testInteger ?? null;
        }
        if (array_key_exists('testFloat', get_object_vars($data)) && null !== ($data->testFloat ?? null)) {
            $dataArray['testFloat'] = $data->testFloat ?? null;
        }
        if (array_key_exists('testArray', get_object_vars($data)) && null !== ($data->testArray ?? null)) {
            $values = [];
            foreach ($data->testArray ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['testArray'] = $values;
        }
        $dataArray['testRequired'] = $data->testRequired ?? null;
        if (array_key_exists('testDefault', get_object_vars($data)) && null !== ($data->testDefault ?? null)) {
            $dataArray['testDefault'] = $data->testDefault ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\TestFormPostBody::class => false];
    }
}