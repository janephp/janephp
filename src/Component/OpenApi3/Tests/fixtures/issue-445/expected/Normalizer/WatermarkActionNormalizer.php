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
class WatermarkActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\WatermarkAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\WatermarkAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\WatermarkAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('opacity', $data) && \is_int($data['opacity'])) {
            $data['opacity'] = (float) $data['opacity'];
        }
        if (\array_key_exists('widthRatio', $data) && \is_int($data['widthRatio'])) {
            $data['widthRatio'] = (float) $data['widthRatio'];
        }
        if (\array_key_exists('heightRatio', $data) && \is_int($data['heightRatio'])) {
            $data['heightRatio'] = (float) $data['heightRatio'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] !== null) {
            $object->watermarkFilePath = $data['watermarkFilePath'];
            unset($data['watermarkFilePath']);
        }
        elseif (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] === null) {
            $object->watermarkFilePath = null;
            unset($data['watermarkFilePath']);
        }
        if (\array_key_exists('marginLeft', $data) && $data['marginLeft'] !== null) {
            $object->marginLeft = $data['marginLeft'];
            unset($data['marginLeft']);
        }
        elseif (\array_key_exists('marginLeft', $data) && $data['marginLeft'] === null) {
            $object->marginLeft = null;
            unset($data['marginLeft']);
        }
        if (\array_key_exists('marginTop', $data) && $data['marginTop'] !== null) {
            $object->marginTop = $data['marginTop'];
            unset($data['marginTop']);
        }
        elseif (\array_key_exists('marginTop', $data) && $data['marginTop'] === null) {
            $object->marginTop = null;
            unset($data['marginTop']);
        }
        if (\array_key_exists('marginRight', $data) && $data['marginRight'] !== null) {
            $object->marginRight = $data['marginRight'];
            unset($data['marginRight']);
        }
        elseif (\array_key_exists('marginRight', $data) && $data['marginRight'] === null) {
            $object->marginRight = null;
            unset($data['marginRight']);
        }
        if (\array_key_exists('marginBottom', $data) && $data['marginBottom'] !== null) {
            $object->marginBottom = $data['marginBottom'];
            unset($data['marginBottom']);
        }
        elseif (\array_key_exists('marginBottom', $data) && $data['marginBottom'] === null) {
            $object->marginBottom = null;
            unset($data['marginBottom']);
        }
        if (\array_key_exists('opacity', $data)) {
            $object->opacity = $data['opacity'];
            unset($data['opacity']);
        }
        if (\array_key_exists('widthRatio', $data)) {
            $object->widthRatio = $data['widthRatio'];
            unset($data['widthRatio']);
        }
        if (\array_key_exists('heightRatio', $data)) {
            $object->heightRatio = $data['heightRatio'];
            unset($data['heightRatio']);
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
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('watermarkFilePath', get_object_vars($data)) && null !== ($data->watermarkFilePath ?? null)) {
            $dataArray['watermarkFilePath'] = $data->watermarkFilePath ?? null;
        }
        if (array_key_exists('marginLeft', get_object_vars($data)) && null !== ($data->marginLeft ?? null)) {
            $dataArray['marginLeft'] = $data->marginLeft ?? null;
        }
        if (array_key_exists('marginTop', get_object_vars($data)) && null !== ($data->marginTop ?? null)) {
            $dataArray['marginTop'] = $data->marginTop ?? null;
        }
        if (array_key_exists('marginRight', get_object_vars($data)) && null !== ($data->marginRight ?? null)) {
            $dataArray['marginRight'] = $data->marginRight ?? null;
        }
        if (array_key_exists('marginBottom', get_object_vars($data)) && null !== ($data->marginBottom ?? null)) {
            $dataArray['marginBottom'] = $data->marginBottom ?? null;
        }
        if (array_key_exists('opacity', get_object_vars($data)) && null !== ($data->opacity ?? null)) {
            $dataArray['opacity'] = $data->opacity ?? null;
        }
        if (array_key_exists('widthRatio', get_object_vars($data)) && null !== ($data->widthRatio ?? null)) {
            $dataArray['widthRatio'] = $data->widthRatio ?? null;
        }
        if (array_key_exists('heightRatio', get_object_vars($data)) && null !== ($data->heightRatio ?? null)) {
            $dataArray['heightRatio'] = $data->heightRatio ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\WatermarkAction::class => false];
    }
}