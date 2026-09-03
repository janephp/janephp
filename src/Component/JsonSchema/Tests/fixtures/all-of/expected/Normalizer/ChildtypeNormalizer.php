<?php

namespace Jane\Component\JsonSchema\Tests\Expected\AllOf\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\AllOf\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\AllOf\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChildtypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\AllOf\Model\Childtype::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\AllOf\Model\Childtype;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\AllOf\Model\Childtype();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('childProperty', $data)) {
            $object->childProperty = $data['childProperty'];
        }
        if (\array_key_exists('inheritedProperty', $data)) {
            $object->inheritedProperty = $data['inheritedProperty'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('childProperty', get_object_vars($data)) && null !== ($data->childProperty ?? null)) {
            $dataArray['childProperty'] = $data->childProperty ?? null;
        }
        if (array_key_exists('inheritedProperty', get_object_vars($data)) && null !== ($data->inheritedProperty ?? null)) {
            $dataArray['inheritedProperty'] = $data->inheritedProperty ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\AllOf\Model\Childtype::class => false];
    }
}