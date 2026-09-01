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
class PlanetPhysicalPropertiesTemperatureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('min', $data) && \is_int($data['min'])) {
            $data['min'] = (float) $data['min'];
        }
        if (\array_key_exists('max', $data) && \is_int($data['max'])) {
            $data['max'] = (float) $data['max'];
        }
        if (\array_key_exists('average', $data) && \is_int($data['average'])) {
            $data['average'] = (float) $data['average'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetPhysicalPropertiesTemperatureConstraint());
        }
        if (\array_key_exists('min', $data)) {
            $object->min = $data['min'];
            unset($data['min']);
        }
        if (\array_key_exists('max', $data)) {
            $object->max = $data['max'];
            unset($data['max']);
        }
        if (\array_key_exists('average', $data)) {
            $object->average = $data['average'];
            unset($data['average']);
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
        if (array_key_exists('min', get_object_vars($data)) && null !== ($data->min ?? null)) {
            $dataArray['min'] = $data->min ?? null;
        }
        if (array_key_exists('max', get_object_vars($data)) && null !== ($data->max ?? null)) {
            $dataArray['max'] = $data->max ?? null;
        }
        if (array_key_exists('average', get_object_vars($data)) && null !== ($data->average ?? null)) {
            $dataArray['average'] = $data->average ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetPhysicalPropertiesTemperatureConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalPropertiesTemperature::class => false];
    }
}