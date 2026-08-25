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
class PngFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\PngFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\PngFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\PngFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
            $data['horizontalResolution'] = (float) $data['horizontalResolution'];
        }
        if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
            $data['verticalResolution'] = (float) $data['verticalResolution'];
        }
        if (\array_key_exists('keepClippingPath', $data) && \is_int($data['keepClippingPath'])) {
            $data['keepClippingPath'] = (bool) $data['keepClippingPath'];
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $value = $data['colorProfile'];
            if (is_string($data['colorProfile'])) {
                $value = $data['colorProfile'];
            }
            $object->setColorProfile($value);
            unset($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->setColorProfile(null);
            unset($data['colorProfile']);
        }
        if (\array_key_exists('colorTransformationIntent', $data)) {
            $value_1 = $data['colorTransformationIntent'];
            if (is_string($data['colorTransformationIntent'])) {
                $value_1 = $data['colorTransformationIntent'];
            }
            $object->setColorTransformationIntent($value_1);
            unset($data['colorTransformationIntent']);
        }
        if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
            $object->setHorizontalResolution($data['horizontalResolution']);
            unset($data['horizontalResolution']);
        }
        elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
            $object->setHorizontalResolution(null);
            unset($data['horizontalResolution']);
        }
        if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
            $object->setVerticalResolution($data['verticalResolution']);
            unset($data['verticalResolution']);
        }
        elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
            $object->setVerticalResolution(null);
            unset($data['verticalResolution']);
        }
        if (\array_key_exists('keepClippingPath', $data)) {
            $object->setKeepClippingPath($data['keepClippingPath']);
            unset($data['keepClippingPath']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $value_2 = $data['resizeAction'];
            if (is_array($data['resizeAction']) and \array_key_exists('width', $data['resizeAction']) and \array_key_exists('height', $data['resizeAction']) and \array_key_exists('resizeMode', $data['resizeAction'])) {
                $value_2 = $this->denormalizer->denormalize($data['resizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->setResizeAction($value_2);
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->setResizeAction(null);
            unset($data['resizeAction']);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = [];
            foreach ($data['actions'] as $value_3) {
                $values[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ImageActionBase::class, 'json', $context);
            }
            $object->setActions($values);
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
            unset($data['actions']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
            unset($data['extension']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('colorProfile') && null !== $data->getColorProfile()) {
            $value = $data->getColorProfile();
            if (is_string($data->getColorProfile())) {
                $value = $data->getColorProfile();
            }
            $dataArray['colorProfile'] = $value;
        }
        if ($data->isInitialized('colorTransformationIntent') && null !== $data->getColorTransformationIntent()) {
            $value_1 = $data->getColorTransformationIntent();
            if (is_string($data->getColorTransformationIntent())) {
                $value_1 = $data->getColorTransformationIntent();
            }
            $dataArray['colorTransformationIntent'] = $value_1;
        }
        if ($data->isInitialized('horizontalResolution') && null !== $data->getHorizontalResolution()) {
            $dataArray['horizontalResolution'] = $data->getHorizontalResolution();
        }
        if ($data->isInitialized('verticalResolution') && null !== $data->getVerticalResolution()) {
            $dataArray['verticalResolution'] = $data->getVerticalResolution();
        }
        if ($data->isInitialized('keepClippingPath') && null !== $data->getKeepClippingPath()) {
            $dataArray['keepClippingPath'] = $data->getKeepClippingPath();
        }
        if ($data->isInitialized('resizeAction') && null !== $data->getResizeAction()) {
            $value_2 = $data->getResizeAction();
            if (is_object($data->getResizeAction())) {
                $value_2 = $data->getResizeAction() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getResizeAction(), 'json', $context));
            }
            $dataArray['resizeAction'] = $value_2;
        }
        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values = [];
            foreach ($data->getActions() as $value_3) {
                $values[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['actions'] = $values;
        }
        if ($data->isInitialized('extension') && null !== $data->getExtension()) {
            $dataArray['extension'] = $data->getExtension();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\PngFormat::class => false];
    }
}