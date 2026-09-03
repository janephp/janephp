<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SatelliteOrbitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\SatelliteOrbit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\SatelliteOrbit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\SatelliteOrbit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('orbitalPeriod', $data) && \is_int($data['orbitalPeriod'])) {
            $data['orbitalPeriod'] = (float) $data['orbitalPeriod'];
        }
        if (\array_key_exists('distance', $data) && \is_int($data['distance'])) {
            $data['distance'] = (float) $data['distance'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\SatelliteOrbitConstraint());
        }
        if (\array_key_exists('planet', $data)) {
            $object->planet = $this->denormalizer->denormalize($data['planet'], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet::class, 'json', $context);
            unset($data['planet']);
        }
        if (\array_key_exists('orbitalPeriod', $data)) {
            $object->orbitalPeriod = $data['orbitalPeriod'];
            unset($data['orbitalPeriod']);
        }
        if (\array_key_exists('distance', $data)) {
            $object->distance = $data['distance'];
            unset($data['distance']);
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
        if (array_key_exists('planet', get_object_vars($data)) && null !== ($data->planet ?? null)) {
            $dataArray['planet'] = ($data->planet ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\JsonObject($this->normalizer->normalize($data->planet ?? null, 'json', $context));
        }
        if (array_key_exists('orbitalPeriod', get_object_vars($data)) && null !== ($data->orbitalPeriod ?? null)) {
            $dataArray['orbitalPeriod'] = $data->orbitalPeriod ?? null;
        }
        if (array_key_exists('distance', get_object_vars($data)) && null !== ($data->distance ?? null)) {
            $dataArray['distance'] = $data->distance ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\SatelliteOrbitConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\SatelliteOrbit::class => false];
    }
}