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
class ThingCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\ThingCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\ThingCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\ThingCollection();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ThingCollectionConstraint());
        }
        if (\array_key_exists('absent', $data)) {
            $object->setAbsent($this->denormalizer->denormalize($data['absent'], \Jane\Component\OpenApi31\Tests\Expected\Model\AbsentAdditionalPropertiesSchema::class, 'json', $context));
            unset($data['absent']);
        }
        if (\array_key_exists('explicitOpen', $data)) {
            $object->setExplicitOpen($this->denormalizer->denormalize($data['explicitOpen'], \Jane\Component\OpenApi31\Tests\Expected\Model\ExplicitOpenSchema::class, 'json', $context));
            unset($data['explicitOpen']);
        }
        if (\array_key_exists('closed', $data)) {
            $object->setClosed($this->denormalizer->denormalize($data['closed'], \Jane\Component\OpenApi31\Tests\Expected\Model\ClosedSchema::class, 'json', $context));
            unset($data['closed']);
        }
        if (\array_key_exists('typedMap', $data)) {
            $object->setTypedMap($this->denormalizer->denormalize($data['typedMap'], \Jane\Component\OpenApi31\Tests\Expected\Model\TypedMapSchema::class, 'json', $context));
            unset($data['typedMap']);
        }
        if (\array_key_exists('patternOnly', $data)) {
            $object->setPatternOnly($this->denormalizer->denormalize($data['patternOnly'], \Jane\Component\OpenApi31\Tests\Expected\Model\PatternOnlySchema::class, 'json', $context));
            unset($data['patternOnly']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('absent') && null !== $data->getAbsent()) {
            $dataArray['absent'] = $data->getAbsent() === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getAbsent(), 'json', $context));
        }
        if ($data->isInitialized('explicitOpen') && null !== $data->getExplicitOpen()) {
            $dataArray['explicitOpen'] = $data->getExplicitOpen() === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getExplicitOpen(), 'json', $context));
        }
        if ($data->isInitialized('closed') && null !== $data->getClosed()) {
            $dataArray['closed'] = $data->getClosed() === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getClosed(), 'json', $context));
        }
        if ($data->isInitialized('typedMap') && null !== $data->getTypedMap()) {
            $dataArray['typedMap'] = $data->getTypedMap() === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getTypedMap(), 'json', $context));
        }
        if ($data->isInitialized('patternOnly') && null !== $data->getPatternOnly()) {
            $dataArray['patternOnly'] = $data->getPatternOnly() === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPatternOnly(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\ThingCollectionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\ThingCollection::class => false];
    }
}