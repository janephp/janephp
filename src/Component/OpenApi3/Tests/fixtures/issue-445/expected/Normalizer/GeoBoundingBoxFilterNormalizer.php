<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GeoBoundingBoxFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\GeoBoundingBoxFilter::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\GeoBoundingBoxFilter::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\GeoBoundingBoxFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('field', $data)) {
            $object->field = $data['field'];
            unset($data['field']);
        }
        if (\array_key_exists('topLeft', $data)) {
            $value = $data['topLeft'];
            if (is_array($data['topLeft'])) {
                $value = $this->denormalizer->denormalize($data['topLeft'], \PicturePark\API\Model\GeoLocation::class, 'json', $context);
            }
            $object->topLeft = $value;
            unset($data['topLeft']);
        }
        if (\array_key_exists('bottomRight', $data)) {
            $value_1 = $data['bottomRight'];
            if (is_array($data['bottomRight'])) {
                $value_1 = $this->denormalizer->denormalize($data['bottomRight'], \PicturePark\API\Model\GeoLocation::class, 'json', $context);
            }
            $object->bottomRight = $value_1;
            unset($data['bottomRight']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['kind'] = $data->kind ?? null;
        $dataArray['field'] = $data->field ?? null;
        $value = $data->topLeft ?? null;
        if (is_object($data->topLeft ?? null)) {
            $value = ($data->topLeft ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->topLeft ?? null, 'json', $context));
        }
        $dataArray['topLeft'] = $value;
        $value_1 = $data->bottomRight ?? null;
        if (is_object($data->bottomRight ?? null)) {
            $value_1 = ($data->bottomRight ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->bottomRight ?? null, 'json', $context));
        }
        $dataArray['bottomRight'] = $value_1;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\GeoBoundingBoxFilter::class => false];
    }
}