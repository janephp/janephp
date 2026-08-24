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
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] !== null) {
            $object->setWatermarkFilePath($data['watermarkFilePath']);
            unset($data['watermarkFilePath']);
        }
        elseif (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] === null) {
            $object->setWatermarkFilePath(null);
        }
        if (\array_key_exists('marginLeft', $data) && $data['marginLeft'] !== null) {
            $object->setMarginLeft($data['marginLeft']);
            unset($data['marginLeft']);
        }
        elseif (\array_key_exists('marginLeft', $data) && $data['marginLeft'] === null) {
            $object->setMarginLeft(null);
        }
        if (\array_key_exists('marginTop', $data) && $data['marginTop'] !== null) {
            $object->setMarginTop($data['marginTop']);
            unset($data['marginTop']);
        }
        elseif (\array_key_exists('marginTop', $data) && $data['marginTop'] === null) {
            $object->setMarginTop(null);
        }
        if (\array_key_exists('marginRight', $data) && $data['marginRight'] !== null) {
            $object->setMarginRight($data['marginRight']);
            unset($data['marginRight']);
        }
        elseif (\array_key_exists('marginRight', $data) && $data['marginRight'] === null) {
            $object->setMarginRight(null);
        }
        if (\array_key_exists('marginBottom', $data) && $data['marginBottom'] !== null) {
            $object->setMarginBottom($data['marginBottom']);
            unset($data['marginBottom']);
        }
        elseif (\array_key_exists('marginBottom', $data) && $data['marginBottom'] === null) {
            $object->setMarginBottom(null);
        }
        if (\array_key_exists('opacity', $data)) {
            $object->setOpacity($data['opacity']);
            unset($data['opacity']);
        }
        if (\array_key_exists('widthRatio', $data)) {
            $object->setWidthRatio($data['widthRatio']);
            unset($data['widthRatio']);
        }
        if (\array_key_exists('heightRatio', $data)) {
            $object->setHeightRatio($data['heightRatio']);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('watermarkFilePath') && null !== $data->getWatermarkFilePath()) {
            $dataArray['watermarkFilePath'] = $data->getWatermarkFilePath();
        }
        if ($data->isInitialized('marginLeft') && null !== $data->getMarginLeft()) {
            $dataArray['marginLeft'] = $data->getMarginLeft();
        }
        if ($data->isInitialized('marginTop') && null !== $data->getMarginTop()) {
            $dataArray['marginTop'] = $data->getMarginTop();
        }
        if ($data->isInitialized('marginRight') && null !== $data->getMarginRight()) {
            $dataArray['marginRight'] = $data->getMarginRight();
        }
        if ($data->isInitialized('marginBottom') && null !== $data->getMarginBottom()) {
            $dataArray['marginBottom'] = $data->getMarginBottom();
        }
        if ($data->isInitialized('opacity') && null !== $data->getOpacity()) {
            $dataArray['opacity'] = $data->getOpacity();
        }
        if ($data->isInitialized('widthRatio') && null !== $data->getWidthRatio()) {
            $dataArray['widthRatio'] = $data->getWidthRatio();
        }
        if ($data->isInitialized('heightRatio') && null !== $data->getHeightRatio()) {
            $dataArray['heightRatio'] = $data->getHeightRatio();
        }
        foreach ($data as $key => $value) {
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