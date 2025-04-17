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
class TiffFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\TiffFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\TiffFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\TiffFormat();
        if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
            $data['horizontalResolution'] = (double) $data['horizontalResolution'];
        }
        if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
            $data['verticalResolution'] = (double) $data['verticalResolution'];
        }
        if (\array_key_exists('keepClippingPath', $data) && \is_int($data['keepClippingPath'])) {
            $data['keepClippingPath'] = (bool) $data['keepClippingPath'];
        }
        if (\array_key_exists('alphaPremultiplied', $data) && \is_int($data['alphaPremultiplied'])) {
            $data['alphaPremultiplied'] = (bool) $data['alphaPremultiplied'];
        }
        if (\array_key_exists('includeUnspecifiedTiffExtraChannels', $data) && \is_int($data['includeUnspecifiedTiffExtraChannels'])) {
            $data['includeUnspecifiedTiffExtraChannels'] = (bool) $data['includeUnspecifiedTiffExtraChannels'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $object->setColorProfile($data['colorProfile']);
            unset($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->setColorProfile(null);
        }
        if (\array_key_exists('colorTransformationIntent', $data)) {
            $object->setColorTransformationIntent($data['colorTransformationIntent']);
            unset($data['colorTransformationIntent']);
        }
        if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
            $object->setHorizontalResolution($data['horizontalResolution']);
            unset($data['horizontalResolution']);
        }
        elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
            $object->setHorizontalResolution(null);
        }
        if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
            $object->setVerticalResolution($data['verticalResolution']);
            unset($data['verticalResolution']);
        }
        elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
            $object->setVerticalResolution(null);
        }
        if (\array_key_exists('keepClippingPath', $data)) {
            $object->setKeepClippingPath($data['keepClippingPath']);
            unset($data['keepClippingPath']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $object->setResizeAction($data['resizeAction']);
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->setResizeAction(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = [];
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ImageActionBase::class, 'json', $context);
            }
            $object->setActions($values);
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('alphaPremultiplied', $data)) {
            $object->setAlphaPremultiplied($data['alphaPremultiplied']);
            unset($data['alphaPremultiplied']);
        }
        if (\array_key_exists('compressionType', $data)) {
            $object->setCompressionType($data['compressionType']);
            unset($data['compressionType']);
        }
        if (\array_key_exists('includeUnspecifiedTiffExtraChannels', $data)) {
            $object->setIncludeUnspecifiedTiffExtraChannels($data['includeUnspecifiedTiffExtraChannels']);
            unset($data['includeUnspecifiedTiffExtraChannels']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('colorProfile') && null !== $data->getColorProfile()) {
            $dataArray['colorProfile'] = $data->getColorProfile();
        }
        if ($data->isInitialized('colorTransformationIntent') && null !== $data->getColorTransformationIntent()) {
            $dataArray['colorTransformationIntent'] = $data->getColorTransformationIntent();
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
            $dataArray['resizeAction'] = $data->getResizeAction();
        }
        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values = [];
            foreach ($data->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['actions'] = $values;
        }
        if ($data->isInitialized('alphaPremultiplied') && null !== $data->getAlphaPremultiplied()) {
            $dataArray['alphaPremultiplied'] = $data->getAlphaPremultiplied();
        }
        if ($data->isInitialized('compressionType') && null !== $data->getCompressionType()) {
            $dataArray['compressionType'] = $data->getCompressionType();
        }
        if ($data->isInitialized('includeUnspecifiedTiffExtraChannels') && null !== $data->getIncludeUnspecifiedTiffExtraChannels()) {
            $dataArray['includeUnspecifiedTiffExtraChannels'] = $data->getIncludeUnspecifiedTiffExtraChannels();
        }
        if ($data->isInitialized('extension') && null !== $data->getExtension()) {
            $dataArray['extension'] = $data->getExtension();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TiffFormat::class => false];
    }
}