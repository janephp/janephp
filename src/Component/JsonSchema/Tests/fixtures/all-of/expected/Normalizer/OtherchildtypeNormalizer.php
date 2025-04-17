<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OtherchildtypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inheritedProperty', $data)) {
            $object->setInheritedProperty($data['inheritedProperty']);
        }
        if (\array_key_exists('childProperty', $data)) {
            $object->setChildProperty($data['childProperty']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('inheritedProperty') && null !== $data->getInheritedProperty()) {
            $dataArray['inheritedProperty'] = $data->getInheritedProperty();
        }
        if ($data->isInitialized('childProperty') && null !== $data->getChildProperty()) {
            $dataArray['childProperty'] = $data->getChildProperty();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Otherchildtype::class => false];
    }
}