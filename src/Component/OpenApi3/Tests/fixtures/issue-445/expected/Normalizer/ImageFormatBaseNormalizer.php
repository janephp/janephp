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
class ImageFormatBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ImageFormatBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ImageFormatBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ImageFormatBase();
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
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $value = $data['colorProfile'];
            if (is_string($data['colorProfile'])) {
                $value = $data['colorProfile'];
            }
            $object->colorProfile = $value;
            unset($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->colorProfile = null;
            unset($data['colorProfile']);
        }
        if (\array_key_exists('colorTransformationIntent', $data)) {
            $value_1 = $data['colorTransformationIntent'];
            if (is_string($data['colorTransformationIntent'])) {
                $value_1 = $data['colorTransformationIntent'];
            }
            $object->colorTransformationIntent = $value_1;
            unset($data['colorTransformationIntent']);
        }
        if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
            $object->horizontalResolution = $data['horizontalResolution'];
            unset($data['horizontalResolution']);
        }
        elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
            $object->horizontalResolution = null;
            unset($data['horizontalResolution']);
        }
        if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
            $object->verticalResolution = $data['verticalResolution'];
            unset($data['verticalResolution']);
        }
        elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
            $object->verticalResolution = null;
            unset($data['verticalResolution']);
        }
        if (\array_key_exists('keepClippingPath', $data)) {
            $object->keepClippingPath = $data['keepClippingPath'];
            unset($data['keepClippingPath']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $value_2 = $data['resizeAction'];
            if (is_array($data['resizeAction']) and \array_key_exists('width', $data['resizeAction']) and \array_key_exists('height', $data['resizeAction']) and \array_key_exists('resizeMode', $data['resizeAction'])) {
                $value_2 = $this->denormalizer->denormalize($data['resizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->resizeAction = $value_2;
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->resizeAction = null;
            unset($data['resizeAction']);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = [];
            foreach ($data['actions'] as $value_3) {
                $values[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\ImageActionBase::class, 'json', $context);
            }
            $object->actions = $values;
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->actions = null;
            unset($data['actions']);
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
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('colorProfile', get_object_vars($data)) && null !== ($data->colorProfile ?? null)) {
            $value = $data->colorProfile ?? null;
            if (is_string($data->colorProfile ?? null)) {
                $value = $data->colorProfile ?? null;
            }
            $dataArray['colorProfile'] = $value;
        }
        if (array_key_exists('colorTransformationIntent', get_object_vars($data)) && null !== ($data->colorTransformationIntent ?? null)) {
            $value_1 = $data->colorTransformationIntent ?? null;
            if (is_string($data->colorTransformationIntent ?? null)) {
                $value_1 = $data->colorTransformationIntent ?? null;
            }
            $dataArray['colorTransformationIntent'] = $value_1;
        }
        if (array_key_exists('horizontalResolution', get_object_vars($data)) && null !== ($data->horizontalResolution ?? null)) {
            $dataArray['horizontalResolution'] = $data->horizontalResolution ?? null;
        }
        if (array_key_exists('verticalResolution', get_object_vars($data)) && null !== ($data->verticalResolution ?? null)) {
            $dataArray['verticalResolution'] = $data->verticalResolution ?? null;
        }
        if (array_key_exists('keepClippingPath', get_object_vars($data)) && null !== ($data->keepClippingPath ?? null)) {
            $dataArray['keepClippingPath'] = $data->keepClippingPath ?? null;
        }
        if (array_key_exists('resizeAction', get_object_vars($data)) && null !== ($data->resizeAction ?? null)) {
            $value_2 = $data->resizeAction ?? null;
            if (is_object($data->resizeAction ?? null)) {
                $value_2 = ($data->resizeAction ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->resizeAction ?? null, 'json', $context));
            }
            $dataArray['resizeAction'] = $value_2;
        }
        if (array_key_exists('actions', get_object_vars($data)) && null !== ($data->actions ?? null)) {
            $values = [];
            foreach ($data->actions ?? null as $value_3) {
                $values[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['actions'] = $values;
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
        return [\PicturePark\API\Model\ImageFormatBase::class => false];
    }
}