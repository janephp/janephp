<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1007\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ThingCollection::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ThingCollection::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ThingCollection();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Validator\ThingCollectionConstraint());
        }
        if (\array_key_exists('absent', $data)) {
            $object->absent = $this->denormalizer->denormalize($data['absent'], \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\AbsentAdditionalPropertiesSchema::class, 'json', $context);
            unset($data['absent']);
        }
        if (\array_key_exists('explicitOpen', $data)) {
            $object->explicitOpen = $this->denormalizer->denormalize($data['explicitOpen'], \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ExplicitOpenSchema::class, 'json', $context);
            unset($data['explicitOpen']);
        }
        if (\array_key_exists('closed', $data)) {
            $object->closed = $this->denormalizer->denormalize($data['closed'], \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ClosedSchema::class, 'json', $context);
            unset($data['closed']);
        }
        if (\array_key_exists('typedMap', $data)) {
            $object->typedMap = $this->denormalizer->denormalize($data['typedMap'], \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\TypedMapSchema::class, 'json', $context);
            unset($data['typedMap']);
        }
        if (\array_key_exists('patternOnly', $data)) {
            $object->patternOnly = $this->denormalizer->denormalize($data['patternOnly'], \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\PatternOnlySchema::class, 'json', $context);
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
        if (array_key_exists('absent', get_object_vars($data)) && null !== ($data->absent ?? null)) {
            $dataArray['absent'] = ($data->absent ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->absent ?? null, 'json', $context));
        }
        if (array_key_exists('explicitOpen', get_object_vars($data)) && null !== ($data->explicitOpen ?? null)) {
            $dataArray['explicitOpen'] = ($data->explicitOpen ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->explicitOpen ?? null, 'json', $context));
        }
        if (array_key_exists('closed', get_object_vars($data)) && null !== ($data->closed ?? null)) {
            $dataArray['closed'] = ($data->closed ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->closed ?? null, 'json', $context));
        }
        if (array_key_exists('typedMap', get_object_vars($data)) && null !== ($data->typedMap ?? null)) {
            $dataArray['typedMap'] = ($data->typedMap ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->typedMap ?? null, 'json', $context));
        }
        if (array_key_exists('patternOnly', get_object_vars($data)) && null !== ($data->patternOnly ?? null)) {
            $dataArray['patternOnly'] = ($data->patternOnly ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\JsonObject($this->normalizer->normalize($data->patternOnly ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Issue1007\Validator\ThingCollectionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model\ThingCollection::class => false];
    }
}