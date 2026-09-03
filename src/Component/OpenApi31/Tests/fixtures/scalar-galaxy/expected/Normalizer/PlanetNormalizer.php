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
class PlanetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('habitabilityIndex', $data) && \is_int($data['habitabilityIndex'])) {
            $data['habitabilityIndex'] = (float) $data['habitabilityIndex'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\PlanetConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value = $data['description'];
            if (is_string($data['description'])) {
                $value = $data['description'];
            } elseif (is_null($data['description'])) {
                $value = $data['description'];
            }
            $object->description = $value;
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('habitabilityIndex', $data)) {
            $object->habitabilityIndex = $data['habitabilityIndex'];
        }
        if (\array_key_exists('physicalProperties', $data)) {
            $object->physicalProperties = $this->denormalizer->denormalize($data['physicalProperties'], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetPhysicalProperties::class, 'json', $context);
        }
        if (\array_key_exists('atmosphere', $data)) {
            $values = [];
            foreach ($data['atmosphere'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetAtmosphereItem::class, 'json', $context);
            }
            $object->atmosphere = $values;
        }
        if (\array_key_exists('discoveredAt', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['discoveredAt']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\InvalidDateException($data['discoveredAt'], 'Y-m-d\TH:i:sP');
            }
            $object->discoveredAt = $date;
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $value_2 = $data['image'];
            if (is_string($data['image'])) {
                $value_2 = $data['image'];
            } elseif (is_null($data['image'])) {
                $value_2 = $data['image'];
            }
            $object->image = $value_2;
        }
        elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->image = null;
        }
        if (\array_key_exists('satellites', $data)) {
            $values_1 = [];
            foreach ($data['satellites'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Satellite::class, 'json', $context);
            }
            $object->satellites = $values_1;
        }
        if (\array_key_exists('creator', $data)) {
            $object->creator = $this->denormalizer->denormalize($data['creator'], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User::class, 'json', $context);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->tags = $values_2;
        }
        if (\array_key_exists('lastUpdated', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastUpdated']);
            if (false === $date_1) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Normalizer\InvalidDateException($data['lastUpdated'], 'Y-m-d\TH:i:sP');
            }
            $object->lastUpdated = $date_1;
        }
        if (\array_key_exists('successCallbackUrl', $data)) {
            $object->successCallbackUrl = $data['successCallbackUrl'];
        }
        if (\array_key_exists('failureCallbackUrl', $data)) {
            $object->failureCallbackUrl = $data['failureCallbackUrl'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $value = $data->description ?? null;
            if (is_string($data->description ?? null)) {
                $value = $data->description ?? null;
            } elseif (is_null($data->description ?? null)) {
                $value = $data->description ?? null;
            }
            $dataArray['description'] = $value;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('habitabilityIndex', get_object_vars($data)) && null !== ($data->habitabilityIndex ?? null)) {
            $dataArray['habitabilityIndex'] = $data->habitabilityIndex ?? null;
        }
        if (array_key_exists('physicalProperties', get_object_vars($data)) && null !== ($data->physicalProperties ?? null)) {
            $dataArray['physicalProperties'] = ($data->physicalProperties ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\JsonObject($this->normalizer->normalize($data->physicalProperties ?? null, 'json', $context));
        }
        if (array_key_exists('atmosphere', get_object_vars($data)) && null !== ($data->atmosphere ?? null)) {
            $values = [];
            foreach ($data->atmosphere ?? null as $value_1) {
                $values[] = $value_1 === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['atmosphere'] = $values;
        }
        if (array_key_exists('discoveredAt', get_object_vars($data)) && null !== ($data->discoveredAt ?? null)) {
            $dataArray['discoveredAt'] = ($data->discoveredAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $value_2 = $data->image ?? null;
            if (is_string($data->image ?? null)) {
                $value_2 = $data->image ?? null;
            } elseif (is_null($data->image ?? null)) {
                $value_2 = $data->image ?? null;
            }
            $dataArray['image'] = $value_2;
        }
        if (array_key_exists('satellites', get_object_vars($data)) && null !== ($data->satellites ?? null)) {
            $values_1 = [];
            foreach ($data->satellites ?? null as $value_3) {
                $values_1[] = $value_3 === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['satellites'] = $values_1;
        }
        if (array_key_exists('creator', get_object_vars($data)) && null !== ($data->creator ?? null)) {
            $dataArray['creator'] = ($data->creator ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\JsonObject($this->normalizer->normalize($data->creator ?? null, 'json', $context));
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_2 = [];
            foreach ($data->tags ?? null as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['tags'] = $values_2;
        }
        if (array_key_exists('successCallbackUrl', get_object_vars($data)) && null !== ($data->successCallbackUrl ?? null)) {
            $dataArray['successCallbackUrl'] = $data->successCallbackUrl ?? null;
        }
        if (array_key_exists('failureCallbackUrl', get_object_vars($data)) && null !== ($data->failureCallbackUrl ?? null)) {
            $dataArray['failureCallbackUrl'] = $data->failureCallbackUrl ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\PlanetConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet::class => false];
    }
}