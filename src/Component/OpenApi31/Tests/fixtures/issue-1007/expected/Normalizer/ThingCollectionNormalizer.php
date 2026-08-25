<?php

namespace Jane\Component\OpenApi31\Tests\Issue1007\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Issue1007\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Issue1007\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ThingCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Issue1007\Model\ThingCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Issue1007\Model\ThingCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Issue1007\Model\ThingCollection();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Issue1007\Validator\ThingCollectionConstraint());
        }
        if (\array_key_exists('default', $data)) {
            $object->setDefault($this->denormalizer->denormalize($data['default'], \Jane\Component\OpenApi31\Tests\Issue1007\Model\OpenSchema::class, 'json', $context));
        }
        if (\array_key_exists('open', $data)) {
            $object->setOpen($this->denormalizer->denormalize($data['open'], \Jane\Component\OpenApi31\Tests\Issue1007\Model\ExplicitOpenSchema::class, 'json', $context));
        }
        if (\array_key_exists('closed', $data)) {
            $object->setClosed($this->denormalizer->denormalize($data['closed'], \Jane\Component\OpenApi31\Tests\Issue1007\Model\ClosedSchema::class, 'json', $context));
        }
        if (\array_key_exists('typedMap', $data)) {
            $object->setTypedMap($this->denormalizer->denormalize($data['typedMap'], \Jane\Component\OpenApi31\Tests\Issue1007\Model\TypedMapSchema::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('default') && null !== $data->getDefault()) {
            $dataArray['default'] = $data->getDefault() === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->getDefault(), 'json', $context));
        }
        if ($data->isInitialized('open') && null !== $data->getOpen()) {
            $dataArray['open'] = $data->getOpen() === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->getOpen(), 'json', $context));
        }
        if ($data->isInitialized('closed') && null !== $data->getClosed()) {
            $dataArray['closed'] = $data->getClosed() === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->getClosed(), 'json', $context));
        }
        if ($data->isInitialized('typedMap') && null !== $data->getTypedMap()) {
            $dataArray['typedMap'] = $data->getTypedMap() === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->getTypedMap(), 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Issue1007\Validator\ThingCollectionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Issue1007\Model\ThingCollection::class => false];
    }
}