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
class PlanetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\Planet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\Planet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\Planet();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $value = $data['description'];
            if (is_string($data['description'])) {
                $value = $data['description'];
            } elseif (is_null($data['description'])) {
                $value = $data['description'];
            }
            $object->setDescription($value);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('habitabilityIndex', $data)) {
            $object->setHabitabilityIndex($data['habitabilityIndex']);
        }
        if (\array_key_exists('physicalProperties', $data)) {
            $object->setPhysicalProperties($this->denormalizer->denormalize($data['physicalProperties'], \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetPhysicalProperties::class, 'json', $context));
        }
        if (\array_key_exists('atmosphere', $data)) {
            $values = [];
            foreach ($data['atmosphere'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetAtmosphereItem::class, 'json', $context);
            }
            $object->setAtmosphere($values);
        }
        if (\array_key_exists('discoveredAt', $data)) {
            $object->setDiscoveredAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['discoveredAt']));
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $value_2 = $data['image'];
            if (is_string($data['image'])) {
                $value_2 = $data['image'];
            } elseif (is_null($data['image'])) {
                $value_2 = $data['image'];
            }
            $object->setImage($value_2);
        }
        elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('satellites', $data)) {
            $values_1 = [];
            foreach ($data['satellites'] as $value_3) {
                $values_1[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi31\Tests\Expected\Model\Satellite::class, 'json', $context);
            }
            $object->setSatellites($values_1);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], \Jane\Component\OpenApi31\Tests\Expected\Model\User::class, 'json', $context));
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_4) {
                $values_2[] = $value_4;
            }
            $object->setTags($values_2);
        }
        if (\array_key_exists('lastUpdated', $data)) {
            $object->setLastUpdated(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastUpdated']));
        }
        if (\array_key_exists('successCallbackUrl', $data)) {
            $object->setSuccessCallbackUrl($data['successCallbackUrl']);
        }
        if (\array_key_exists('failureCallbackUrl', $data)) {
            $object->setFailureCallbackUrl($data['failureCallbackUrl']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description')) {
            $value = $data->getDescription();
            if (is_string($data->getDescription())) {
                $value = $data->getDescription();
            } elseif (is_null($data->getDescription())) {
                $value = $data->getDescription();
            }
            $dataArray['description'] = $value;
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('habitabilityIndex') && null !== $data->getHabitabilityIndex()) {
            $dataArray['habitabilityIndex'] = $data->getHabitabilityIndex();
        }
        if ($data->isInitialized('physicalProperties') && null !== $data->getPhysicalProperties()) {
            $dataArray['physicalProperties'] = $this->normalizer->normalize($data->getPhysicalProperties(), 'json', $context);
        }
        if ($data->isInitialized('atmosphere') && null !== $data->getAtmosphere()) {
            $values = [];
            foreach ($data->getAtmosphere() as $value_1) {
                $values[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['atmosphere'] = $values;
        }
        if ($data->isInitialized('discoveredAt') && null !== $data->getDiscoveredAt()) {
            $dataArray['discoveredAt'] = $data->getDiscoveredAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('image')) {
            $value_2 = $data->getImage();
            if (is_string($data->getImage())) {
                $value_2 = $data->getImage();
            } elseif (is_null($data->getImage())) {
                $value_2 = $data->getImage();
            }
            $dataArray['image'] = $value_2;
        }
        if ($data->isInitialized('satellites') && null !== $data->getSatellites()) {
            $values_1 = [];
            foreach ($data->getSatellites() as $value_3) {
                $values_1[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['satellites'] = $values_1;
        }
        if ($data->isInitialized('creator') && null !== $data->getCreator()) {
            $dataArray['creator'] = $this->normalizer->normalize($data->getCreator(), 'json', $context);
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_4) {
                $values_2[] = $value_4;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('successCallbackUrl') && null !== $data->getSuccessCallbackUrl()) {
            $dataArray['successCallbackUrl'] = $data->getSuccessCallbackUrl();
        }
        if ($data->isInitialized('failureCallbackUrl') && null !== $data->getFailureCallbackUrl()) {
            $dataArray['failureCallbackUrl'] = $data->getFailureCallbackUrl();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\PlanetConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\Planet::class => false];
    }
}