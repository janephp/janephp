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
            $data['testFloat'] = (double) $data['testFloat'];
        }
        if (\array_key_exists('testString', $data)) {
            $object->setTestString($data['testString']);
            unset($data['testString']);
        }
        if (\array_key_exists('testInteger', $data)) {
            $object->setTestInteger($data['testInteger']);
            unset($data['testInteger']);
        }
        if (\array_key_exists('testFloat', $data)) {
            $object->setTestFloat($data['testFloat']);
            unset($data['testFloat']);
        }
        if (\array_key_exists('testArray', $data)) {
            $values = [];
            foreach ($data['testArray'] as $value) {
                $values[] = $value;
            }
            $object->setTestArray($values);
            unset($data['testArray']);
        }
        if (\array_key_exists('testRequired', $data)) {
            $object->setTestRequired($data['testRequired']);
            unset($data['testRequired']);
        }
        if (\array_key_exists('testDefault', $data)) {
            $object->setTestDefault($data['testDefault']);
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
        if ($data->isInitialized('testString') && null !== $data->getTestString()) {
            $dataArray['testString'] = $data->getTestString();
        }
        if ($data->isInitialized('testInteger') && null !== $data->getTestInteger()) {
            $dataArray['testInteger'] = $data->getTestInteger();
        }
        if ($data->isInitialized('testFloat') && null !== $data->getTestFloat()) {
            $dataArray['testFloat'] = $data->getTestFloat();
        }
        if ($data->isInitialized('testArray') && null !== $data->getTestArray()) {
            $values = [];
            foreach ($data->getTestArray() as $value) {
                $values[] = $value;
            }
            $dataArray['testArray'] = $values;
        }
        $dataArray['testRequired'] = $data->getTestRequired();
        if ($data->isInitialized('testDefault') && null !== $data->getTestDefault()) {
            $dataArray['testDefault'] = $data->getTestDefault();
        }
        foreach ($data as $key => $value_1) {
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