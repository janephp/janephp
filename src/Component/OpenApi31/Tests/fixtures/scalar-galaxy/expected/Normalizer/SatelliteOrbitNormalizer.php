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
class SatelliteOrbitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\SatelliteOrbit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\SatelliteOrbit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\SatelliteOrbit();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\SatelliteOrbitConstraint());
        }
        if (\array_key_exists('planet', $data)) {
            $object->setPlanet($this->denormalizer->denormalize($data['planet'], \Jane\Component\OpenApi31\Tests\Expected\Model\Planet::class, 'json', $context));
        }
        if (\array_key_exists('orbitalPeriod', $data)) {
            $object->setOrbitalPeriod($data['orbitalPeriod']);
        }
        if (\array_key_exists('distance', $data)) {
            $object->setDistance($data['distance']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('planet') && null !== $data->getPlanet()) {
            $dataArray['planet'] = $this->normalizer->normalize($data->getPlanet(), 'json', $context);
        }
        if ($data->isInitialized('orbitalPeriod') && null !== $data->getOrbitalPeriod()) {
            $dataArray['orbitalPeriod'] = $data->getOrbitalPeriod();
        }
        if ($data->isInitialized('distance') && null !== $data->getDistance()) {
            $dataArray['distance'] = $data->getDistance();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\SatelliteOrbitConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\SatelliteOrbit::class => false];
    }
}