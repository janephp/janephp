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
class PlanetPhysicalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mass', $data) && \is_int($data['mass'])) {
            $data['mass'] = (float) $data['mass'];
        }
        if (\array_key_exists('radius', $data) && \is_int($data['radius'])) {
            $data['radius'] = (float) $data['radius'];
        }
        if (\array_key_exists('gravity', $data) && \is_int($data['gravity'])) {
            $data['gravity'] = (float) $data['gravity'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetPhysicalPropertiesConstraint());
        }
        if (\array_key_exists('mass', $data)) {
            $object->mass = $data['mass'];
            unset($data['mass']);
        }
        if (\array_key_exists('radius', $data)) {
            $object->radius = $data['radius'];
            unset($data['radius']);
        }
        if (\array_key_exists('gravity', $data)) {
            $object->gravity = $data['gravity'];
            unset($data['gravity']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->temperature = $this->denormalizer->denormalize($data['temperature'], \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature::class, 'json', $context);
            unset($data['temperature']);
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
        if (array_key_exists('mass', get_object_vars($data)) && null !== ($data->mass ?? null)) {
            $dataArray['mass'] = $data->mass ?? null;
        }
        if (array_key_exists('radius', get_object_vars($data)) && null !== ($data->radius ?? null)) {
            $dataArray['radius'] = $data->radius ?? null;
        }
        if (array_key_exists('gravity', get_object_vars($data)) && null !== ($data->gravity ?? null)) {
            $dataArray['gravity'] = $data->gravity ?? null;
        }
        if (array_key_exists('temperature', get_object_vars($data)) && null !== ($data->temperature ?? null)) {
            $dataArray['temperature'] = ($data->temperature ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->temperature ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetPhysicalPropertiesConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties::class => false];
    }
}