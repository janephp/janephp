<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\GenericResourcesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\GenericResourcesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\GenericResourcesItem();
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
            $this->validate($data, new \Docker\Api\Validator\GenericResourcesItemConstraint());
        }
        if (\array_key_exists('NamedResourceSpec', $data)) {
            $object->setNamedResourceSpec($this->denormalizer->denormalize($data['NamedResourceSpec'], \Docker\Api\Model\GenericResourcesItemNamedResourceSpec::class, 'json', $context));
        }
        if (\array_key_exists('DiscreteResourceSpec', $data)) {
            $object->setDiscreteResourceSpec($this->denormalizer->denormalize($data['DiscreteResourceSpec'], \Docker\Api\Model\GenericResourcesItemDiscreteResourceSpec::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('namedResourceSpec') && null !== $data->getNamedResourceSpec()) {
            $dataArray['NamedResourceSpec'] = $data->getNamedResourceSpec() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getNamedResourceSpec(), 'json', $context));
        }
        if ($data->isInitialized('discreteResourceSpec') && null !== $data->getDiscreteResourceSpec()) {
            $dataArray['DiscreteResourceSpec'] = $data->getDiscreteResourceSpec() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDiscreteResourceSpec(), 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\GenericResourcesItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\GenericResourcesItem::class => false];
    }
}