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
class FooFooFooNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\JsonSchema\Tests\Expected\Validator\Model\FooFooFoo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Validator\Model\FooFooFoo;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\JsonSchema\Tests\Expected\Validator\Model\FooFooFoo();
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
            $this->validate($data, new \Jane\JsonSchema\Tests\Expected\Validator\Validator\FooFooFooConstraint());
        }
        if (\array_key_exists('foo', $data)) {
            $object->foo = $data['foo'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('foo', get_object_vars($data)) && null !== ($data->foo ?? null)) {
            $dataArray['foo'] = $data->foo ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\JsonSchema\Tests\Expected\Validator\Validator\FooFooFooConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\JsonSchema\Tests\Expected\Validator\Model\FooFooFoo::class => false];
    }
}